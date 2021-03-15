<?php
  session_start();

  $errors=array();

  if (strlen($_POST['username']) > 30) {
    $errors[] = "Username: Sorry, your name is too long";
  }
  
  if (strlen($_POST['lastname']) > 30) {
    $errors[] = "Last Name: Sorry, your last name is too long";
  }
  $email = $_POST['email'];
  if (strlen($email) > 60) {
    $errors[] = "Email length: Sorry, your email is too long";
  }

  if (!preg_match("/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/",$email)) {
    $errors[] = "Email Format: Sorry, only the email with the format yourname@domain.extension.(optional extension) is valid";
  }

  if (strlen($_POST['phoneNumber']) > 10) {
    $errors[] = "Phone Number: Sorry, your phone number is too long";
  }


  if (count($errors) > 0) {
    //echo "<pre>" . print_r($errors, 1) . "</pre>";
    $_SESSION['order_message'] = $errors;
    $_SESSION['classname'] = "error_message";
    header('Location: details_Information.php');
    exit;
  } else {
    $_SESSION['classname']="order_recived";
    $_SESSION['order_message']=array("We have recieved your order");
  }
  
  header('Location: details_Information.php');
  exit;
 