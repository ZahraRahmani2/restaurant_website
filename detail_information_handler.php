<?php
  echo "<h3>". $_GET['fname'].$_GET['lname']."we have recieved your order</h3>";
  header('Location: details_Information.php');
  

  exit;