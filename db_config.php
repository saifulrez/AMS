<?php 
//error_reporting(E_ALL);
$dbhost = "localhost";
$dbname = "ams";
$dbuser = "root";
$dbpass = "";
//Connect to database
/*mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());*/
$link=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
//Check database Connection....
/*if($link){
	echo "Success";
}
else
	echo "Failor...!!";*/
//error_reporting (E_ALL ^ E_NOTICE);
//error_reporting(E_ALL ^ E_DEPRECATED)

 ini_set( 'error_reporting', E_ALL ^ E_NOTICE );
 ini_set( 'display_errors', '0' );
//Database...............



?>