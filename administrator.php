<?php session_start(); ?>

<?php
include 'includes/header.php';
?>

<?php
	//Setups up thhe database connection
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	
	//Displays database records from the player table
	$query1 = mysql_query("SELECT * from player ORDER BY playerid");
?>
<form action="add.php" method="post">
<div align="center"><input class="bigButton"type="submit" name="addbtn" value="Add Player"></div>
</form>

<?php
	echo "<br>";
	echo "<table align=\"center\" cellpadding=\"5\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:.80em;\";><tr><th>Player ID</th><th>Preranking</th><th>Last Name</th><th>First Name</th><th>Position</th><th>Batting Avg</th><th>Run</th><th>Homeruns</th><th>Rbi</th><th>Stolen Base</th><th>Win</th><th>Save</th><th>Strikeouts</th><th>Era</th><th>Whip</th>";
	echo "<tr><td colspan=\"17\"><hr/></td></tr>";
		while($query2 = mysql_fetch_array($query1)) {
			echo "<tr><td>" .$query2['playerid']. "</td>";
			echo "<td align=\"center\">" .$query2['preranking']. "</td>";
			echo "<td align=\"center\">" .$query2['playerlast']. "</td>";
			echo "<td align=\"center\">" .$query2['playerfirst']. "</td>";
			echo "<td align=\"center\">" .$query2['position']. "</td>";
			echo "<td align=\"center\">" .$query2['battingavg']. "</td>";
			echo "<td align=\"center\">" .$query2['run']. "</td>";
			echo "<td align=\"center\">" .$query2['homerun']. "</td>";
			echo "<td align=\"center\">" .$query2['rbi']. "</td>";
			echo "<td align=\"center\">" .$query2['sb']. "</td>";
			echo "<td align=\"center\">" .$query2['win']. "</td>";
			echo "<td align=\"center\">" .$query2['save']. "</td>";
			echo "<td align=\"center\">" .$query2['strikeout']. "</td>";
			echo "<td align=\"center\">" .$query2['era']. "</td>";
			echo "<td align=\"center\">" .$query2['whip']. "</td>";
			echo "<td><a href='edit.php?playerid=".$query2['playerid']."'>Edit</a></td>";
			echo "<td><a href='delete.php?playerid=".$query2['playerid']."'>x</a></td><tr>";
		}
	?>
	</table>
</body>

</html>