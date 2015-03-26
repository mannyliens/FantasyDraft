<?php session_start(); ?>

<?php
include 'includes/header.php';
?>

<?php
	//Setups up the database connection
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	//Defaults stores emptyspace into the post variables - needed for the sticky form
	$playerid = $preranking = $playerlast = $playerfirst = $battingavg = $run = $homerun = $rbi = $sb = $win = $save = $strikeout = $era = $whip = "";
	//on submit store post variables
	if(isset($_POST['submit'])) {
		$playerid = mysql_real_escape_string($_POST['playerid']);
		$preranking = mysql_real_escape_string($_POST['preranking']);
		$playerlast = mysql_real_escape_string($_POST['playerlast']);
		$playerfirst = mysql_real_escape_string($_POST['playerfirst']);
		$position = $_POST['position'];
		$battingavg = mysql_real_escape_string($_POST['battingavg']);
		$run = mysql_real_escape_string($_POST['run']);
		$homerun = mysql_real_escape_string($_POST['homerun']);
		$rbi = mysql_real_escape_string($_POST['rbi']);
		$sb = mysql_real_escape_string($_POST['sb']);
		$win = mysql_real_escape_string($_POST['win']);
		$save = mysql_real_escape_string($_POST['save']);
		$strikeout = mysql_real_escape_string($_POST['strikeout']);
		$era = mysql_real_escape_string($_POST['era']);
		$whip = mysql_real_escape_string($_POST['whip']);
		//query to insert new record
		$query1 = mysql_query("INSERT into player values('$playerid','$preranking','$playerlast', '$playerfirst', '$position', '$battingavg', '$run', '$homerun', '$rbi', '$sb', '$win', '$save', '$strikeout', '$era', '$whip')");
		//if query is correct
		if($query1) {
			header("location:administrator.php");
		} else {
			echo "<p align=\"center\">Error: " .mysql_error(). "</p>";
		}
	}
?>
<div id="editcontainer">
<form action="" method="POST">
<table>
	<tr>
		<td>Player ID:&nbsp;</td>
		<td><input type="text" name="playerid" value="<?php echo $playerid;?>"></td>
		<td>*FM-XXX</td>
	</tr>
		<tr>
		<td>Preranking:&nbsp;</td>
		<td><input type="text" name="preranking" value="<?php echo $preranking;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Last Name:&nbsp;</td>
		<td><input type="text" name="playerlast" value="<?php echo $playerlast;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>First Name:&nbsp;</td>
		<td><input type="text" name="playerfirst" value="<?php echo $playerfirst;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Position:&nbsp;</td>
		<td><select name="position">
				<option value="P">Pitcher</option>
				<option value="C">Catcher</option>
				<option value="1B">1st Baseman</option>
				<option value="2B">2nd Baseman</option>
				<option value="3B">3rd Baseman</option>
				<option value="SS">Shortstop</option>
				<option value="OF">Outfielder</option>
			</select></td>
		<td></td>
	</tr>
		<tr>
		<td>Batting Avg:&nbsp;</td>
		<td><input type="text" name="battingavg" value="<?php echo $battingavg;?>"></td>
		<td>*.XXX</td>
	</tr>
		<tr>
		<td>Run:&nbsp;</td>
		<td><input type="text" name="run" value="<?php echo $run;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Homerun:&nbsp;</td>
		<td><input type="text" name="homerun" value="<?php echo $homerun;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Rbi:&nbsp;</td>
		<td><input type="text" name="rbi" value="<?php echo $rbi;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Sb:&nbsp;</td>
		<td><input type="text" name="sb" value="<?php echo $sb;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Win:&nbsp;</td>
		<td><input type="text" name="win" value="<?php echo $win;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Save:&nbsp;</td>
		<td><input type="text" name="save" value="<?php echo $save;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Strikeout:&nbsp;</td>
		<td><input type="text" name="strikeout" value="<?php echo $strikeout;?>"></td>
		<td></td>
	</tr>
		<tr>
		<td>Era:&nbsp;</td>
		<td><input type="text" name="era" value="<?php echo $era;?>"></td>
		<td>*XX.XX</td>
	</tr>
		<tr>
		<td>Whip:&nbsp;</td>
		<td><input type="text" name="whip" value="<?php echo $whip;?>"></td>
		<td>*XX.XX</td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" name="submit" value="submit"></td>
		<td></td>
	</tr>
</table>
</div>
</body>
</html>