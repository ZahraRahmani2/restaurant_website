<?php
  
  header('Location: details_Information.php');
  echo "<h3>". $_POST['fname'].$_POST['lname']."we have recieved your order</h3>";
  
  exit;