<?php session_start();
		session_destroy(); ?>

<?php
include 'includes/header.php';
?>

<table align="center" border="1" bordercolor="black" bgcolor="white" cellpadding="100" cellspacing="0" width="50%">
	<tr>
		<td align="center">You have been logged out. Please click <a href="index.php">here</a> to redirected to the Home Page.</td>
	</tr>
</table>

<?php

include 'includes/footer.php';

?>