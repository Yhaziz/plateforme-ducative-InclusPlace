<?php

include_once('../controller/config.php');
$id=$_GET["id"];
$sql = "SELECT * FROM doctor WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$row1=array($row['id'],$row['cin'],$row['fname'],$row['surname'],$row['gender'],$row['address'],$row['téléphone'],$row['email'],$row['Spec'],$row['image_name']);
echo json_encode($row1);

?>	