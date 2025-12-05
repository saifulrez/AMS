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
	<meta charset="UTF-8">
	<title>Asset Entry</title>
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
	<link rel="stylesheet" href="css/rg_style.css">
	<link rel="stylesheet"  href="css/style.css">
  
</head>
<body>
<?php
		
		include('menu_bar.php');
		
		?>
<?php
	
	require ('db_config.php');
	//For user mail query
	$u_mail_query="SELECT u_mail,u_id FROM user_info";
	$u_mail_result=mysqli_query($link,$u_mail_query);
	$u_mail_options="";
	while($u_mail_row=mysqli_fetch_array($u_mail_result)){
		$u_mail_options=$u_mail_options."<option value=".$u_mail_row['u_id'].">$u_mail_row[0]</option>";
	}			
	
	//For asset catagory query
	$catagory_query="SELECT asset_catagory,asset_catagory_id FROM asset_catagory";
	$catagory_result=mysqli_query($link,$catagory_query);
	$catagory_options="";
	while($catagory_row=mysqli_fetch_array($catagory_result)){
		$catagory_options=$catagory_options."<option value=".$catagory_row['asset_catagory_id'].">$catagory_row[0]</option>";
	}
?>
<!--
<a href="index.php">Home</a>
<a href="logout.php">Logout</a>-->
		<form action="asset_action.php" method="post">
			<h2>Asset Entry</h2>
				<p>
						<label for="asset_name" class="floatLabel">Asset Name:</label>
						<input id="asset_name" name="asset_name" type="text">
				</p>
				
				<p>
						<label for="u_id" class="floatLabel">User Mail:</label>
						<select name="u_id" id="u_id" type="text">
							<?php echo $u_mail_options;?>
						</select><br><br>
				</p>
				
				<p>
						<label for="asset_catagory_id" class="floatLabel">Asset Catagory:</label>
						<select name="asset_catagory_id" id="asset_catagory_id" type="text">
							<?php echo $catagory_options;?>
						</select><br><br>
				</p>
				
				<p>
						<label for="status" class="floatLabel">Status:</label>
						<input id="status" name="status" type="text">
				</p>
				
				<p>
						<label for="model_number" class="floatLabel">Model number:</label>
						<input id="model_number" name="model_number" type="text">
				</p>
				
				<p>
						<label for="serial_number" class="floatLabel">Serial number:</label>
						<input id="serial_number" name="serial_number" type="text">
				</p>
				
				<p>
						<label for="brand_name" class="floatLabel">Brand name:</label>
						<input id="brand_name" name="brand_name" type="text">
				</p>
				
				<p>
						<label for="purchase_date" class="floatLabel">Purchase date:</label>
						<!--<input id="purchase_date" name="purchase_date" type="text">-->
						<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
						<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
						<script>
						webshims.setOptions('forms-ext', {types: 'date'});
						webshims.polyfill('forms forms-ext');
						$.webshims.formcfg = {
						en: {
							dFormat: '-',
							dateSigns: '-',
							patterns: {
								d: "yy-mm-dd"
							}
						}
						};
						</script>
						<input id="purchase_date" name="purchase_date" type="date">
				</p>
				
				<p>
						<label for="pruchase_price" class="floatLabel">Pruchase price:</label>
						<input id="pruchase_price" name="pruchase_price" type="text">
				</p>
				
				<p>
						<label for="warenty" class="floatLabel">Warenty:</label>
						<input id="warenty" name="warenty" type="text">
				</p>



			<input type="submit"name="submit"value="Submit">
		</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	<?php include('footer.php'); ?>
</body>
</html>