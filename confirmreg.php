<?php session_start(); ?>

<?php	
	$dbc = @mysqli_connect ('localhost', 'root', '', 'fantasymock') OR die ('Could not connect to Database');
	
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	//Removes any nonletter characters from the variable
	$e = mysqli_real_escape_string($dbc, trim($email));
	$p = mysqli_real_escape_string($dbc, trim($password));
	//Store the entered email
	$q = "SELECT * FROM user WHERE email='$e'";
	//Runs the query
	$r = @mysqli_query($dbc, $q);
	//Checks how many rows are returned
	if (mysqli_num_rows($r) == 1) {
		 header("Location: regtaken.php");
	} else {	
		mysql_connect("localhost", "root", "");
		@mysql_select_db("fantasymock") or die("Unable To Connect To the Database");
		
		//Variable used for the primary key in User Table in Database.
		$userid = $_POST['userid'];
		//Request HTML variables 
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		$teamname = $_REQUEST['teamname'];
		//Storing form values into Session
		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['teamname'] = $teamname;
	
		$query = "INSERT INTO user VALUES ('$userid', '$email', '$password', '$cpassword', '$firstname', '$lastname', '$teamname')";
		mysql_query($query);
		
		mysql_close();
		header("Location: thankyou.php");
		die();
	}
	?>