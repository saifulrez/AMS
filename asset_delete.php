<?php
	
	require('db_config.php');
	$asset_id = $_GET['asset_id'];
	$r = mysqli_query ($link,"DELETE FROM asset WHERE asset_id='$asset_id';");
	
	$message="DELETE Successfull";
    if ($r) {
       
	  echo "<script type='text/javascript'>alert('$message');location='index.php'</script>";
	  
    }
	
?>