<?php
  echo "
    <script type='text/javascript'>
        document.getElementById('fname').value='';
        document.getElementById('lname').value='';
        document.getElementById('email').value='';
        document.getElementById('phone_number').value='';
        <h3> Your order was recieved </h3>
    </script>";

  header('Location: details_Information.php');

  exit;