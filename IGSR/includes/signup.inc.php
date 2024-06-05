<?php
if (isset($_POST["submit"])) {
  $Intials = $_POST["initials"];
  $LastName = $_POST["lastname"];
  $Email = $_POST["email"];
  $NIC_Number = $_POST["nic"];
  $Phone_Number = $_POST["pnumber"];
  $District = $_POST["district"];
  $DS_Divition = $_POST["dsdivition"];
  $Password = $_POST["password"];
  $RePassword = $_POST["repassword"];

  require_once 'dbh.inc.php';
  require_once 'function.inc.php';

  
  $emptyInputs = emptyInputsSignup($Intials, $LastName, $Email, $NIC_Number, $Phone_Number, $District, $DS_Divition, $Password, $RePassword);
  $invalidUid = invalidUid($NIC_Number);
  $invalidEmail = invalidEmail($Email);
  $pwdMatch = pwdMatch($Password, $RePassword);
  $uidExists = uidExists($conn, $NIC_Number, $Email);

 
  if ($emptyInputs !== false) {
    header("Location:../signup.php?error=emptyinput");
    exit();
  }


  if ($invalidUid !== false) {
    header("Location:../signup.php?error=invalidNic");
    exit();
  }

  if ($invalidEmail !== false) {
    header("Location:../signup.php?error=InvalidEmail");
    exit();
  }

  if ($pwdMatch !== false) {
    header("Location:../signup.php?error=passwordDontMatch");
    exit();
  }

  if ($uidExists !== false) {
    header("Location:../signup.php?error=NicIsTacken");
    exit();
  }

  createUser($conn, $Intials, $LastName, $Email, $NIC_Number, $Phone_Number, $District, $DS_Divition, $Password);
} else {
  header('Location:../signin.php');
  exit();
}
