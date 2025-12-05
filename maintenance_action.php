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
<title>Maintenance</title>
<meta charset=utf-8>
<link rel="stylesheet" href="css/login_page.css">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico">
</head>

<body>
<?php
require_once('db_config.php');

$asset_id = $_POST['asset_id'];
$maintenance_date = $_POST['maintenance_date'];
$maintenance_description = $_POST['maintenance_description'];
$maintenance_by = $_POST['maintenance_by'];
$maintenance_cost = $_POST['maintenance_cost'];
$r = mysqli_query ($link,"INSERT INTO maintenance VALUES (NULL, '$asset_id','$maintenance_date','$maintenance_description','$maintenance_by','$maintenance_cost')");

$message="Successfully data inserted";
    if ($r) {
       
	  echo "<script type='text/javascript'>alert('$message');location='index.php'</script>";
	  
    }
?>
<br />

</body>
</html>