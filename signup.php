<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container center_div border border-dark">
  <h1> Sign Up </h1>
  <form method="post" action="signup_handler.php">
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="Name" name="username" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="LastName">Last Name</label>
      <input type="text" class="form-control" id="LastName" name="lastname" placeholder="Last Name">
    </div>
    <div class="form-group">
      <label for="Password">Password</label>
      <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="Email">Email address</label>
      <input type="text" class="form-control" id="Email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="PhoneNumber">Phone Number</label>
      <input type="number" class="form-control" id="PhoneNumber" name="phoneNumber" placeholder="Phone Number">
    </div>
   
    <?php
    if (isset($_SESSION['messages'])) {
      foreach ($_SESSION['messages'] as $message) {
        echo "<div class='" . $_SESSION['class'] . " message'>{$message}</div>";
      }
    }
    unset($_SESSION['messages']);
    ?>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
