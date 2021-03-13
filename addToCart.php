<?php

  require_once 'Dao.php';
  $dao = new Dao();
  $dao->addToCart($_GET['id']);

  header('Location: order.php');
  exit;