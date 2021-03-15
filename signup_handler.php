<?php
session_start();

$errors=array();
// $username = $_POST['username'];

if (strlen($_POST['username']) > 30) {
  $errors[] = "Sorry, your name is too long";
}

// $lastname = $_POST['lastname'];

if (strlen($_POST['lastname']) > 30) {
  $errors[] = "Sorry, your last name is too long";
}

if (strlen($_POST['phoneNumber']) > 10) {
  $errors[] = "Sorry, your phone number is too long";
}

if (strlen($_POST['password']) > 20) {
  $errors[] = "Sorry, your password is too long";
}

$email = $_POST['email'];
if (strlen($email) > 60) {
  $errors[] = "Sorry, your email is too long";
}

if (!preg_match("/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/",$email)) {
  $errors[] = "Sorry, only the email with the format yourname@domain.extension.(optional extension) is valid";
}

if (count($errors) > 0) {
  echo "<pre>" . print_r($errors, 1) . "</pre>";
  $_SESSION['messages'] = $errors;
  $_SESSION['class'] = "error_message";
  header('Location: signup.php');
  exit;
} else {
  $_SESSION['class'] = "signup_message";
  $_SESSION['messages'] = array("Thanks for signing in!");
}

require_once 'Dao.php';
  $dao = new Dao();
  $dao->insertUser ($_POST['username'], $_POST['lastname'], $_POST['password'],
  $_POST['email'], $_POST['phoneNumber']);

  header('Location: signup.php');
  exit;