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

<li> <a href="addshedule.php">Add Train Schedule</a> </li>
<li> <a href="delete_shedule.php">Delete Train Schedule</a> </li>
<li> <a href="update_shedule.php">Update Train Schedule</a> </li>
<li> <a href="Train_home.php">Logout</a> </li>




<div class="content">
<div class="content2">
<form method ="get" action="">
<center>
<h3>Train Schedule</h3>
Station:<select  name="from"/>  
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
<input type ="submit" class ="button" name ="bt" value="Show Schedule" />
</center>
</form>
<?php

include "connection.php";
if(isset($_GET['bt'])){
	$from=$_GET['from'];
	$to=$_GET['to'];
	
	
	
	$query=("SELECT station, des, time,train FROM t_time WHERE station ='$from' and des='$to' ");
	$result=mysqli_query($connection,$query);
	//$row = mysqli_fetch_array($result);

		//$query="insert into singup(name,email,mobile,pass,repass)values('$name','$email','$mobi','$password','$repassword');";
//$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result)){
	//echo $row['station']." To ".$row['des']."<br>Departure Time ".$row['time']."<br>";
	echo $row['train']." : ".$row['time']."<br>";
}
	
	

}


?>

</div>
<div class="content1">
<center><h2> Add Train Schedule </h2>
<form method ="post" action="">
<br>
Station:<select  name="from"/>  
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
Train Name:<select  name="train"/>  
<option>Select Train</option>
<?php
include "connection.php"; 
    $get = "select * FROM train ";
	$run = mysqli_query($connection,$get);
	while ($row=mysqli_fetch_array($run)){
	$tid =$row['tid'];
    $train =$row['trainname'];
	//$tm =$row['time'];
   // $valuetrain=$train." ".$tm;
    echo "<option value='$train'>$train</option>";
			
	}
?>
</select>
<br>
Add Price<input type ="text" name ="price" required/> TK<br>
Add Time<input type ="text" name ="time" required/>

AM/PM<select name="am_pm">
<option value="AM">AM</option>
<option value="PM">PM</option>
</select>
<br>



<br>
<input type ="submit" class ="button" name ="btt" value="Add Schedule" />
</center>
</form>

<?php

include "connection.php";
if(isset($_POST['btt'])){
	$from=$_POST['from'];
	$to=$_POST['to'];
	$tm=$_POST['time'];
	$tm=$tm." ";
	$tm.=$_POST['am_pm'];
	$train=$_POST['train'];
	$price=$_POST['price'];
	
	$query=("insert t_time(station,des,time,train,price) values('$from','$to','$tm','$train','$price') ");
	$result=mysqli_query($connection,$query);
	//$row = mysqli_fetch_array($result);

		//$query="insert into singup(name,email,mobile,pass,repass)values('$name','$email','$mobi','$password','$repassword');";
//$result = mysqli_query($connection,$query);
//while($row = mysqli_fetch_array($result)){
	//echo $row['station']." To ".$row['des']."<br>Departure Time ".$row['time']."<br>";
//}
	if($result){
	echo "<script>window.alert('Schedule Added')</script>";
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