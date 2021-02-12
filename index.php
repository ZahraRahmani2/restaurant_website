<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resturant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <!-- header -->
  <header>
    <h1>Leaf Restaurant</h1>
  </header>

  <!-- Header Image -->
  <section class="banner">
    <img src="images/pic1.PNG" alt="welcome image" />
    <div class="welcome">
      <h1>Welcome to <br><span>Leaf Restaurant</span></h1>
    </div>
    <button class="btn">Order Now</button>
  </section>

  <nav class="main-nav">
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
  <main>
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
  </main>
  
  <!-- Footer -->
  <footer>
    <h3>Join Us on Social Media</h3>
    <a href="#">
         <img alt="Facebook" src="images/Facebook.png">
    </a>
        <a href="#">
         <img alt="twitter" src="images/Twitter.png">
    </a>
        <a href="#">
         <img alt="linkedin" src="images/Linkedin.png">
    </a>
        <a href="#">
         <img alt="instagram" src="images/Instagram.png">
    </a> 
  </footer>

</div>
</body>
</html>
