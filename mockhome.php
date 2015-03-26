<?php session_start(); ?>

<?php
include 'includes/header.php';
?>
<div align="center"><img src="images/mhlogo.jpg"/></td></div>

<br/>

<?php 
	if(!empty($_SESSION['firstname'])) {
?>
<form name="mockhome" action="test.php" method="post">
<div id ="outtercontainer">
<div id="innercontainer">
	<div id ="draftspot">
		<table border="0" bordercolor="white" bgcolor="white" cellspacing="0" cellpadding="0">
			<tr>
				<td width="30"><input type="radio" name="draftposition" value="1"></td>
				<td width="50">[01]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="2"></td>
				<td width="25">[02]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="3"></td>
				<td width="25">[03]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="4"></td>
				<td width="25">[04]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="5"></td>
				<td width="25">[05]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="6"></td>
				<td width="25">[06]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="7"></td>
				<td width="25">[07]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="8"></td>
				<td width="25">[08]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="9"></td>
				<td width="25">[09]</td>
				<td>Draft Position</td>
			</tr>
			<tr>
				<td><input type="radio" name="draftposition" value="10"></td>
				<td width="25">[10]</td>
				<td>Draft Position</td>
			</tr>
		</table>
	</div>
</div>
<div id="mockmsg">
	You are one step closer to your Draft. In order to continue, please <strong>select</strong> a drafting position.
	<br><br>
	This is the position from where you will draft from. All other position, will be filled with an AI player.
	Once selected hit the <strong>Submit</strong> button below to
	be redirected to the drafting interface.
	<br><br><br><br>
	<div align="center"><input class="bigButton" type="submit" name="mockBtn" value="Submit"></div>
</div>
</div>
</form>
<?php 
	} else {
	echo "<br/><br/><table align=\"center\" cellpadding=\"20\" border=\"1\" cellspacing=\"0\" bordercolor=\"black\" bgcolor=\"white\"><tr><th>You need to be logged in as a user to view this page!</th></tr></table>";
	}
?>
</body>

</html>
