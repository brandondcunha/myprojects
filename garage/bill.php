<?php
session_start();
//$user_id=$_SESSION["user"];
$user_name = $_POST['user_name'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$pid1 = $_POST['pid1'];
$cardnumber =$_POST['cn'];
$cvvnumber = $_POST['cvvn'];



    $host= 'localhost';
    $dbname ='garage';
    $user = 'userName'; 
    $pass = 'Pass';

        $result = mysqli_connect($host, $user, $pass,$dbname);

	if(!$result)
       {
	echo "Connection Problem!";
       }



$sql1= "create table ".$_SESSION["user"]." (user_name varchar(20),user_id varchar(15),address varchar(100),contact_number bigint(10),product_id int(5) Primary Key ,product_name Varchar(50), quantity int(5),type int(5), cost bigint(10),total_cost bigint(15))"; 

$res1 = mysqli_query($result , $sql1);

$sql2 = "INSERT INTO ".$_SESSION["user"]." (user_name,user_id,address,contact_number,product_id,quantity,type) VALUES    ('$user_name','$user_id','$address','$contact_number','$product_id','$quantity','$pid1')";

$res2 = mysqli_query($result , $sql2);

if ($pid1==2)

{

$sql3="ALTER table ".$_SESSION["user"]." ADD cardnumber bigint(16)";
$res3 = mysqli_query($result , $sql3);

$sql4="ALTER table ".$_SESSION["user"]." ADD cvvnumber int(3)";
$res4 = mysqli_query($result , $sql4);

$sql5 ="UPDATE ".$_SESSION["user"]."  SET cardnumber='$cardnumber',cvvnumber='$cvvnumber' WHERE product_id ='$product_id';";
$res5= mysqli_query($result , $sql5);


}

$sql7 ="UPDATE ".$_SESSION["user"]." JOIN product ON product.product_id = ".$_SESSION["user"].".product_id SET ".$_SESSION["user"].".cost = product.cost;";
$res7 = mysqli_query($result , $sql7);

$sql8 ="UPDATE ".$_SESSION["user"]." JOIN product ON product.product_id = ".$_SESSION["user"].".product_id SET ".$_SESSION["user"].".product_name = product.product_name;";
$res8 = mysqli_query($result , $sql8);


$sql = "SELECT * FROM ".$_SESSION["user"]." ";
$res = mysqli_query($result , $sql);
$numrows=mysqli_num_rows($res);


$sql8="UPDATE ".$_SESSION["user"]." SET total_cost=quantity*cost";
$res8=mysqli_query($result , $sql8);

$sql6="SELECT * FROM ".$_SESSION["user"]." ";
$res6=mysqli_query($result,$sql6);
$numrowsjoin=mysqli_num_rows($res6);


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
.tb
{
text-align:center;
 color:green;
}

</style>
</head>
<body>


<h1 style="text-align:center; color:green;">THANKYOU !</h1>
<h3 style="text-align:center; color:green; margin-top:50px;">ITEMS PURCHASED</h3>

<?php
 if($numrowsjoin>0)
{

 echo "<table align=center width='50%'' border=1>
            <tr>
            <th>PRODUCT ID</th>
            <th>PRODUCT NAME</th>
            <th>COST PP</th>
            <th>QUANTITY</th>
            <th>TOTAL COST</th>
                       </tr>";

        
           while($data = $res6->fetch_assoc()) 
           { 
            echo "<tr>";
            echo "<td  align =center>".$data['product_id']."</td>";
            echo "<td align =center>".$data['product_name']."</td>";
            echo "<td align =center>".$data['cost']."</td>";
            echo "<td align =center>".$data['quantity']."</td>";
            echo "<td align =center>".$data['total_cost']."</td>";
            echo "</tr>";
            }
            echo "</table>";
            }

else {
            echo "0 results";
           
 }

$total ="SELECT SUM(total_cost) FROM ".$_SESSION["user"]."";
$rest=mysqli_query($result,$total);
$displayt=mysqli_fetch_row($rest);



mysqli_close($result);
 ?>
<br>
<h3 style=" text-align:center;color: green;"><?php echo "YOUR GRAND TOTAL IS: RS. ".$displayt[0].""; ?> </h3>
<p style="text-align:center; color:green;">YOUR SERVICE WILL BE DONE IN NEXT 5 WORKING DAYS!</p>
	
