<?php
include_once('../controller/config.php');
if(isset($_GET["do"])&&($_GET["do"]=="delete_range_classroom")){

	$id=$_GET["id"];  
	$msg=0;
	
	$sql="DELETE FROM exam_range_classroom WHERE id='$id'";	

	if(mysqli_query($conn,$sql)){
		$msg+=1; 
	}else{
		$msg+=2; 
	}
	
	$res=array($msg);
	echo json_encode($res);

}
?>
