<?php

function emptyInputsSignup($Intials, $LastName, $Email, $NIC_Number, $Phone_Number, $District, $DS_Divition, $Password, $RePassword) {
  $result;
  if (empty($Intials) || empty($LastName) || empty($Email) || empty($NIC_Number) || empty($Phone_Number) || empty($District) || empty($DS_Divition) || empty($Password) || empty($RePassword)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUid($NIC_Number) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $NIC_Number)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($Email) {
  $result;
  if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($Password, $RePassword) {
  $result;
  if ($Password !== $RePassword) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $NIC_Number) {
  $sql = "SELECT * FROM `user-registation` WHERE NIC_Number = ?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:../signup.php?error=stmtFailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $NIC_Number);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    return false;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $Initials, $LastName, $Email, $NIC_Number, $Phone_Number, $District, $DS_Divition, $Password) {
  $sql = "INSERT INTO `user-registation` (Initials, LastName, Email, NIC_Number, Phone_Number, District, DS_Divition, Password) VALUES (?,?,?,?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:../signup.php?error=stmtFailed");
    exit();
  }
  $hashPwd = password_hash($Password, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "ssssssss", $Initials, $LastName, $Email, $NIC_Number, $Phone_Number, $District, $DS_Divition, $hashPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("Location:../signin.php?error=none");
  exit();
}


function emptyInputsSignin($NIC_Number, $Password) {
  $result;
  if (empty($NIC_Number) || empty($Password)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function LoginUser($conn, $NIC_Number, $Password) {
  $uidExists = uidExists($conn, $NIC_Number);
  if ($uidExists === false) {
    header("Location:../signup.php?error=wronglogin2");
    exit();
  }

  $pwdHashed = $uidExists["Password"];
  $checkPwd = password_verify($Password, $pwdHashed);
  if ($checkPwd === false) {
    header("Location:../signin.php?error=wronglogin1");
    exit();
  } else if ($checkPwd == true) {
    session_start();
    $_SESSION["Email"] = $uidExists["Email"];
    $_SESSION["NIC_Number"] = $uidExists["NIC_Number"];
    header("Location:../index.php");
    exit();
  }
}

?>
