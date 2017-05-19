<?php
// Start the session
session_start();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

include "connection.php";
//if(isset($_POST['bt'])){
	$email=$_POST['usremail'];
	$pass=md5($_POST['password']);
	$_SESSION["email"] = $email;

$query=("select * from singup where email='$email' and pass ='$pass' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);

if($row['email']==$email && $row['pass']==$pass && $row['email']!=null){
	echo "<script>window.alert('Well Come ')</script>";
	header("refresh:1;url=user1p.php");
	}
	else{
		echo "<script>window.alert('Password Mismatch Or You Account is not Created')</script>";
		header("refresh:1;url=login.php");
		}
//} 
//header("refresh:2;url=form.html");
?>

<body>
</body>
</html>