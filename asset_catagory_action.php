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
</head>

<body>
<?php
$asset_catagory = $_POST['asset_catagory'];
include("db_config.php");
$r = mysqli_query ($link,"INSERT INTO asset_catagory VALUES(NULL, '$asset_catagory')");

$message="Successfully data inserted";
    if ($r) {
       
	  echo "<script type='text/javascript'>alert('$message');location='index.php'</script>";
	  
    }
	

?>

<br />

</body>
</html>