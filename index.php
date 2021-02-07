<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resturant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>
<body id="body">
	<!--
	Fixed Navigation
	==================================== -->
	<header id="navigation">
	  <div class="container">
	    <!-- main nav -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Burg Restaurant</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="Menu.php">Menu</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contact">Contact Us</a>
		      </li>
		       <li class="nav-item">
		        <a class="nav-link" href="#about">About US</a>
		      </li>

		       <li class="nav-item">
		        <a class="nav-link" href="login.php">Login</a>
		      </li>

		       <li class="nav-item">
		        <a class="nav-link" href="signup.php">Sign Up</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">
			        <button type="button" class="btn btn-default btn-sm">
	          		<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
	        		</button>
        		</a>
		      </li>

		    </ul>
		  </div>
		</nav>
	    <!-- /main nav -->
	  </div>
	</header>
	<!--
	End Fixed Navigation
	==================================== -->

	<!--
	Start About Section
	==================================== -->
	<section>
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="pic1.png" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="background1.png" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="background2.png" alt="Third slide">
			    </div>
			    <div class="carousel-caption">
		          	<button type="button" class="btn btn-success">Order Now</button>
		        </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		
	</section>

	<!--End Section -->

	<!--Food Section Start -->
		<section>
			<div class="container" >
				<div class="row" style="margin-top: 50px">
					<a href="menu.php"></a>
					<div class="col-md-3">
						<div id="0" class="card" onclick="showFood(this.id)" style="width: 18rem;">
						  <img class="card-img-top" src="food1.png" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text"><strong>Homemade Burger $8</strong></p>
						  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div id="1" class="card" onclick="showFood(this.id)" style="width: 18rem;">
						  <img class="card-img-top" src="food2.png" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text"><strong>Falafel $10</strong></p>
						  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div id="2" class="card" onclick="showFood(this.id)" style="width: 18rem;">
						  <img class="card-img-top" src="Chicken_biryani.png" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text"><strong>Chicken biryani $18</strong></p>
						  </div>
						</div>
					</div>

					<div class="col-md-3">
						<div <div id="3" class="card" onclick="showFood(this.id)" style="width: 18rem;">
						  <img class="card-img-top" src="Spagathti.png" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text"><strong>Spagathi $10</strong></p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!--End Section Food -->

	<!-- about us -->
		<section>
			<div class="container">
				<div id="about">
					<h2>About our Restaurant</h2>
						<h4>Computers at the first place was invented to automate calculation of the frequently mathematical calculation that were already solved. Today, people use computers to save money, time and work.
						Software reuse is an interesting part of software engineering and how they find solution for common problem that exist. Engineers tend to solve a problem once and people can use it as often as they want. Computer engineers recognize a problem and come up with a solution that can be used over and over. These software solutions include in the areas of Social Communication, Jobs, Artificial Intelligence, Education, Transportation, and Security.
						</h4>
						<h4>
						Computers at the first place was invented to automate calculation of the frequently mathematical calculation that were already solved. Today, people use computers to save money, time and work.
						Software reuse is an interesting part of software engineering and how they find solution for common problem that exist. Engineers tend to solve a problem once and people can use it as often as they want. Computer engineers recognize a problem and come up with a solution that can be used over and over. These software solutions include in the areas of Social Communication, Jobs, Artificial Intelligence, Education, Transportation, and Security.
						</h4>
				</div>
			</div>
		</section>
	<!-- End about us -->
	
	<!-- contact us -->
		<section>
			<div class="container">
				<div id="contact">
					<h2>Contact Us</h2>
						<h4>(208)919-2761</h4>
				</div>
			</div>
		</section>
	<!-- End contact us -->

	<!-- Footer -->
	<footer>
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4">
	          <h4>Quick Links</h4>
	          <ul>
				<li><a title="About Us" href="https://queensvaad.org/vhq/about-us/">About Us</a></li>
				<li><a title="About Us" href="/vhq/contact-us/">Contact Us</a></li>	
				<li><a href="menu.php">Menu</a></li>
	    		<li><a href="https://www.facebook.com/Vaad-Harabonim-of-Queens-541540166015406" target="_blank"><i class="fa fa-facebook facebook">
	    		</i></a></li>
	    		<li><a href="https://twitter.com/vaad_queens" target="_blank"><i class="fa fa-twitter twitter"></i></a></li>
	          </ul>
	        </div>
	      <div class="col-md-4">
	          <h4>Map</h4>
	          <ul>
				<li><a title="Din Torah Application" href="https://www.google.com/maps/place/Nampa,+ID/@43.5861655,-116.632933,12z/data=!3m1!4b1!4m8!1m2!2m1!1sgoogle+map!3m4!1s0x54ae4c694e97f129:0xae19866371324a52!8m2!3d43.5788175!4d-116.55978">map</a>
				</li>

				<img src="map.png">
	          </ul>	       
	      </div>
		  </div>
		</div>
	</footer>
	<!--/ Footer -->
	<div id="copy">
	 	
	</div>

	<!-- 
	    Essential Scripts
	    =====================================-->
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
