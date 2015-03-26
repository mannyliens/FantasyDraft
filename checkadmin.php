<?php session_start(); ?>

<?php
	//Setups up thhe database connection
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	//Stores html data into variables
	$adminemail = $_REQUEST['adminemail'];
	$adminpassword = $_REQUEST['adminpassword'];
	//Stores and runs the query
	$resourcebuilt = mysql_query("SELECT * FROM admin WHERE adminemail='$adminemail' AND adminpassword='$adminpassword'", $link);
	//Checks how many rows are returned
	if (mysql_num_rows($resourcebuilt) != 1) {
		 header("Location: regno.php");
	} else {
		while($row = mysql_fetch_array($resourcebuilt)) {
			$_SESSION['adminname'] = $row[firstname];
			$_SESSION['teamname'] = $row[teamname];
			header("Location: administrator.php");
		}
	}
?>