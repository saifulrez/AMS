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
	<title>Maintenance</title>
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
	<link rel="stylesheet" href="css/rg_style.css">
	<link rel="stylesheet" href="css/style.css">

  
</head>
<body>
<?php
		
		include('menu_bar.php');
		
		?>
<?php
	
	require ('db_config.php');
	//For user asset query
	$asset_query="SELECT asset_name,asset_id FROM asset";
	$asset_result=mysqli_query($link,$asset_query);
	$asset_options="";
	while($asset_row=mysqli_fetch_array($asset_result)){
		$asset_options=$asset_options."<option value=".$asset_row['asset_id'].">$asset_row[0]</option>";
	}			
	
	
	
?>
<!--
<a href="index.php">Home</a>
<a href="logout.php">Logout</a>-->
		<form action="maintenance_action.php" method="post">
			<h2>Asset Maintenance Entry</h2>
								
				<p>
						<label for="asset_id" class="floatLabel">Asset Name:</label>
						<select name="asset_id" id="asset_id" type="text">
							<?php echo $asset_options;?>
						</select><br><br>
				</p>
				
				<p>
						<label for="maintenance_date" class="floatLabel">Maintenance Date:</label>
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
						<input id="maintenance_date" name="maintenance_date" type="date">
				</p>
				
				<p>
						<label for="maintenance_description" class="floatLabel">Maintenance description:</label>
						<input id="maintenance_description" name="maintenance_description" type="text">
				</p>
				
				<p>
						<label for="maintenance_by" class="floatLabel">Maintenance by:</label>
						<input id="maintenance_by" name="maintenance_by" type="text">
				</p>
				
				<p>
						<label for="maintenance_cost" class="floatLabel">Maintenance cost:</label>
						<input id="maintenance_cost" name="maintenance_cost" type="text">
				</p>
				
				
			<input type="submit" name="submit" value="Submit">
		</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	<?php include('footer.php'); ?>
</body>
</html>