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




    <a href='delete_comment.php?id={$comment['comment_id']}'>X</a>

    <?php
      foreach($foods as $food){  
        echo "<div class=\"menucolumn\">
        <img src=". htmlspecialchars($food['images'])."> 
        <h2>". htmlspecialchars($food['foodName'])."</h2>
        <p><strong>Price: ". htmlspecialchars($food['price'])."</strong></p>
        <form action=\"addToCart.php?id={$food['foodID']}\">
          <input type=\"submit\" value=\"Add To Cart\" />
        </form>    
      </div>";      
      }
    ?>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>