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

    <?php
      require_once 'Dao.php';
      $dao = new Dao();
      $foods = $dao->getfoods();

    ?>
    <div class="content">
    <?php
      foreach($foods as $food){  
        echo "<div class=\"menucolumn\">
        <img src={$food['images']}> 
        <h2> {$food['foodName']}</h2>
        <p><strong>Price: {$food['price']}</strong></p>
        <button>Add To Cart</button>    
      </div>";      
      }
    ?>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>