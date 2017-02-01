<?php 
	include "connection.php";
	session_start();
	$userName = $_POST['userName'];
	$Pass = $_POST['Pass'];
	
		$query = "SELECT `userName`, `Pass` FROM `login` WHERE `userName` = '$userName' AND `Pass` = '$Pass'";
        $data = mysqli_query($link, $query);
		$temp = mysqli_num_rows($data);
		if($temp == 1)
		{
		echo("<script>window.alert('Successful Login')</script>");
		echo("<script>window.location='services.php'</script>");
		}
    else
	{
        echo("<script>window.alert('Invalid Login')</script>");
		echo("<script>window.location='login.php'</script>");
		}
?>