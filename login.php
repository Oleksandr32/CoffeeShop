<?php 
	session_start();

	// variable for error message
	$message;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// include db.php file
		require_once('db.php');

        $userName = $_POST['username'];

        $query = "SELECT * FROM users WHERE username = '{$userName}'";
        $result = executeOuery($query);

        if (!$result)
			die("Could not execute this query");

        if (mysql_num_rows($result) > 0) {
        	$passwordEntered = crypt( $_POST['password'], CRYPT_MD5 );

        	while ($row = mysql_fetch_assoc($result)) {
			    $passwordStored = $row['password'];
			}


	        if ($passwordEntered == $passwordStored) {
	        	$_SESSION['username']= $userName;

	        	header('Location: products.php');
	        } else {
	        	$message = 'You entered the wrong password.';
	        }				

		} else {
			$message = 'A user with this username is missing from the database.<br>Please first <a href="signup.php">register</a>.';
		}       
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Fourth Coffee</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/products.js"></script>
	</head>
	<body>
		<div id="body">
			<div id="header">
				<a><img id="mainlogo" src="img/mainlogo.png" alt="Fourth Coffee Logo"/></a>
				<h1 id="title">Fourth Coffee</h1>
				<p id="tagline">Bringing the world to your cup</p>
				<ul id="navlinks">
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="support.php">Support</a></li>
					<li><a href="order.php">Order List</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a class="current" href="login.php">Log in</a></li>
					<li class="last"><a href="signup.php">Sign up</a></li>
				</ul>
			</div>
			<div id="order_form">
				<?php if (isset($message)): ?>
					<?php	echo "<p id=\"error_message\">".$message."</p>"; ?>
				<?php endif; ?>
	        	<h2>Log in</h2>
	        	<form action="login.php" method="post" accept-charset="utf-8">
        			<label for="username">Username <input id="username" type="text" name="username" required placeholder="Enter username"></label><br><br>
        			<label for="password">Password <input id="password" type="password" name="password" required></label><br><br>
        			<button type="submit">Submit</button><br><br>
        		</form>	
	        </div>	        
			<div id="footer">
				<p>Contact: 213-333-3333</p>
	    	</div>
    	</div>		
	</body>
</html>