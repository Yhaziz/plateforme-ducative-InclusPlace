<?php

include_once('../controller/config.php');
$my_index=$_GET["my_index"];

$sql = "SELECT * FROM admin WHERE index_number='$my_index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$email=$row['email'];

$sql1="SELECT * FROM user WHERE email='$email'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);

$row2=array($row['id'],$row['fname'],$row['surname'],$row['gender'],$row['address'],$row['téléphone'],$row['email'],$row['image_name'],$row1['password'],$row1['email']); 
echo json_encode($row2);

?>
