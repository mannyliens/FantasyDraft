<?php session_start(); ?>

<?php
include 'includes/header.php';
?>

<script>
//Validates Login
function validateAdminForm() {
	var adminemail = document.forms["adminForm"]["adminemail"].value;
	if (adminemail == null || adminemail == "") {
		alert('You forgot to enter your Login!');
		document.adminForm.adminemail.focus();
		return false;
	}
	var adminpassworrd = document.forms["adminForm"]["adminpassword"].value;
	if (adminpassword == null || adminpassword == "") {
		alert('You forgot to enter your Password!');
		document.adminForm.adminpassword.focus();
		return false;
	}
	return true;
	
</script>

<form action="checkadmin.php" method="post" name="adminForm" onSubmit="return validateAdminForm();">

<table align="center" border="1" bordercolor="black" bgcolor="white" cellpadding="5" cellspacing="0" width="50%">
	<tr>
		<td>
			<table align="center" border="0" bordercolor="white" bgcolor="white" cellpadding="5" cellspacing="0" width="40%">
				<tr>
					<td colspan="2" align="center"><strong>Admin Login</strong></td>
				</tr>
				<tr>
					<td align colspan="2"><br></td>
				</tr>
				<tr>
					<td align="right">Admin: </td>
					<td align="left"><input type="text" class="largeTextBox" name="adminemail" size="30" maxlength="50"></td>
				</tr>
				<tr>
					<td align="right">Password: </td>
					<td align="left"><input type="password" class="largeTextBox" name="adminpassword" size="30" maxlength="50"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Login"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</form>

</body>

</html>