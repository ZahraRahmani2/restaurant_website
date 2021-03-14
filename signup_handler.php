<?php
$errors=array();
// $username = $_POST['username'];

if (strlen($_POST['username']) > 30) {
  $errors[] = "Sorry, your name is too long";
}

// $lastname = $_POST['lastname'];

if (strlen($_POST['lastname']) > 30) {
  $errors[] = "Sorry, your last name is too long";
}

$email = $_POST['email'];
if (strlen($email) > 60) {
  $errors[] = "Sorry, your email is too long";
}

if (strlen($_POST['phoneNumber']) > 10) {
  $errors[] = "Sorry, your phone number is too long";
}

if (strlen($_POST['password']) > 20) {
  $errors[] = "Sorry, your password is too long";
}


//Email for regular expression

if (!preg_match("^\w+@\w+\.\w+$",$email)) {
  $errors[] = "Sorry, only the name with the format mahdi@gmail.com is valid";
}

if (count($errors) > 0) {
  echo "<pre>" . print_r($errors, 1) . "</pre>";
  exit;
}

require_once 'Dao.php';
  $dao = new Dao();
  $dao->insertUser ($_POST['username'], $_POST['lastname'], $_POST['password'],
  $_POST['email'], $_POST['phoneNumber']);

  header('Location: signup.php');
  exit;