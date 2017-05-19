<html>
<head>

<title>Bangladesh Railway</title>

<link rel="stylesheet" href="style_login.css" media="all" />

</head>
<body>

<!--main class start here-->
<div class="mainclass">

<div class="header"><img src="sample-banner.jpg" height="99" id="baner" style="width:1000px;height:200px;" /></div>

<div class="manuber">
<!--This is manuber!-->

<ul id="manu">
<center><li> <a href="">Change Your PassWord </a> </li>
</center>

<?php
session_start();
?>


<div class="content">
<center>
<div class="content1">
<center>
<h4>Please Give New PassWord</h4>
<form method ="post" action="">
Enter New PassWord<br> <input type="password" name="newpass" required><br>

Re-Enter PassWord <br><input type ="password" name ="againpass" required/><br>
<input type ="submit" class ="button" name ="bt" value="change" />

</center>
</div>
</center>

</ul>

<!--main class end here-->
<?php

include "connection.php";
if(isset($_POST['bt'])){
	$newpass=$_POST['newpass'];
	$againpass=$_POST['againpass'];
	$email=$_SESSION["email"];
	$mobi=$_SESSION["mobi"]; 
	if($newpass==$againpass){
 $pass=md5($newpass);
$query=("update singup set pass='$pass' WHERE email='$email' and mobile='$mobi'");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);

if($result){
	echo "<script>window.alert('PassWord Changed')</script>";
	header("refresh:0;url=login.php");	
	}
	else{
		echo "<script>window.alert('PassWord Mismatch')</script>";
		header("refresh:0;url=login.php");
		
		}
	
}


} 
//header("refresh:2;url=form.html");
?>

</body>



</html>





