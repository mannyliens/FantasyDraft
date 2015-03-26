<?php session_start(); ?>

<?php
include 'includes/header.php';
?>

<?php
	//Setups up the database connection
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	
	if(isset($_GET['playerid'])) {
		$playerid = $_GET['playerid'];
		//Query to display results in input box
		$query1 = mysql_query("SELECT * from player WHERE playerid = '$playerid'");
		$query2 = mysql_fetch_array($query1);
	}
	
	if(isset($_POST['submit'])) {
		//Stores html inputs into variables
		$preranking = $_POST['preranking'];
		$playerlast = $_POST['playerlast'];
		$playerfirst = $_POST['playerfirst'];
		$position = $_POST['position'];
		$battingavg = $_POST['battingavg'];
		$run = $_POST['run'];
		$homerun = $_POST['homerun'];
		$rbi = $_POST['rbi'];
		$sb = $_POST['sb'];
		$win = $_POST['win'];
		$save = $_POST['save'];
		$strikeout = $_POST['strikeout'];
		$era = $_POST['era'];
		$whip = $_POST['whip'];
		//Query to update dB
		$query3 = mysql_query("UPDATE player SET preranking='$preranking', playerlast='$playerlast', playerfirst='$playerfirst', position='$position', battingavg='$battingavg', run='$run', homerun='$homerun', rbi='$rbi', sb='$sb', win='$win', save='$save', strikeout='$strikeout', era='$era', whip='$whip' WHERE playerid='$playerid'");
			//if update query is correct
			if($query3) {
				//Redirect user back to admin page after update
				header("Location: administrator.php");
				echo "test";
			} else {
				echo "Something went wrong!";
			}
		}
?>
<div id="editcontainer">
	<div id="edit1">
		<form action="" method="POST">
			<table>
				<tr>
					<td>Player ID:&nbsp;</td>
					<td><input type="text" name="playerid" disabled="disabled" value="<?php echo $query2['playerid'];?>"/></td>
				</tr>
					<tr>
					<td>Preranking:&nbsp;</td>
					<td><input type="text" name="preranking" value="<?php echo $query2['preranking'];?>"/></td>
				</tr>
					<tr>
					<td>Last Name:&nbsp;</td>
					<td><input type="text" name="playerlast" value="<?php echo $query2['playerlast'];?>"/></td>
				</tr>
					<tr>
					<td>First Name:&nbsp;</td>
					<td><input type="text" name="playerfirst" value="<?php echo $query2['playerfirst'];?>"/></td>
				</tr>
					<tr>
					<td>Position:&nbsp;</td>
					<td><input type="text" name="position" value="<?php echo $query2['position'];?>"/></td>
				</tr>
					<tr>
					<td>Batting Avg:&nbsp;</td>
					<td><input type="text" name="battingavg" value="<?php echo $query2['battingavg'];?>"/></td>
				</tr>
					<tr>
					<td>Run:&nbsp;</td>
					<td><input type="text" name="run" value="<?php echo $query2['run'];?>"/></td>
				</tr>
					<tr>
					<td>Homerun:&nbsp;</td>
					<td><input type="text" name="homerun" value="<?php echo $query2['homerun'];?>"/></td>
				</tr>
					<tr>
					<td>Rbi:&nbsp;</td>
					<td><input type="text" name="rbi" value="<?php echo $query2['rbi'];?>"/></td>
				</tr>
					<tr>
					<td>Sb:&nbsp;</td>
					<td><input type="text" name="sb" value="<?php echo $query2['sb'];?>"/></td>
				</tr>
					<tr>
					<td>Win:&nbsp;</td>
					<td><input type="text" name="win" value="<?php echo $query2['win'];?>"/></td>
				</tr>
					<tr>
					<td>Save:&nbsp;</td>
					<td><input type="text" name="save" value="<?php echo $query2['save'];?>"/></td>
				</tr>
					<tr>
					<td>Strikeout:&nbsp;</td>
					<td><input type="text" name="strikeout" value="<?php echo $query2['strikeout'];?>"/></td>
				</tr>
					<tr>
					<td>Era:&nbsp;</td>
					<td><input type="text" name="era" value="<?php echo $query2['era'];?>"/></td>
				</tr>
					<tr>
					<td>Whip:&nbsp;</td>
					<td><input type="text" name="whip" value="<?php echo $query2['whip'];?>"/></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div>
	<div>
	<?php
		echo '<img src = "images/players/'.$playerid.'.png"/>';
	?>
	</div>
</div>

</body>

</html>