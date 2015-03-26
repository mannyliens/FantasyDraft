<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>        
	<link rel="stylesheet" type="text/css" href="includes/spec.css"/>
</head>

<title>FantasyMock.com</title>

<body>

<div id="navi-top">
	<div id="nav1">
		<?php 
			if (!empty($_SESSION['firstname']) && (!empty($_SESSION['lastname']))) {
				echo "&nbsp;Welcome " . $_SESSION['firstname'] . " " .$_SESSION['lastname'];
			} elseif (!empty($_SESSION['adminname'])) {
				echo "Welcome Admin ".$_SESSION['adminname']; ;
			} else {
				echo "&nbsp;Welcome Guest"; } 
		?>
	</div>
	
	<div id="nav2">
		<a href="index.php">Home</a> | <a href="mockhome.php">Fantasy Mock</a>
		<?php
			if (!empty($_SESSION['adminname'])) {
				echo ' | <a href="Administrator.php">Database</a>';
			} else {
			}
		?>
	</div>
	<div id="nav3">
		<a href="admin.php">Admin</a> | <a href="register.php">Register</a> | <?php
			if ((!empty($_SESSION['firstname']) && (!empty($_SESSION['lastname']))) || (!empty($_SESSION['adminname']))) {
					echo '<a href="Loggedout.php">Sign Out</a>&nbsp;';
				} else {
					echo '<a href="index.php">Login</a>&nbsp;';
				}
		?>
	</div>
</div>

<br><br>
	