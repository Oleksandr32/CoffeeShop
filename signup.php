<?php
	session_start();

	// variable for error message
	$message;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// include db.php file
		require_once('db.php');

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];

        if ($password != $confpassword) {
        	$message = 'Password must equal Confirm Password';
        } else {
	        $query = "SELECT * FROM users WHERE username = '{$userName}'";
	        $result = executeOuery($query);

	        if (mysql_num_rows($result) == 0) {
	        	$password = crypt( $_POST['password'], CRYPT_MD5 );

		        $query = "INSERT INTO users(firstname, lastname, username, email, password) VALUES('{$firstName}', '{$lastName}', '{$userName}', '{$email}', '{$password}')";

		        $result = executeOuery($query);
		       
		        if (!$result)
					die("Could not execute this query");
				else {
					$_SESSION['username']= $userName;
					
					header('Location: login.php');
				}					

			} else {
				$message = 'This username is already occupied! Choose another.';
			}
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
					<li><a href="login.php">Log in</a></li>
					<li class="last"><a class="current" href="signup.php">Sign up</a></li>
				</ul>
			</div>			
			<div id="order_form">
				<?php if (isset($message)): ?>
					<?php	echo "<p id=\"error_message\">".$message."</p>";	?>
				<?php endif; ?>
	        	<h2>Sign Up</h2>
	        	<form action="signup.php" method="post" accept-charset="utf-8">
        			<label for="firstname">First Name<input id="firstname" type="text" name="firstname" required placeholder="Enter first name"></label>
        			<br><br>
        			<label for="lastname">Last Name<input id="lastname" type="text"  name="lastname" required placeholder="Enter last name"></label><br><br>
        			<label for="username">Username <input id="username" type="text" name="username" required placeholder="Enter username"></label><br><br>
        			<label for="email">Email <input id="email" type="text" name="email" required placeholder="Enter email"></label><br><br>
        			<label for="password">Password <input id="password" type="password" name="password" required></label><br><br>
        			<label for="confpassword">Confirm Password <input id="confpassword" type="password" name="confpassword" required><br><br>
        			<button type="submit">Submit</button><br><br>
        		</form>	
	        </div>	        
			<div id="footer">
				<p>Contact: 213-333-3333</p>
	    	</div>
    	</div>		
	</body>
</html>