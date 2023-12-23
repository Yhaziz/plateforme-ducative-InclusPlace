<?php

include_once('../controller/config.php');
$id=$_GET["id"];

$sql = "SELECT * FROM student WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$my_son_index=$row['index_number'];

$sql1 = "SELECT * FROM parents WHERE my_son_index=$my_son_index";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);

$row1=array($row['id'],$row['fname'],$row['surname'],$row['address'],$row['gender'],$row['téléphone'],$row['email'],$row['image_name'],$row['image_name'],$row1['surname'],$row1['email'],$row1['téléphone']);


echo json_encode($row1);
?>