<?php
require "con_hostinger.php";
$temp=$_GET['temp'];
$humidity=$_GET['humidity'];
$soil=$_GET['soil'];
$water=$_GET['water'];
$date=date('Y-m-d');
$time=date('H:i:s');
$query="INSERT INTO Sensor_Readings VALUES ('$date','$time','$temp','$humidity','$soil','$water')";
$result=mysqli_query($con,$query);
if(!$result){
	echo "Query Failed";
}else{
	echo "Success";
}


?>