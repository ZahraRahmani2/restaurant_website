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
  <?php include "header.php"; ?>

  <!-- Header Image -->
  <section class="banner">
    <img src="images/pic1.PNG" alt="welcome image" />
    <div class="welcome">
      <h1>Welcome to <br><span>Leaf Restaurant</span></h1>
    </div>
    <button class="btn">Order Now</button>
  </section>

  <?php include "nav.php"; ?>
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
  <?php include "footer.php"; ?>

</div>
</body>
</html>