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
<form method ="get" action="">
<center>
<h3>Train Schedule</h3>
<br>Station:<select  name="from"/>  
<option>Select Station</option>
<?php
include "connection.php"; 
    $get = "select * FROM location ";
	$run = mysqli_query($connection,$get);
	while ($row=mysqli_fetch_array($run)){
	$tid =$row['tid'];
    $station =$row['station'];
	//$tm =$row['time'];
   // $valuetrain=$train." ".$tm;
    echo "<option value='$station'>$station</option>";
			
	}
?>
</select>
<br>
Destination:<select  name="to"/>  
<option>Select Destination</option>
<?php
include "connection.php"; 
    $get = "select * FROM location ";
	$run = mysqli_query($connection,$get);
	while ($row=mysqli_fetch_array($run)){
	$tid =$row['tid'];
    $destination =$row['des'];
	//$tm =$row['time'];
   // $valuetrain=$train." ".$tm;
    echo "<option value='$destination'>$destination</option>";
			
	}
?>
</select>
<br>
<input type ="submit" class ="button" name ="bt" value="Show Schedule" /><br>

<?php

include "connection.php";
if(isset($_GET['bt'])){
	$from=$_GET['from'];
	$to=$_GET['to'];
	$_SESSION['from'] = $from;
	$_SESSION['to'] = $to;
	
	echo $from." To ".$to."<br>";
	
	$query=("SELECT station, des, time,train,price FROM t_time WHERE station ='$from' and des='$to' ORDER BY time desc;");
	$result=mysqli_query($connection,$query);
	//$row = mysqli_fetch_array($result);
    //echo $row['station']." To ".$row['des'];
		//$query="insert into singup(name,email,mobile,pass,repass)values('$name','$email','$mobi','$password','$repassword');";
//$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result)){
	//echo $row['station']." To ".$row['des']."<br>Departure Time ".$row['time']."<br>";
	
echo $row['train']." : ".$row['time']." ".$row['price']."TK".'<a href="buy.php">Click for BUY</a>'."<br>";



}

}
?>
</center>
</form>

</div>



</ul>

<!--main class end here-->

</body>



</html>