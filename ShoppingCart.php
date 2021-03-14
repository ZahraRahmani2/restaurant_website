<html>
  <head>
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="ShoppingCart.css">
  </head>
  <body>
    
    <?php include "header.php"; ?>
    <h1 id="Ordersummary">
	Order Summary
	</h1>
    <div class="checkout-content">

		<div class="DeleteFood">

			<?php
				require_once 'Dao.php';
				$dao = new Dao();
				$shoppingitems = $dao->getShoppingItems();
				$total=0;
				foreach($shoppingitems as $item){  
					echo "<h3>{$item['foodName']}</h3>
					<h3>Price: {$item['price']}</h3>
					<button>Delete</button>";
					$total+=$item['price'];
				}
				echo "<h3>SubTotal:". $total."</h3>";
			?>

		</div>
		<div class="checkout">
			<a href="details_Information.php">
				<button>Checkout
				</button>
			</a>
		</div>
	</div>
    <?php include "footer.php"; ?>
  </body>
</html>