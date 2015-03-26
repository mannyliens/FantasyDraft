<?php session_start(); ?>

<?php
include 'includes/header.php';
?>

<script>
//Validates Login
function validateLoginForm() {
	var someEmail = document.forms["loginForm"]["email"].value;
	if (someEmail == null || someEmail == "") {
		alert('You forgot to enter your Login!');
		document.loginForm.email.focus();
		return false;
	}
	var somepw = document.forms["loginForm"]["password"].value;
	if (somepw == null || somepw == "") {
		alert('You forgot to enter your Password!');
		document.loginForm.password.focus();
		return false;
	}
	return true;
	
</script>

<form action="checklogin.php" method="post" name="loginForm" onSubmit="return validateLoginForm();">

<div id="container">
	<div id="inner">Welcome To www.FantasyMock.com<br><br>FantasyMock is a free web-base application that allows users to 
					participate in live baseball mock drafts.  Our website allows participates to get ahead of the game by practicing for
					their fantasy's draft.<br><br>In order to use our services, you must Login. Not a member? <a href="register.php">Register</a>.
	</div>
		
	<div id="inner2">
		<table cellpadding="0">
			<tr>
				<td colspan="2" align="center"><strong>Login</strong></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" class="largeTextBox" name="email" size="25" maxlength="50"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" class="largeTextBox" name="password" size="25" maxlength="50"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="bigButton" type="submit" value="Log In"></td>
			</tr>
		</table>
	</div>
</div>
</form>

</body>

</html>