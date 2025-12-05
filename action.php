<?php

/*Develop By Solaiman Shohag*/
/*
session_start();
if (!isset($_SESSION['u_mail'])){
header('location:login.php');
exit();
}*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AMS</title>
</head>

<body>
<?php
//$U_id = $_POST['U_id'];
$U_Name = $_POST['U_Name'];
$U_mail = $_POST['U_mail'];
$u_pass = $_POST['u_pass'];
$cell_no = $_POST['cell_no'];
$Dept = $_POST['Dept'];
$Post = $_POST['Post'];
$room = $_POST['room'];

include("db_config.php");
$r = mysqli_query ($link,"INSERT INTO user_info VALUES(NULL, '$U_Name', '$U_mail', '$u_pass', '$cell_no','$Dept','$Post','$room','1')");
/*
if($r) {
	echo "Successfully data inserted";
}
else
	echo "Fail to send data..";*/
$message="Registration Successfully completed";
    if ($r) {
       
	  echo "<script type='text/javascript'>alert('$message');location='index.php'</script>";
	  
    }
?>
<br />

</body>
</html>