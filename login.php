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

<?php
// Start the session
session_start();
?>



<div class="content">
<center>
<div class="content1">
<center>
<form method ="post" action="action.php">
E-mail<br> <input type="email" name="usremail"><br>

Password<br><input type ="password" name ="password"/><br>
<input type ="submit" class ="button" name ="bt" value="Login" />
</form>
<h4>If you Don't Have Account 
Please Create Account</h4>
 <form action="signup.php" method="">
 <button  class ="button" type="submit">Click Here</button> <br>
 <a href="forget.php">Forget PassWord</a>
  
</form> 
</center>
</div>
</center>

</ul>

<!--main class end here-->

</body>



</html>