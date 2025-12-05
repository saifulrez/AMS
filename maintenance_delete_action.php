<?php
	
	require('db_config.php');
	$maintenance_id = $_GET['maintenance_id'];
	$r = mysqli_query ($link,"DELETE FROM maintenance WHERE maintenance_id='$maintenance_id';");
	
	$message="DELETE Successfull";
    if ($r) {
       
	  echo "<script type='text/javascript'>alert('$message');location='index.php'</script>";
	  
    }
	
?>