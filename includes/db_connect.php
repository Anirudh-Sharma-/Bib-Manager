<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bibmanager";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//test if connection is succeeded
if(mysqli_connect_errno()){
	die("Database connection failed: " .
	     mysqli_connect_error() . 
		 " (" . mysqli_connect_errno() . ")"
		 );
}
?>
