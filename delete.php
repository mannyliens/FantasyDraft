<?php session_start(); ?>

<?php
include 'includes/header.php';
?>

<?php
	//Connects to dB
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	
	//Stores primary key of choosen record
	if(isset($_GET['playerid'])) {
		$playerid = $_GET['playerid'];
	}
	//Query to delete record
	$query1 = mysql_query("DELETE FROM player WHERE playerid='$playerid'");
	//if query is correct
	if($query1) {
		header("Location: administrator.php");
	} else {
		echo 'daggit';
	}
?>

</body>
</html>
