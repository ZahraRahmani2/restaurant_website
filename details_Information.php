<html>
  <head>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="details_Information.css"> 
  </head>
<body>

<div class="Information">
	<h1>Enter Your Information</h1>
	<form id="form1" action="/action_page.php">
		<div class="form-group">
		  <label for="fname">First name</label><br>
		  <input type="text" class="form-control" id="fname" name="fname" value="John">
		</div>
		<div class="form-group">
		  <label for="lname">Last name</label><br>
		  <input type="text" class="form-control" id="lname" name="lname" value="Doe">
		</div>
		<div class="form-group">
		   <label for="email">Email</label><br>
		  <input type="text" class="form-control" id="email" name="email" value="JohnDoe@gmail.com">
		</div>
		<div class="form-group">
		  <label for="phone_number">Phone Number</label><br>
		  <input type="text" class="form-control" id="phone_number" name="phone" value="(208) 919-4949">
	    </div>
		  <input type="submit" value="Payment">
	</form> 
</div>

</body>
</html>