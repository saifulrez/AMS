<?php
	
	require('db_config.php');
	$asset_catagory_id = $_GET['asset_catagory_id'];
	$r = mysqli_query ($link,"DELETE FROM asset_catagory WHERE asset_catagory_id='$asset_catagory_id';");
	
	$message="DELETE Successfull";
    if ($r) {
       
	  echo "<script type='text/javascript'>alert('$message');location='index.php'</script>";
	  
    }
	
?>