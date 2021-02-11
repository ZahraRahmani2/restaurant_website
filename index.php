<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resturant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="content">
	  <!-- main nav -->
    <header>
      <h1>Leaf Restaurant</h1>
    </header>

  <!-- Header Image -->
  <div class="top-image">
    <img id="header-image" src="images/pic1.PNG" />
    <button class="btn">Order Now</button>
  </div>

  <nav>
      <ul>   
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="#hours">Hours</a></li>
        <li><a href="#location">Location</a></li>
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#contact-us">Contact Us</a></li>
        <li id="shopping-cart"><a href="#">Shopping Cart</a></li>
      </ul>
    </nav>
      <!-- End of main nav -->

  <!-- food image section -->
  <div class="row">
    <div class="column">
      <img src="images/food1.PNG" alt="Food1"> <br>
      <p> Burger</p>
    </div>
    <div class="column">
      <img src="images/Chicken_biryani.PNG" alt="Food2"><br>
      <p> Chicken Biryani</p>
    </div>
    <div class="column">
      <img src="images/Spagathti.PNG" alt="Food3"><br>
      <p> Spagathti</p>
    </div>
    <div class="column">
      <img src="images/food2.PNG" alt="Food4"><br>
      <p> Falafel</p>
    </div>
  </div>

  <!-- Hours -->
  <div>
    <h3 id="hours">Hours</h3>
    <p>List Monday to Friday open hours 10:00am - 11:00pm.</p>
  </div>

  <!-- About us -->
  <div>
    <h3 id="about-us">About Us</h3>
    <p>About the restaurant and everything a customer needs to know.</p>
  </div>

 
  <!-- Contact us -->
  <div>
    <h3 id="contact-us">Contact Us</h3>
    <p>(208) 919 - 3345</p>
  </div>
  
  <!-- Footer -->
  <footer>
    <div class="column1">
        <h4>Quick Links</h4>
        <ul>
          <li><a title="About Us" href="https://queensvaad.org/vhq/about-us/">About Us</a></li>
          <li><a title="Contact Us" href="/vhq/contact-us/">Contact Us</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="https://www.facebook.com/Vaad-Harabonim-of-Queens-541540166015406" target="_blank"><i class="fa fa-facebook facebook">
          </i></a></li>
          <li><a href="https://twitter.com/vaad_queens" target="_blank"><i class="fa fa-twitter twitter"></i></a></li>
        </ul>
    </div>
    <div id="location" class="column1">
      <h4>Location</h4>
      <p>8312 E newdale ave, Nampa, ID.</p>
      <img src="images/map.PNG">
    </div>
</footer>

</div>
</body>
</html>
