<?php session_start(); ?>

<?php
include 'includes/header.php';
?>

<script>
function validateRegForm()
{	
	//Validates email address
	var a = document.forms["regForm"]["email"].value;
	if (a == null || a == "") {
		alert("You forgot to enter your Email!");
		return false;
	} else {
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (a.match(mailformat)) {
			document.regForm.email.focus();
        } else {
			alert("You have entered an invalid Email Address!");
			document.regForm.email.focus();
			return false;
        }
    }
	//Validates password & confirm password
	if (regForm.password.value != "" && regForm.password.value == regForm.cpassword.value) {
		if (regForm.password.value.length < 7) {
			alert("Your Password must contain at least 8 characters!");
			document.regForm.email.focus();
			return false;
		}
    re = /[0-9]/;
    if(!re.test(regForm.password.value)) {
		alert("Your Password must contain at least one number (0-9)!");
		document.regForm.password.focus();
		return false;
      }
    re = /[a-z]/;
    if(!re.test(regForm.password.value)) {
		alert("Your Password must contain at least one lowercase letter (a-z)!");
		document.regForm.password.focus();
		return false;
    }
    re = /[A-Z]/;
    if(!re.test(regForm.password.value)) {
		alert("Your Password must contain at least one uppercase letter (A-Z)!");
		document.regForm.password.focus();
		return false; }
    } else {
		alert("Please check that you've entered or confirmed your password!");
		document.regForm.password.focus();
		return false;
    }
	//Validates first name
	var b = document.forms["regForm"]["firstname"].value;
		if (b == null || b == "") {
			alert('You forgot to enter your First Name!');
			return false;
		}
	//Validates last name
	var c = document.forms["regForm"]["lastname"].value;
		if (c == null || c == "") {
			alert('You forgot to enter your Last Name!');
			return false;
		}
	//Validates team name
	var d = document.forms["regForm"]["teamname"].value;
		if (d == null || d == "") {
			alert('You forgot to enter your Team Name!');
			document.regForm.teamname.focus();
			return false;
	}
	re = /^\w+$/;
		if (!re.test(regForm.teamname.value)) {
			alert("Team Name must contain only letters, numbers, and underscores!");
			document.regForm.teamname.focus();
			return false;
		}
		if (d.length < 7) {
			alert("Your Team Name is too short! (8 character min)");
			document.regForm.teamname.focus();
			return false;
		}
	return true;
}
</script>

<form name="regForm" action="confirmreg.php" onsubmit="return validateRegForm()" method="post">

<table align="center" border="1" bordercolor="black" bgcolor="white" cellpadding="5" cellspacing="0" width="50%">
	<tr>
		<td>
			<table align="center" bordercolor="white" border="0" cellpadding="5" cellspacing="0">
				<tr>
					<td align="center" colspan="2"><strong>Registration</strong></b></td>
				</tr>
				<tr>
					<td colspan="2"><br></td>
				</tr>
				<tr>
					<td align="right" width="20%">E-mail:</td>
					<td align="left" width="30%"><input class="largeTextBox" type="text" name="email" maxlength="50" size="30" placeholder="&nbsp;email"></td>
				</tr>
				<tr>
					<td align="right" width="20%">Password:</td>
					<td align="left" width="30%"><input class="largeTextBox" type="password" name="password" maxlength="50" size="30" placeholder="&nbsp;password"></td>
				</tr>
				<tr>
					<td align="right" width="20%">Confirm Password:</td>
					<td align="left" width="30%"><input class="largeTextBox" type="password" name="cpassword" maxlength="50" size="30" placeholder="&nbsp;confirm password"></td>
				</tr>
				<tr>
					<td align="right" width="20%">First Name:</td>
					<td align="left" width="30%"><input class="largeTextBox" type="text" name="firstname" maxlength="50" size="30" placeholder="&nbsp;first name"></td>
				</tr>
				<tr>
					<td align="right" width="20%">Last Name:</td>
					<td align="left"><input class="largeTextBox" type="text" name="lastname" maxlength="50" size="30" placeholder="&nbsp;last name"></td>
				</tr>
				<tr>
					<td align="right" width="20%">Team Name:</td>
					<td align="left" width="30%"><input class="largeTextBox" type="text" name="teamname" maxlength="50" size="30" placeholder="&nbsp;team name"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input class="bigButton" type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</form>

</body>

</html>