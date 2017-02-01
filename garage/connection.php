<?php
	//session_start();
	$host= 'localhost';
    $user = 'root'; 
    $pass = '';
	$database = 'garage';
	$link = mysqli_connect($host, $user, $pass) or die("unable to connect 1");
	$db = mysqli_select_db($link , $database);
	?>