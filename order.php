<html>
  <head>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="order.css">
  </head>
  <body>
    <?php include "header.php"; ?>
    <h1 id="food-menu">
      Food Menu 
    </h1>
    <div class="content">
      <div class="menucolumn">
        <img src="images/Burger.PNG" alt="Food1"> 
        <h2> Burger</h2>
        <p><strong>Price: $15</strong></p>
        <button>Add To Cart</button>
      </div>
      <div class="menucolumn">
        <img src="images/Chicken_biryani.PNG" alt="Food2"><br>
        <h2> Biryani</h2>
        <p><strong>Price: $25 </strong></p>
        <button>Add To Cart</button>
      </div>
      <div class="menucolumn">
        <img src="images/Spagathti.PNG" alt="Food3"><br>
        <h2>Spaghetti</h2>
        <p><strong>Price: $20 </strong></p>
        <button>Add To Cart</button>
      </div>
      <div class="menucolumn">
        <img src="images/Falafel.PNG" alt="Food4"><br>
        <h2> Falafel</h2>
        <p><strong>Price: $10 </strong></p>
        <button>Add To Cart</button>
      </div>
      <button id="HomeButton" onclick="gohome()">Homepage</button>
      <script>
        function gohome() {
          window.history.back();
        }
      </script>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>