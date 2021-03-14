<?php
  $message = "Your order was recieved";
  echo "
    <script type='text/javascript'>
        document.getElementById('fname').value='';
        document.getElementById('lname').value='';
        document.getElementById('email').value='';
        document.getElementById('phone_number').value='';
        alert('$message');
    </script>";

  header('Location: details_Information');
  exit;