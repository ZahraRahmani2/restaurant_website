<?php
  echo "
    <script type='text/javascript'>
        document.getElementById('fname').value='';
        document.getElementById('lname').value='';
        document.getElementById('email').value='';
        document.getElementById('phone_number').value='';
        
        function sleep (time) {
            return new Promise((resolve) => setTimeout(resolve, time));
        }
        sleep(500).then(() => {
            alert('Your order was recieved');
        });
    </script>";

  header('Location: details_Information.php');
  
  exit;