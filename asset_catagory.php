<?php
session_start();
if (!isset($_SESSION['u_mail'])){
header('location:login.php');
exit();
}
?>
<!Doctype html>
<html lang=en>
<head>
<title>Asset Catagory Entry</title>
<meta charset=utf-8>
<link rel="stylesheet" href="css/login_page.css">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
<link rel="stylesheet" href="css/rg_style.css">
<link rel="stylesheet"  href="css/style.css">

</head>
<body>
<?php
		
		include('menu_bar.php');
		
		?>
<!--<a href="index.php">Home</a>
<a href="logout.php">Logout</a>-->
<form action="asset_catagory_action.php" method="post">
		
		
		
		<p>
				<label for="asset_catagory" class="floatLabel">Asset Catagory:</label>
				<input id="asset_catagory" name="asset_catagory" type="text">
		</p>
		
	<!--<input type="submit" name="submit" value="Submit">-->
	<button type="submit" onclick="alert('Are u sure??')">Sumbit</button>
		
</form>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	<?php include('footer.php'); ?>
</body>
</html>