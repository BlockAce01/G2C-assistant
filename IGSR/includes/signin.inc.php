<?php
session_start();
if (isset($_POST["submit"])) {
  $NIC_Number = $_POST["NIC"];
  $Password = $_POST["Pass"];

  require_once 'dbh.inc.php';
  require_once 'function.inc.php';

  $emptyInputs = emptyInputsSignin($NIC_Number, $Password);

  if ($emptyInputs !== false) {
    header("Location:../signin.php?error=emptyinput");
    exit();
  }

  LoginUser($conn, $NIC_Number, $Password);
} else {
  header('location:../signin.php');
  exit();
}
?>
