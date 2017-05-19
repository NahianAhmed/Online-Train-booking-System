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
<li> <a href="Admin.php">Admin</a> </li>



<div class="content">
<div class="content2">
<form method ="get" action="">
<center>
<h3>Train Schedule</h3>
<br><br>Station:<select  name="from"/>  
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
<br><br>
Destination<select  name="to"/>  
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
<br><br>
<input type ="submit" class ="button" name ="bt" value="Show Schedule" />
</center>
</form>

</div>
<div class="content1">
<center><h2> Train Schedule </h2>

<?php

include "connection.php";
if(isset($_GET['bt'])){
	$from=$_GET['from'];
	$to=$_GET['to'];
	
	
	$query=("SELECT station, des, time,train FROM t_time WHERE station ='$from' and des='$to' ");
	$result=mysqli_query($connection,$query);
	//$row = mysqli_fetch_array($result);
    //echo $row['station']." To ".$row['des'];
		//$query="insert into singup(name,email,mobile,pass,repass)values('$name','$email','$mobi','$password','$repassword');";
//$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result)){
	//echo $row['station']." To ".$row['des']."<br>Departure Time ".$row['time']."<br>";
echo $row['train']." : ".$row['time']."<br>";
}
	
	

}


?>

</center>
<p>
  
</p>
</div>


</ul>

<!--main class end here-->

</body>



</html>