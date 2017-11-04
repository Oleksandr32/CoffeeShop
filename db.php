<?php
	
	 function executeOuery($query) {
	 	// your database's name and name of table
		$database = 'coffeeshop';
		$tableName = 'users';
		// your database's password
		$password = '';
		// your database's server
		$host = 'localhost';
		// your database's username
		$user = 'root';		

		$connect = mysql_connect($host, $user, $password);

		if (!$connect) {
			die("Could not connect to the mySQL database");
		}
		
		mysql_select_db($database);	
		
		$result = mysql_query($query);	
		
		mysql_close($connect);

		return $result;
	}

?>