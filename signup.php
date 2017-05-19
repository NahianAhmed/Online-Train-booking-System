<!DOCTYPE>
<html>
<head>

<title>Bangladesh Railway</title>

<link rel="stylesheet" href="style_signup.css" media="all" />

</head>
<body>

<!--main class start here-->
<div class="mainclass">

<div class="header"><img src="sample-banner.jpg" height="99" id="baner" style="width:1000px;height:200px;" /></div>

<div class="manuber">
<!--This is manuber!-->

<ul id="manu">
<li> <a href="Train_home.php">Home </a> </li>
<li> <a href="shedule.php">Train Schedule</a> </li>
<li> <a href="login.php">Login</a> </li>
<li> <a href="help.php">Help</a> </li>




<div class="content">
<div class="content1">
<form method ="post" action="">
Name*<br><input name ="name" type ="text" required />  <br>
E-mail*<br> <input type="email" name="mail" required/><br>
Moblie No.*<br> <input type="tel" name="mobi" required/><br>
Password*<br><input type ="password" name ="password" required/><br>
Re-Enter Password* <br></td><input type ="password" name ="repassword" required/> <br>
<input type ="submit" class ="button" name ="bt" value="Submit" />
</form>

</div>
<div class="content2">
<center><h2> Sing Up Rules </h2></center>
<p>
For sing up you have to fill up the form your email and password will need then you want to login.
Use a valid email. Conformation link will sent to your email address.
Then LOGIN you Account.  
</p>
</div>
<?php

include "connection.php";
if(isset($_POST['bt'])){
	$name=$_POST['name'];
	$email=$_POST['mail'];
	$mobi=$_POST['mobi'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	if($password<>$repassword || $name==null||$email==null||$mobi==null||$password==null ){
		
		if($password<>$repassword){echo "<script>window.alert('Password Mismatch')</script>";}
		
       else{echo "<script>window.alert('Please Fill All Section')</script>";}

	//echo "Kayword Error";
	}
	else{
		$query="insert into singup(name,email,mobile,pass)values('$name','$email','$mobi',md5('$password'));";
$result = mysqli_query($connection,$query);
	
	if($result){
	echo "<script>window.alert('Your Account is ready please login')</script>";
	header("refresh:2;url=login.php");
	}
	else{
		
		echo "<script>window.alert('Email Already Used')</script>";
		
		}
	}

		
}

?>

</ul>

<!--main class end here-->

</body>



</html>