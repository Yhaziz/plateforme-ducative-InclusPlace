<?php

include_once('../controller/config.php');
$id=$_GET["id"];
$sql = "SELECT * FROM disease WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$row1=array($row['id'],$row['name'],$row['student_count']);
echo json_encode($row1);

?>	