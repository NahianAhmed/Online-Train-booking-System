
</html><!DOCTYPE>
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
// Start the session
session_start();
?>


<div class="content">
<center>
<div class="content1">
<center>
<h4>Give Your Last Account Info </h4>
<form method ="post" action="">
E-mail<br> <input type="email" name="usremail" required><br>

Mobile No<br><input type ="text" name ="mobi" required/><br>
<input type ="submit" class ="button" name ="bt" value="Check" />


</center>
</div>
</center>

</ul>
<?php

include "connection.php";
if(isset($_POST['bt'])){
	$email=$_POST['usremail'];
	$mobi=$_POST['mobi'];
 	$_SESSION["email"] = $email;
     $_SESSION["mobi"] = $mobi;

$query=("select * from singup where email='$email' and mobile ='$mobi' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);

if($row['email']==$email && $row['mobile']==$mobi && $row['email']!=null){
	header("refresh:0;url=change.php");
	}
	else{
		echo "<script>window.alert('Information Wrong')</script>";
		header("refresh:0;url=forget.php");
		}
}
//} 
//header("refresh:2;url=form.html");
?>
<!--main class end here-->

</body>



</html>