<?php
  echo "
    <script type='text/javascript'>
        document.getElementById('fname').value='';
        document.getElementById('lname').value='';
        document.getElementById('email').value='';
        document.getElementById('phone_number').value='';
        document.getElementById('message').innerHTML = 'Your order was recieved';  
    </script>";

  header('Location: details_Information.php');

  exit;