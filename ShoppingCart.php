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
			<h3>Biryani</h3>
			<h3>Price: $ 20</h3>
			<h3>Subtotal: $20</h3>
			<button>Delete</button>
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