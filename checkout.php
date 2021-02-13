<html>
  <head>
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="checkout.css">
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="checkout-content">
    	<h1 id="Ordersummary">
		Order Summary
		</h1>
		<div class="checkout-foods">
			<div class="checkout-food">
				<h3>Biryani</h3>
				<h3>Price: $ 20</h3>
				<h3>Subtotal: $20</h3>
			</div>
			<div class="checkout-food">
				<button>Delete</button>
			</div>
		</div>
		<div class="checkout-cancel">
			<button>Checkout</button>
			<button>Cancel</button>
		</div>
	</div>
    <?php include "footer.php"; ?>
  </body>
</html>