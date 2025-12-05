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
	<title>Data</title>
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<!--<a href="logout.php">Logout</a>-->
<?php include('menu_bar.php'); ?>
<?php
require('db_config.php');
$sql = "SELECT u_id, u_name, u_mail, cell_no, dept, post FROM user_info order by u_id";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Department</th><th>Designation</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["u_id"]. "</td><td>" . $row["u_name"]. " </td><td>" . $row["u_mail"]. " </td><td>" . $row["cell_no"]. " </td><td>" . $row["dept"]. " </td><td>" . $row["post"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$link->close();
?>
<?php include('footer.php'); ?>
</body>
</html>