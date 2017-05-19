<!DOCTYPE>
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
<li> <a href="Train_home.php">Home </a> </li>
<li> <a href="shedule.php">Train Schedule</a> </li>
<li> <a href="login.php">Login</a> </li>
<li> <a href="help.php">Help</a> </li>
<li> <a href="Admin.php">Admin</a> </li>




<div class="content">
<center>
<div class="content1">
<center>
<form method ="post" action="">
<br>
<h1>
Admin Login
</h1>
<br>
User Name<br> <input type="text" name="user" required><br>

Password<br><input type ="password" name ="password" required/><br>
<input type ="submit" class ="button" name ="bt" value="Login" />
</form>
</center>
</div>
<?php
if(isset($_POST['bt'])){
	$user=$_POST['user'];
	$pass=($_POST['password']);
	if($user=="admin"&& $pass=="admin"){
		header("refresh:0;url=addshedule.php");
		
		}
		else {
			
			echo "<script>window.alert('Password Mismatch or You ane not Admin')</script>";
			}


}

?>

</ul>

<!--main class end here-->

</body>



</html>