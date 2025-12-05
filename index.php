<?php
session_start();
if (!isset($_SESSION['u_mail'])){
header('location:login.php');
exit();
}
?>
<!doctype HTML>
<html>
	<head>
		<title>
		Asset Management System
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
		<link rel="stylesheet"  href="css/style.css">
		<link rel="stylesheet" href="css/rg_style.css">
		

	</head>
	<body>
		<!--<a href="show.php">Show Data</a>
		<a href="logout.php">Logout</a>-->
		<?php 
		include('menu_bar.php'); 
		require('db_config.php');
		?>
		<h1 class="dash">Dashboard</h1>
		<div class="all_info">
			<?php
				$total_user="SELECT * FROM user_info;";
				$total_user_query=mysqli_query($link,$total_user);
				$t_result = mysqli_num_rows($total_user_query);
				
			?>
			<h1>Total User<h1>
			<b><?php echo $t_result?></b>
			
		</div>
		
		<div class="total_asset">
			<?php
				$total_asset="SELECT * FROM asset;";
				$total_asset_query=mysqli_query($link,$total_asset);
				$total_asset_result = mysqli_num_rows($total_asset_query);
				
			?>
			<h1>Total Asset<h1>
			<b><?php echo $total_asset_result?></b>
		</div>
		
		<div class="total_maintenance_asset">
			<?php
				$total_asset_maintenance="SELECT * FROM maintenance;";
				$total_asset_maintenance_query=mysqli_query($link,$total_asset_maintenance);
				$total_asset_maintenance_result = mysqli_num_rows($total_asset_maintenance_query);
				
			?>
			<h1>Total Asset Maintenance<h1>
			<b><?php echo $total_asset_maintenance_result?></b>
		</div>
		
		<div class="total_asset_cataory">
			<?php
				$total_asset_cataory="SELECT * FROM `asset_catagory` ";
				$total_asset_cataory_query=mysqli_query($link,$total_asset_cataory);
				$total_asset_cataory_result = mysqli_num_rows($total_asset_cataory_query);
				
			?>
			<h1>Total Asset Cataory<h1>
			<b><?php echo $total_asset_cataory_result?></b>
		</div>
		
		<div>
			<!--<input id="vacation" name="vacation" type="date">
			<input id="startdate" name="startdate" min="2012-01-01" max="2013-01-01" type="date">
			<input id="expiry" name="expiry" type="month" required>
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
				<input type="date" />-->
		</div>
		
		<?php include('footer.php'); ?>
	</body>
</html>