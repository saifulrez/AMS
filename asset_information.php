<?php
session_start();
if (!isset($_SESSION['u_mail'])){
header('location:login.php');
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	table, th, td {
		border: 1px solid black;
	}
	</style>
	<meta charset="UTF-8">
	<title>Asset Information</title>
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<!--<a href="logout.php">Logout</a>-->

<?php include('menu_bar.php'); ?>
	<b><h1>Asset Information</h1></b>
	<div class="asset">
		<h3><u>Asset</u></h3>
		<?php
		require('db_config.php');

		$sql = "SELECT asset_id,asset_name,brand_name,purchase_date from asset";
		$result = $link->query($sql);

		if ($result->num_rows > 0) {
			echo "<table><tr><th>Asset ID</th><th>Asset Name</th><th>Brand</th><th>Purchase Dare</th><th>Action</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["asset_id"]. "</td><td>" . $row["asset_name"].
				" </td><td>" . $row["brand_name"]. " </td><td>" . $row["purchase_date"]. "</td><td><a href='asset_delete.php?asset_id=".$row["asset_id"]."'>Delete</a></td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}

		$link->close();
		?>
	</div>
	
	<div class="asset_catagory">
		<h3><u>Asset Catagory</u></h3>
		<?php
		require('db_config.php');

		$sql = "SELECT asset_catagory_id,asset_catagory from asset_catagory";
		$result = $link->query($sql);

		if ($result->num_rows > 0) {
			echo "<table><tr><th>Asset Catagory ID</th><th>Asset Catagory Name</th><th>Action</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {										
				echo "<tr><td>" . $row["asset_catagory_id"]. "</td><td>" . $row["asset_catagory"]. "</td><td><a href='asset_delete_action.php?asset_catagory_id=".$row["asset_catagory_id"]."'>Delete</a></td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}

		$link->close();
		?>
	</div>
	
	<div class="asset_maintenance">
		<h3><u>Asset Maintenance</u></h3>
		<?php
		require('db_config.php');

		$sql = "SELECT maintenance_id,asset_id,maintenance_date,maintenance_description,maintenance_by,maintenance_cost from maintenance";
		$result = $link->query($sql);

		if ($result->num_rows > 0) {
			echo "<table><tr><th>Maintenance ID</th><th>Asset_ID</th><th>Maintenance Date</th><th>Maintenance Description</th>
			<th>Maintenance By</th><th>Maintenance Cost</th><th>Action</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["maintenance_id"]. "</td><td>" . $row["asset_id"]."</td><td>" .
				$row["maintenance_date"]."</td><td>" . $row["maintenance_description"]."</td><td>" . 
				$row["maintenance_by"]."</td><td>" . $row["maintenance_cost"].
				"</td><td><a href='maintenance_delete_action.php?maintenance_id=".
				$row["maintenance_id"]."'>Delete</a></td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}

		$link->close();
		?>
	</div>
	<div class="footer2">
		<?php include('footer.php'); ?>
	</div>
	

	
	
</body>
</html>