<?php session_start(); ?>

<?php
	//Setups up thhe database connection
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	//Stores html data into variables
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	//Stores and runs the query
	$resourcebuilt = mysql_query("SELECT * FROM user WHERE email='$email' AND password='$password'", $link);
	//Checks how many rows are returned
	if (mysql_num_rows($resourcebuilt) != 1) {
		 header("Location: regno.php");
	} else {
		while($row = mysql_fetch_array($resourcebuilt)) {
			$_SESSION['firstname'] = $row[firstname];
			$_SESSION['lastname'] = $row[lastname];
			$_SESSION['teamname'] = $row[teamname];
			header("Location: index.php");
		}
	}
?>
