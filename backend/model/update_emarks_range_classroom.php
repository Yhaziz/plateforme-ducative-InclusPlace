<?php
include_once('../controller/config.php');
if(isset($_GET["do"])&&($_GET["do"]=="update_emarks_range_classroom")){
	
	$id=$_GET['id'];	
	$mark_range = $_GET['range'];
	$mark_classroom = $_GET['classroom'];
	
	$m_range=(explode("-",$mark_range));
			
	$_from=$m_range[0];
	$_to=$m_range[1];
	
	
	$msg=0;//for alerts
	
	$sql = "update exam_range_classroom set mark_range='".$mark_range."',_from='".$_from."',_to='".$_to."',mark_classroom='".$mark_classroom."' where id='$id'";

	if(mysqli_query($conn,$sql)){
		$msg+=1;
		//MSK-000143-3 The record has been successfully inserted into the database.
	}else{
		$msg+=2; 
		//MSK-000143-4 Connection problem.
	}
		
	$res=array($msg);
	echo json_encode($res);//MSK-000128-Del
	

}
?>