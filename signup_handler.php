<?php
require_once 'Dao.php';
  $dao = new Dao();
  $dao->insertUser ($_POST['username'], $_POST['lastname'], $_POST['password'],
  $_POST['email'], $_POST['phoneNumber']);

  header('Location: signup.php');
  exit;