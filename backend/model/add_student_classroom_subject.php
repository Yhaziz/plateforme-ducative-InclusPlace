<?php
include_once("../controller/config.php");
$index=$_GET['index'];
$classroom_id=$_GET['classroom'];
$current_year=date('Y');
$msg=0;


for($i=0;$i<count(json_decode($_GET['id']));$i++){

	$id = json_decode($_GET['id'], true);
	
	$sql = "INSERT INTO student_subject(index_number,sr_id,year)
			VALUES ('".$index."','".$id[$i]."','".$current_year."')";
	mysqli_query($conn,$sql);
		
}

$sql1 = "INSERT INTO student_classroom(index_number,classroom_id,year)
		 VALUES ('".$index."','".$classroom_id."','".$current_year."')";
	
if(mysqli_query($conn,$sql1)){
	$msg+=1;
}else{
	$msg+=2; 
}

$res=array($msg);
echo json_encode($res);

?>


	