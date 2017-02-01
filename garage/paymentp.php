<?php
session_start();
$user_name=$_POST['user_name'];
$user_id=$_SESSION["user"];
$address=$_POST['address'];
$contact_number=$_POST['contact_number'];
$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
    echo $_SESSION["user"];
    $host= 'localhost';
    $dbname ='garage';
    $user = 'userName'; 
    $pass = 'Pass';

   $query = "SELECT `userName`, `Pass` FROM `login` WHERE `userName` = '$userName' AND `Pass` = '$Pass'";
$q1="INSERT INTO `purchased`(`user_name`, `user_id`, `address`, `contact_number`, `product_id`, `quantity`) VALUES  ('$user_name' ,'$user_id', '$address','$contact_number','$product_id','$quantity')";       
$res2 = mysqli_query($result , $q1);

header("Location:paymentm.php");
		exit();
?>
