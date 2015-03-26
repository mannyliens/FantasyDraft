 <?php
	session_start();
	include 'includes/header.php';
	
	/* Setups up the database connection */
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("fantasymock", $link);
	
	/* if statement that reset all neccessary components. */
	if(isset($_POST["resetAction"])) {
		/* reset variables back to 1 */
		$_SESSION['overall_pick'] = 1;
		$_SESSION['current_turn'] = 1;
		$_SESSION['max_pick'] = 2;


		/* drop player2 table and creates new player2 table with updated dB */
		$resetQuery1 = mysql_query("DROP TABLE player2");
		$resetQuery2 = mysql_query("CREATE table player2 as SELECT * FROM player");
		
		/* deletes all content inside the draft[x] tables */
		$resetQuery3 = mysql_query("DELETE FROM draft1");
		$resetQuery4 = mysql_query("DELETE FROM draft2");
		$resetQuery5 = mysql_query("DELETE FROM draft3");
		$resetQuery6 = mysql_query("DELETE FROM draft4");
		$resetQuery7 = mysql_query("DELETE FROM draft5");
		$resetQuery8 = mysql_query("DELETE FROM draft6");
		$resetQuery9 = mysql_query("DELETE FROM draft7");
		$resetQuery10 = mysql_query("DELETE FROM draft8");
		$resetQuery11 = mysql_query("DELETE FROM draft9");
		$resetQuery12 = mysql_query("DELETE FROM draft10");
		
		/* deletes all content inside the playersdrafted table */
		$resetQuery13 = mysql_query("DELETE FROM playersdrafted");
		
		/* Redirects user back to test.php */
		header("Location:test.php");
	} 
	
	/* if statement that simulates draft picks for the A.I. */
	if(isset($_POST["simulateAction"])) {
		/* alert msg to display if user clicks simulate on his turn */
		if($_SESSION['current_turn'] == $_SESSION['mypick']) {
			echo '<script type = "text/javascript">'
			   , 'alert("[ERROR] Cannot simulate! It\'s your turn to pick!");'
			   , '</script>';
		} else {
			/* query to select random entry from player2 table*/
			$simulateQuery1 = mysql_query("SELECT * FROM player2 WHERE preranking <= '" .$_SESSION['max_pick']. "' ORDER BY RAND() LIMIT 1");
			/* stores query into variable */
			$simulateQuery2 = mysql_fetch_array($simulateQuery1);
			
			/* increments the max_pick session */
			$_SESSION['max_pick'] = ($_SESSION['max_pick'] + 1.20);
			
			/* stores drafts choice into draft[x] corresponding to user's pick & deletes that player from draft pool */
			if($_SESSION['current_turn'] == 1) {
				$simulateQuery3 = mysql_query("INSERT into draft1 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			} 
			elseif($_SESSION['current_turn'] == 2) {
				$simulateQuery3 = mysql_query("INSERT into draft2 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");

			} 
			elseif($_SESSION['current_turn'] == 3) {
				$simulateQuery3 = mysql_query("INSERT into draft3 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			} 
			elseif($_SESSION['current_turn'] == 4) {
				$simulateQuery3 = mysql_query("INSERT into draft4 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			} 
			elseif($_SESSION['current_turn'] == 5) {
				$simulateQuery3 = mysql_query("INSERT into draft5 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			} 
			elseif($_SESSION['current_turn'] == 6) {
				$simulateQuery3 = mysql_query("INSERT into draft6 values('" .$simulateQuery1['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			} 
			elseif($_SESSION['current_turn'] == 7) {
				$simulateQuery3 = mysql_query("INSERT into draft7 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			}
			elseif($_SESSION['current_turn'] == 8) {
				$simulateQuery3 = mysql_query("INSERT into draft8 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			} 
			elseif($_SESSION['current_turn'] == 9) {
				$simulateQuery3 = mysql_query("INSERT into draft9 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] += 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
			} 
			elseif($_SESSION['current_turn'] == 10) {
				$simulateQuery3 = mysql_query("INSERT into draft10 values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$simulateQuery4 = mysql_query("INSERT into playersdrafted values('" .$simulateQuery2['playerid']. "', '" .$simulateQuery2['playerfirst']. "', '" .$simulateQuery2['playerlast']. "', '". $simulateQuery2['position']. "')");
				$_SESSION['overall_pick'] += 1;
				$_SESSION['current_turn'] = 1;
				$simulateQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$simulateQuery2['playerid']. "'");
				
				/*  end drafts and redirects user to draftresults.php */
				if($_SESSION['overall_pick'] == 21) {
					header("Location:draftresults.php");
				}
			}
		}
	}
	
	/* if statement that allows the user to draft a player */
	if(isset($_POST["draftAction"])) {
		/* validates that you draft on your turn*/
		if($_SESSION['current_turn'] != $_SESSION['mypick']) {
			echo '<script type = "text/javascript">'
			   , 'alert("[ERROR] Cannot draft! It\'s not your turn to pick!");'
			   , '</script>';
		}
		/* error msg to display if you input is empty */
		elseif(empty($_REQUEST['draftPlayerID'])) {
			echo '<script type = "text/javascript">'
			   , 'alert("[ERROR] You did not enter a Player\'s ID");'
			   , '</script>';
		} else {
			$user_Drafted_Player = $_POST['draftPlayerID'];
			
			/* query to determine if playerid still exist in the database */
			$draftQueryA = mysql_query("SELECT * FROM player WHERE playerid = '$user_Drafted_Player'");
			/* query to determine if player still exist in the draft. */
			$draftQueryB = mysql_query("SELECT * FROM player2 WHERE playerid = '$user_Drafted_Player'");

			if(mysql_num_rows($draftQueryA) != 1) {
				echo '<script type = "text/javascript">'
				   , 'alert("[ERROR] That player does not exist in the database!");'
				   , '</script>';
			}
			elseif(mysql_num_rows($draftQueryB) != 1) {
				echo '<script type = "text/javascript">'
				   , 'alert("[ERROR] That player has already been picked!");'
				   , '</script>';				
			} else {
				$draftQuery1 = mysql_query("SELECT * from player2 WHERE playerid = '$user_Drafted_Player'");
				$draftQuery2 = mysql_fetch_array($draftQuery1);
				
				/* increments the max_pick session */
				$_SESSION['max_pick'] = ($_SESSION['max_pick'] + 1.20);
				
				/* user's draft pick stored */
				if($_SESSION['mypick'] == 1) {
					$draftQuery3 = mysql_query("INSERT into draft1 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				} 
				elseif($_SESSION['mypick'] == 2) {
					$draftQuery3 = mysql_query("INSERT into draft2 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				}
				elseif($_SESSION['mypick'] == 3) {
					$draftQuery3 = mysql_query("INSERT into draft3 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				}
				elseif($_SESSION['mypick'] == 4) {
					$draftQuery3 = mysql_query("INSERT into draft4 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				}
				elseif($_SESSION['mypick'] == 5) {
					$draftQuery3 = mysql_query("INSERT into draft5 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				}
				elseif($_SESSION['mypick'] == 6) {
					$draftQuery3 = mysql_query("INSERT into draft6 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				}
				elseif($_SESSION['mypick'] == 7) {
					$draftQuery3 = mysql_query("INSERT into draft7 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				}
				elseif($_SESSION['mypick'] == 8) {
					$draftQuery3 = mysql_query("INSERT into draft8 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				} 
				elseif($_SESSION['mypick'] == 9) {
					$draftQuery3 = mysql_query("INSERT into draft9 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] += 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");
				}
				elseif($_SESSION['mypick'] == 10) {
					$draftQuery3 = mysql_query("INSERT into draft10 values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$draftQuery4 = mysql_query("INSERT into playersdrafted values('" .$draftQuery2['playerid']. "', '" .$draftQuery2['playerfirst']. "', '" .$draftQuery2['playerlast']. "', '". $draftQuery2['position']. "')");
					$_SESSION['overall_pick'] += 1;
					$_SESSION['current_turn'] = 1;
					$draftQuery5 = mysql_query("DELETE FROM player2 WHERE playerid = '" .$draftQuery2['playerid']. "'");

					/*  end drafts and redirects user to draftresults.php */
					if($_SESSION['overall_pick'] == 21) {
						header("Location:draftresults.php");
					}
				} 
			}
		}
	}

	/* if draftposition was set from mockhome.php begin implementation*/
	if(isset($_POST["mockBtn"])) {
		$_SESSION['mypick'] = $_POST['draftposition'];
		$_SESSION['overall_pick'] = 1;
		$_SESSION['current_turn'] = 1;
		$_SESSION['max_pick'] = 2;
		
		/* RESET DRAFT
			drop player2 table and creates new player2 table with updated dB */
		$resetQuery1 = mysql_query("DROP TABLE player2");
		$resetQuery2 = mysql_query("CREATE table player2 as SELECT * FROM player");
		
		/* deletes all content inside the draft[x] tables */
		$resetQuery3 = mysql_query("DELETE FROM draft1");
		$resetQuery4 = mysql_query("DELETE FROM draft2");
		$resetQuery5 = mysql_query("DELETE FROM draft3");
		$resetQuery6 = mysql_query("DELETE FROM draft4");
		$resetQuery7 = mysql_query("DELETE FROM draft5");
		$resetQuery8 = mysql_query("DELETE FROM draft6");
		$resetQuery9 = mysql_query("DELETE FROM draft7");
		$resetQuery10 = mysql_query("DELETE FROM draft8");
		$resetQuery11 = mysql_query("DELETE FROM draft9");
		$resetQuery12 = mysql_query("DELETE FROM draft10");
		
		/* deletes all content inside the playersdrafted table */
		$resetQuery13 = mysql_query("DELETE FROM playersdrafted");
	} else {
		/* Do nothing because script will refresh often and this helps avoid 
			undentified index error from the if statement above */
	}
	
	/* Number of teams in draft. */
	$_SESSION['num_of_team'] = 10;
	
	/* Algorithm to display round setting*/
	$_SESSION['round_num'] = (int)((($_SESSION['overall_pick'] - 1) / $_SESSION['num_of_team']) + 1);
	$_SESSION['pick_num_of_rd'] = (($_SESSION['overall_pick'] - 1) % $_SESSION['num_of_team']) + 1;
	
	/* displays draft statistics*/
	echo "<table align=\"center\" cellpadding=\"4\" cellspacing=\"0\" width=\"300\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:1.5em;\"><tr>";
	echo "<td>Round: " .$_SESSION['round_num']. "; Round Pick: " .$_SESSION['pick_num_of_rd']. "</td></tr>";
	echo "<tr><td>Overall Pick: ".$_SESSION['overall_pick']. "/20</td></tr></table><br>";

	/* displays draft order*/
	echo "<table align=\"center\" cellpadding=\"4\" cellspacing=\"0\" border=\"1\" bordercolor=\"black\" bgcolor=\"white\" style=\"font-size:1em;\"><tr>";

	if($_SESSION['mypick'] == 1) {
		echo "<th>1. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>1. A.I. #1</td>";
	}
	if($_SESSION['mypick'] == 2) {
		echo "<th>2. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>2. A.I. #2</td>";
	}
	if($_SESSION['mypick'] == 3) {
		echo "<th>3. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>3. A.I. #3</td>";
	}
	if($_SESSION['mypick'] == 4) {
		echo "<th>4. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>4. A.I. #4</td>";
	}
	if($_SESSION['mypick'] == 5) {
		echo "<th>5. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>5. A.I. #5</td>";
	}
	if($_SESSION['mypick'] == 6) {
		echo "<th>6. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>6. A.I. #7</td>";
	}
	if($_SESSION['mypick'] == 7) {
		echo "<th>7. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>7. A.I. #7</td>";
	}
	if($_SESSION['mypick'] == 8) {
		echo "<th>8. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>8. A.I. #8</td>";
	}
	if($_SESSION['mypick'] == 9) {
		echo "<th>9. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>9. A.I. #9</td>";
	}
	if($_SESSION['mypick'] == 10) {
		echo "<th>10. ".$_SESSION['teamname']."</th>";
	} else {
		echo "<td>10. A.I. #10</td>";
	}
	echo "</tr></table><br>";
	?>

	<div id="draftbox">
		<form name="fm_form" method="post" action="">
			<p align="center">
				Player ID: <input type="text" name="draftPlayerID" placeholder="Enter player's id">
			</p><br/>
			<p align="center">
				<!--Resets the draft - clears any populated tables and resets all variables-->
				<input class="bigButton" type="submit" name="resetAction" value="Reset">
				<!--Emulates the AI draft pick-->
				<input class="bigButton" type="submit" name="simulateAction" value="Simulate">
				<!--Upon id typed inside input box; selects the corresponding player-->
				<input class="bigButton" type="submit" name="draftAction" value="Draft">
			</p>
		</form>
	</div><br/>
	
	<!--div that holds together the last 10 players draft box and my drafted team box -->
	<div id="wrapper">
	<div id="draftbox2">	
	<?php
		/* displays the last 10 players picked in the draft. */
		$fmQuery1 = mysql_query("SELECT * from playersdrafted ORDER BY playerid DESC LIMIT 10");
		
		echo "<p align=\"center\">Last 10 Players Drafted</p><br/>";

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
			while($fmQuery2 = mysql_fetch_array($fmQuery1)) {
				echo "<tr><td align=\"center\">". $fmQuery2['playerfirst']. " " .$fmQuery2['playerlast']. " was drafted!</td></tr>";
			 }
				echo "</table>";
	?> 
	</div>
	<div id="vertLine"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
	<div id = "draftbox3">
		<p align="center"><?php echo $_SESSION['teamname'];?>'s Team</p><br/>
			
<?php
	/* displays your drafted team */
	if($_SESSION['mypick'] == 1) {
		$fmQuery3 = mysql_query("SELECT * from draft1 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 2) {
		$fmQuery3 = mysql_query("SELECT * from draft2 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 3) {
		$fmQuery3 = mysql_query("SELECT * from draft3 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 4) {
		$fmQuery3 = mysql_query("SELECT * from draft4 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 5) {
		$fmQuery3 = mysql_query("SELECT * from draft5 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 6) {
		$fmQuery3 = mysql_query("SELECT * from draft6 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 7) {
		$fmQuery3 = mysql_query("SELECT * from draft7 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 8) {
		$fmQuery3 = mysql_query("SELECT * from draft8 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 9) {
		$fmQuery3 = mysql_query("SELECT * from draft9 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	elseif($_SESSION['mypick'] == 10) {
		$fmQuery3 = mysql_query("SELECT * from draft10 ORDER BY playerid");

		echo "<table align=\"center\" style=\"font-size:.80em;\";>";
		
		while($fmQuery4 = mysql_fetch_array($fmQuery3)) {
			echo "<tr><td align=\"center\">" .$fmQuery4['playerid']. ". " .$fmQuery4['playerfirst']. " " .$fmQuery4['playerlast']. " (" .$fmQuery4['position']. ")</td></tr>";		
		}
			echo "</table>";
	}
	echo "</div></div>";
?>

</body>
</html>
