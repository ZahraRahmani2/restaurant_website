<?php
  session_start();
  $_SESSION['order_message']="We have recieved your order";
  $_SESSION['classname']="details_Info";
  header('Location: details_Information.php');
  exit;
 