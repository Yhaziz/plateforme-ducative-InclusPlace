<?php

include_once('../controller/config.php');
$id=$_GET["id"];
$sql = "SELECT * FROM school WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$row1=array($row['id'],$row['fname'],$row['address'],$row['email'],$row['téléphone'] ,$row['image_name']);
echo json_encode($row1);



?>	


