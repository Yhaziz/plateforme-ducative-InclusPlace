<?php

include_once('../controller/config.php');
$id=$_GET["id"];
$sql = "SELECT * FROM teacher WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$row1=array($row['id'],$row['cin'],$row['fname'],$row['surname'],$row['spec'],$row['gender'],$row['address'],$row['téléphone'],$row['email'],$row['facebook'],$row['instagram'],$row['linkedin'],$row['image_name'],$row['reg_date']);
echo json_encode($row1);

?>	