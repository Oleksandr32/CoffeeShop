<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Support</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/products.js"></script>
	</head>
	<body id="body">
		<div id="header">
				<a><img id="mainlogo" src="img/mainlogo.png" alt="Fourth Coffee Logo"/></a>
				<h1 id="title">Fourth Coffee</h1>
				<p id="tagline">Bringing the world to your cup</p>
				<ul id="navlinks">
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a class="current" href="support.php">Support</a></li>
					<li><a href="order.php">Order List</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="login.php">Log in</a></li>
					<li class="last"><a href="signup.php">Sign up</a></li>
				</ul>
			</div>
			<br>
			<div id="main">
				<h2>Now you are in support page!</h2>							
			</div>	
			<br><br><br><br>			
			<div id="order_form">
				<h3>Please leave your message or comment here</h3>	
	        	<form action="support_func.php" method="post" accept-charset="utf-8">
	        		<?php if (isset($_SESSION['username'])): ?>
	        		<label for="name">Username <input id="name" type="text" name="userName" required autofocus placeholder="Enter username" value="<?= htmlspecialchars($_SESSION['username'])  ?>"></label>
					<?php else: ?>
						<label for="name">Username <input id="name" type="text" name="userName" required autofocus placeholder="Enter username"></label>
					<?php endif; ?>
        			<br><br>
        			User message  <textarea id="message" name="message" required  placeholder="Enter your message or comment"></textarea>
        			<button type="submit">Submit</button>
        		</form>	
	        </div>
	        <br><br>
	        <div id="comments">
	        	<h3>Your message</h3>
	        	<?php
	        		if (filesize("support.txt") == 0)
						echo "<p>You do not have any messages</p>";
					else {
						$file = fopen("support.txt", "r");
						$comments;
						while (!feof($file)) {
							$line = fgets($file);
								if ($line == "")
									break;
							$comments = $line;
							$comments = explode("|||||", $comments);
							echo "<div class=\"comment\"><p id=\"user_name\">".$comments[0]."</p><textarea readonly>".$comments[1]."</textarea><p id=\"date\">".$comments[2]."</p></div><hr>";	
						}
						fclose($file);
					}
	        	?>	
	        </div>
			<div id="footer">
				<p>Contact: 213-333-3333</p>
	    	</div>
		</div>		
	</body>
</html>