<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="nahian";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
	
	die("Error fix please!");
	
	}
else{
	
	//echo "Connection Success<br>";
	
	}
?>