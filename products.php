<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Products</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/products.js"></script>

	</head>
	<body>
		<div id="body">
			<div id="header">
				<a href="sample.html"><img id="mainlogo" src="img/mainlogo.png" alt="Fourth Coffee Logo"/></a>
				<h1 id="title">Fourth Coffee</h1>
				<p id="tagline">Bringing the world to your cup</p>
				<ul id="navlinks">
					<li><a href="index.php">Home</a></li>
					<li><a class="current" href="products.php">Products</a></li>
					<li><a href="support.php">Support</a></li>
					<li><a href="order.php">Order List</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="login.php">Log in</a></li>
					<li class="last"><a href="signup.php">Sign up</a></li>
				</ul>
			</div>

			<div id="main">
				<br>
				<h2>Now you are in product page!</h2>					
			</div>
			<div id="products_table">
			</div>	
				<script type="text/javascript" src="js/table.js"></script>
	        <br><br>
	        <div id="order_form">
	        	<a name="order"><h2>Order the coffee now</h2></a>
	        	<form action="order_products.php" method="post" accept-charset="utf-8">
        			<label for="product_name">Product name <input id="product_name" type="text" name="productName" required placeholder="Enter product name"></label>
        			<br><br>
        			<label for="quantity">Order quantity <input id="quantity" type="number"  name="quantity" value="1" min="1" max="40" step="1"    placeholder="Enter quantity"></label><br><br>
					<?php if (isset($_SESSION['username'])): ?>
						<label for="user_name">Username <input id="user_name" type="text" name="userName" required placeholder="Enter username" value="<?= htmlspecialchars($_SESSION['username'])  ?>"></label>
					<?php else: ?>
						<label for="user_name">Username <input id="user_name" type="text" name="userName" required placeholder="Enter username"></label>
					<?php endif; ?>
        			<br><br>
        			<label for="address">User address<input id="address" type="text" name="address" required placeholder="Enter user address"></label>	
        			<button type="submit">Submit</button>
        		</form>	
	        </div>
	        <br><br>
			<div id="footer">
					<p>Contact: 213-333-3333</p>
			</div>
		</div>        
	</body>
</html>