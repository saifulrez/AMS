<!Doctype html>
<html lang=en>
<head>
<title>Login Page</title>
<meta charset=utf-8>
<link rel="stylesheet" href="css/login_page.css">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
</head>
<body>
<div id="container">
<header>
<?php //include('includes/header_login.inc'); ?>
<div id="logo">
	<!--<img alt="dove" height="170" src="images/dove-1.png" width="234">-->
</div>
</header><div id="content"><!--Start of the login page content-->
<div class="header-img">
<img src="images/logo_big.png" alt="AMS" >
	<nav>
	<?php //include('includes/menu.inc'); ?>
	
	</nav>
</div>
<?php 
// Determine whether the form been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//connect to database
	require ('db_config.php');
// Was the email address entered?
	if (!empty($_POST['u_mail'])) {
			$e = mysqli_real_escape_string($link, $_POST['u_mail']);
	} else {
	$e = FALSE;
		//echo '<p class="error">You forgot to enter your Mail address.</p>';
		echo "<script type='text/javascript'>alert('You forgot to enter your Mail address.');</script>";
	}
// Was the password entered?
	if (!empty($_POST['u_pass'])) {
			$p = mysqli_real_escape_string($link, $_POST['u_pass']);
	} else {
	$p = FALSE;
		//echo '<p class="error">You forgot to enter your password.</p>';
		echo "<script type='text/javascript'>alert('You forgot to enter your password.');</script>";
	}
	if ($e && $p){//if no problem was encountered
// Select the user_id, first_name and privilege for that email/password combination
		$q = "SELECT u_mail,privilege FROM user_info WHERE (u_mail='$e' AND u_pass='$p')";		
		$result = mysqli_query ($link, $q); 
		// Check the result
		if (@mysqli_num_rows($result) == 1) {//The user input matched the database record
		// Start the session, fetch the record and insert the three values in an array
		session_start();
		$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$_SESSION['privilege'] = (int) $_SESSION['privilege']; // Ensure the user level is an integer
// The login page redirects the user either to the admin page or the users search page
// Use a ternary operation to set the URL
$url = ($_SESSION['privilege'] === 3) ? 'index.php' : 'index.php';
header('Location: ' . $url); // The user is directed to the appropriate page
exit(); // Cancel the rest of the script
	mysqli_free_result($result);
	mysqli_close($link);
	} else { // If no match was found
	echo "<script type='text/javascript'>alert('The Student ID and password entered do not match our records.');</script>";
	
	/*echo '<p class="error">The Student ID and password entered do not match our records.<br><!--Please you need to register, click the Register button on the header menu--></p>';*/
	}
	} else { // If there was a problem
		echo "<script type='text/javascript'>alert('Please try again.');</script>";
		//echo '<p class="error">Please try again.</p>';
	}
	mysqli_close($link);
	} // End of submit conditional
?>
<!-- Display the form fields-->
<div id="loginfields">
<?php include ('includes/login_page.inc'); ?>
</div>
<p>&nbsp;</p>
<!--<p class="cntr"><a href="forgot.php"><b>Forgotten your password?</b></a></p>-->
<footer>
<?php //include ('includes/footer.inc'); ?>
</footer>
</div>
</div>	
</body>
</html>