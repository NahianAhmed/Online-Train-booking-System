<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="ticket.css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BD Railway</title>
</head>

<?php
// Start the session
session_start();
$shedule = $_SESSION["shedule"];
$name = $_SESSION["name"];


include "connection.php";
$query="SELECT * FROM `passenger` WHERE name = '$name' and shedule='$shedule'; ";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);
$from = $row['station'];
$to = $row['des'];
$sit = $row['sit'];
$mobile =$row['mobile'];


?>

<div class="box">
  <ul class="left">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  
  <ul class="right">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="ticket">
    <span class="airline">Bangladesh Railway</span>
    <span class="airline airlineslip">BD Railway</span>
    <span class="boarding"></span>
    <div class="content">
      <span class="jfk"><?php  echo $from.' to';  ?></span>
      
      <span class="sfo"><?php  echo $to;  ?></span>
      
     
      
      
      <div class="sub-content">
        <span class="watermark"></span>
        <span class="name">PASSENGER NAME<br><span><?php  echo $name;  ?></span></span>
        <span class="flight">Train Schedule<br><span><?php  echo $shedule;  ?></span></span>
        
       <!-- <span class="gate">GATE<br><span>11B</span></span>
        
        <span class="seat">SEAT<br><span>45A</span></span>
        <span class="boardingtime">BOARDING TIME<br><span>8:25PM ON AUGUST 2013</span></span>--->
         
            
         <!--<span class="flight flightslip">FLIGHT N&deg;<br><span>X3-65C3</span></span>
         
         <span class="name nameslip">PASSENGER NAME<br><span></span></span>-->
          <span class="seat seatslip">Block : SEAT<br><span><?php  echo $sit;  ?></span></span>
      </div>
    </div>
    
  </div>
</div>

<body><center>
<h1>This is Your Ticket. Please Print it and bring it while Travelling <h1>
</center>
</body>
</html>