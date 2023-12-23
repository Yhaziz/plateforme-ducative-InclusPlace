<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_emarks_range_classroom")){
	
$classroom_id = $_POST['classroom_id'];
$msg=0;

	for($i=0;$i<count(($_POST['mark_range']));$i++){
	
		$mark_range = $_POST['mark_range'];
		$mark_classroom = $_POST['mark_classroom'];
		
		$m_range=(explode("-",$mark_range[$i]));
		
		$_from=$m_range[0];
		$_to=$m_range[1];
		
		$sql = "INSERT INTO exam_range_classroom(classroom_id,mark_range,_from,_to,mark_classroom)
				VALUES ('".$classroom_id."','".$mark_range[$i]."','".$_from."','".$_to."','".$mark_classroom[$i]."')";
				
		if(mysqli_query($conn,$sql)){
			$msg=5;
			
		}else{
			$msg=3; 
			
		}
		
	}
	
	if($_POST["current_page"]== NULL){
		header("Location: view/classroom.php?do=alert_from_insert&msg=$msg&classroom=$classroom_id");
		
	}else{
		$page=$_POST["current_page"];
		header("Location: view/classroom.php?do=alert_from_eMark_insert&msg=$msg&classroom=$classroom_id&page=$page");
	}
	
}
?>