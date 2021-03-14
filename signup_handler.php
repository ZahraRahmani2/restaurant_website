<?php
$errors=array();
$username = $_POST['username'];

if (strlen($_POST['username']) > 30) {
  $errors[] = "Sorry, your name is too long";
}

//Email for regular expression


// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
// $email = test_input($_POST["email"]);
$email = $_POST["email"];
if (!preg_match("/^\w+@\w+\.\w+$/",$email)) {
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