<?php
session_start();
    echo $_SESSION["user"];
    $host= 'localhost';
    $dbname ='garage';
    $user = 'userName'; 
    $pass = 'Pass';

       $query = "SELECT `userName`, `Pass` FROM `login` WHERE `userName` = '$userName' AND `Pass` = '$Pass'";
	
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url("");
    background-repeat: no-repeat;
    background-position: bottom;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li a{
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}
li b{
float: right;
}
</style>
</head>
<body>



<h1 style="text-align:center; color:green; margin-top:20px;">SERVICES</h1>
<form name = "billing" method = "POST" action = "bill.php" onsubmit="Login.php">

    Name:<br>
    <input type="text" name="user_name">
    <br>
 Contact Number:<br>
    <input type="text" name="contact_number">
    <br>
    Address:<br>
    <textarea name="address" rows="5" cols="50"></textarea>
    <br><br>

     Product-id:<br>
    <input type="text" name="product_id">
    <br><br>
Quantity:
<select name="quantity">
    <option name="1" value="1">1</option>
    <option name="2" value="2">2</option>
    <option name="3" value="3">3</option>
    <option name="4" value="4">4</option>
</select><br><br>
<select name="pid1">
    <option name="1" value="1">Cash on delivery</option>
    <option name="2" value="2" >Online payment</option>
</select><br><br>
<p>Fill only for online payment.</p>
Card Number:<br>
    <input type="text" name="cn">
    <br><br>
CVV Number:<br>
    <input type="text" name="cvvn">
    <br><br>

<input id="button" type="submit" name="submit" value="Submit"></td>

</form>

</body>
</html>
