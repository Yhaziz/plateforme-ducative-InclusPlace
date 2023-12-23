<?php

include_once('../controller/config.php');
$id=$_GET["id"];
$sql = "SELECT * FROM payment_notifications WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$row1=array($row['id'],$row['index_number'],$row['year'],$row['month'],$row['date'] ,$row['_status']);
echo json_encode($row1);



?>	


