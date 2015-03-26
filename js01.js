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
	re = /^\w+$/;
		if (!re.test(regForm.username.value)) {
			alert("Your Username must contain only letters, numbers, and underscores!");
			document.regForm.username.focus();
			return false;
		}
		if (aa.length < 7) {
			alert("Your Username is too short! (8 character min)");
			document.regForm.username.focus();
			return false;
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

