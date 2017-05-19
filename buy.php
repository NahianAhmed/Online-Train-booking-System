<!DOCTYPE>
<html>
<head>

<title>Bangladesh Railway</title>

<link rel="stylesheet" href="st.css" media="all" />

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

<?php
// Start the session

$from = $_SESSION['from']; 
$to = $_SESSION['to']; 
?>





<div class="content">
<div class="content2">
<form method ="post" action="">
<center>
<h3><u>Passengers Information</u></h3><br>
</center>

&nbsp; Station of Passenger : <?php  echo $from;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
&nbsp;Destination of Passenger : <?php  echo $to;?>
<br>

&nbsp; Train Schedule :
<select  name="shedule" />  
<option>Select Schedule</option >
<?php
include "connection.php"; 
    $get = "select * FROM t_time WHERE station ='$from' and des='$to'";
	$run = mysqli_query($connection,$get);
	while ($row=mysqli_fetch_array($run)){
	$tid =$row['tid'];
    $train =$row['train'];
	$tm =$row['time'];
    $shedule=$train." ".$tm;
	 $_SESSION['booking']=$valuetrain; 
    echo "<option value='$shedule'>$train $tm</option>";
			
	}
?>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Select Class :
<select  name="price"/>
<?php
include "connection.php"; 
    $get = "select * FROM t_time WHERE station ='$from' and des='$to'";
	$run = mysqli_query($connection,$get);
	while ($row=mysqli_fetch_array($run)){
	$tid =$row['tid'];
    $price =$row['price'];
	
   
	
			
	}
?>  
<option>Select Class</option>
<?php $tk1="1st Class ".$price*1.5."TK"; echo "<option value='$tk1'>$tk1</option>";  ?>
<?php $tk1="2nd Class ".$price*1.2."TK"; echo "<option value='$tk1'>$tk1</option>";  ?>
<?php $tk1="3rd Class ".$price*.8."TK"; echo "<option value='$tk1'>$tk1</option>";  ?>

</select>
</select>
<br>
&nbsp; Select Gender:
<select  name="gender"/>  
<option>Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>


</select>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
Adult Or Children  :
<select  name="age"/>  
<option>Select</option>
<option value="Adult">Adult</option>
<option value="Children">Children</option>


</select>

<br>&nbsp; Passenger's Name : <input type ="text" name ="name" required/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
Book A Sit:
<select  name="sit" required/> 

<option>Select Sit</option >
<?php
include "connection.php"; 
    $get = "select * FROM text WHERE s ='x'";
	$run = mysqli_query($connection,$get);
	while ($row=mysqli_fetch_array($run)){
	$tid =$row['tid'];
    $block =$row['block'];
	$sit =$row['sit'];
    $valuetrain="Block ".$block." ".$sit;
    echo "<option value='$valuetrain'>$valuetrain</option>";
			
	}
?>
</select>



<br>&nbsp; Passenger's Mobile : <input type ="text" name ="mobi" required/>

</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Payee System  :
<select  name="pay"/>  
<option>Select</option>
<option value="DBBL NEXUS">DBBL NEXUS</option>
<option value="DBBL Mobile">DBBL Mobile</option>
<option value="Bcash">Bcash</option>
<option value="VISA">VISA</option>


</select>

<br><br>
<center><input type ="submit" class ="button" name ="bt" value="Confirm Ticket" /><br>
</center>

</form>




</div>



</ul>
<?php

include "connection.php";
if(isset($_POST['bt'])){
	$station= $from;
	$des= $to;
	$shedule=$_POST['shedule'];
	$class=$_POST['price'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$name=$_POST['name'];
	$sit=$_POST['sit'];
	$mobi=$_POST['mobi'];
	$pay=$_POST['pay'];
	$_SESSION["shedule"]=$shedule;
	$_SESSION["name"]=$name;
	
	
		$query="INSERT INTO passenger(station, des, shedule, class, gender,age,name,sit,mobile,pay) VALUES ('$station','$des','$shedule','$class','$gender','$age','$name','$sit','$mobi','$pay');";
$result = mysqli_query($connection,$query);
if($result)
{
	//echo "ok";
	echo "<script>window.alert('Ticket Is Processing Please Wait')</script>";
	header("refresh:3;url=ticket.php");
	
}
else{
	
	echo "error";
	}

		
}

?>

<!--main class end here-->

</body>



</html>