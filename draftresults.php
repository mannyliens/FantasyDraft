<?php
	session_start();
	include 'includes/header.php';
	
	/* Setups up the database connection */
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	
	/* initializes session variables */
	$_SESSION['Team1'] = $_SESSION['Team2'] = $_SESSION['Team3'] = $_SESSION['Team4'] = $_SESSION['Team5'] = "";
	$_SESSION['Team6'] = $_SESSION['Team7'] = $_SESSION['Team8'] = $_SESSION['Team9'] = $_SESSION['Team10'] = "";
	
	/* stores session variables with user's teamname & dummy strings */
	if($_SESSION['mypick'] == 1) {
		$_SESSION['Team1'] = $_SESSION['teamname'];
		$_SESSION['Team2'] = "AI BOT #2";
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 2) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = $_SESSION['teamname'];
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 3) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = $_SESSION['teamname'];
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 4) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = $_SESSION['teamname'];
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 5) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = $_SESSION['teamname'];
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 6) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = $_SESSION['teamname'];
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 7) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = $_SESSION['teamname'];
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 8) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = $_SESSION['teamname'];
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 9) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = $_SESSION['teamname'];
		$_SESSION['Team10'] = "AI BOT #10";
	}
	elseif($_SESSION['mypick'] == 10) {
		$_SESSION['Team1'] = "AI BOT #1";	
		$_SESSION['Team2'] = "AI BOT #2";	
		$_SESSION['Team3'] = "AI BOT #3";
		$_SESSION['Team4'] = "AI BOT #4";
		$_SESSION['Team5'] = "AI BOT #5";
		$_SESSION['Team6'] = "AI BOT #6";
		$_SESSION['Team7'] = "AI BOT #7";
		$_SESSION['Team8'] = "AI BOT #8";
		$_SESSION['Team9'] = "AI BOT #9";
		$_SESSION['Team10'] = $_SESSION['teamname'];
	}
?>

	<div id="somebox">Congratulation! You have completed the 'Fantasy Mock' draft. Here are the results:</div><br/>

<?php
	/* queries to display the results from draft 1 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft1 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team1']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
				 }
	echo "</table><br/>";
	
	/* queries to display the results from draft 2 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft2 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team2']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
?>

<?php	
	/* queries to display the results from draft 3 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft3 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team3']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
	
	/* queries to display the results from draft 4 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft4 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team4']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
?>

<?php
	/* queries to display the results from draft 5 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft5 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team5']. "</td></tr>";
		
	while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
		echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
		echo "</table><br/>";
	
	/* queries to display the results from draft 6 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft6 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team6']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
?>

<?php
	/* queries to display the results from draft 7 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft7 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team7']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
	
	/* queries to display the results from draft 8 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft8 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team8']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
?>

<?php
	/* queries to display the results from draft 9 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft9 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team9']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
	
	/* queries to display the results from draft 10 table */
	$resultsQuery1 = mysql_query("SELECT * FROM draft10 ORDER BY playerid");

	echo "<table align=\"center\" cellpadding=\"5\" width=\"225\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";>";
	echo "<tr><td align=\"center\">" .$_SESSION['Team10']. "</td></tr>";
		while($resultsQuery2 = mysql_fetch_array($resultsQuery1)) {
			echo "<tr><td>" .$resultsQuery2['playerid']. ". ". $resultsQuery2['playerfirst']. " " .$resultsQuery2['playerlast']. " (" .$resultsQuery2['position']. ")</td></tr>";
			 }
	echo "</table><br/>";
?>
	</div>
</body>

</html>