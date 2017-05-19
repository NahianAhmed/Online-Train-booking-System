<!DOCTYPE>
<html>
<head>

<title>Bangladesh Railway</title>

<link rel="stylesheet" href="usercheak.css" media="all" />

</head>
<body>

<!--main class start here-->
<div class="mainclass">

<div class="header"><img src="sample-banner.jpg" height="99" id="baner" style="width:1000px;height:200px;" /></div>

<div class="manuber">
<!--This is manuber!-->

<ul id="manu">
<li> <a href="user1p.php">User</a> </li>
<li> <a href="usercheak.php">Check Ticket</a> </li>
<li> <a href="Train_home.php">Logout</a> </li>
<li> <a href="change.php">Change PassWord</a> </li>
<li> <?php
// Start the session
session_start();
$email=$_SESSION["email"];
echo "login as ".$email;

?></a> </li>







<div class="content">
<div class="content2">
<center>
<H1>

</h1>

<?php
$email=$_SESSION["email"];
//echo $email;
include "connection.php";

	
    //echo $row['station']." To ".$row['des'];
	$query="SELECT * FROM singup where email='$email'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);
//while($row = mysqli_fetch_array($result)){
	//echo $row['station']." To ".$row['des']."<br>Departure Time ".$row['time']."<br>";
	
//echo 'Your name is '.$row['name']."Email is ".$row['mobile']; 





//}
?>
<h1><?php echo "Hello ".$row['name'];?></h1>
<br><br>
<h3>Your Register Email is <?php echo "".$row['email'];?> </h3>
<h4> Now You Can Buy Your Train Ticket<br> For That goto Check Ticket and check train Schedule and buy ticket<br> Thank You Have a Happy journey.</h4>
</center>
</form>

</div>



</ul>

<!--main class end here-->

</body>



</html>