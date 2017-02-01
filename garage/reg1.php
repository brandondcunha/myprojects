<?php 
	include "connection.php";
	//session_start();
	$user = $_POST['userName'];
	$pass =$_POST['pass'];
	$email_id = $_POST['userEmail'];
	$phone = $_POST['userPhone'];
	$vehicle_name = $_POST['vname'];
	$vehicle_no = $_POST['vno'];
	$issue = $_POST['issue'];
		
		$query1 = "INSERT INTO `register`(`username`, `email_id`, `contact`, `veh_name`, `veh_no`, `issue`,`pass`) 
		VALUES ('$user','$email_id','$phone','$vehicle_name','$vehicle_no','$issue','$pass')";
		$query2 ="INSERT INTO `login`(`userName`, `Pass`) VALUES ('$user','$pass')";
		
        $data1 = mysqli_query($link, $query1);
        $data2 = mysqli_query($link, $query2);
		
		echo("<script>window.alert('Registered Successfully, We will contact you for the further process.')</script>");
		echo("<script>window.location='index.php'</script>");
	
?>