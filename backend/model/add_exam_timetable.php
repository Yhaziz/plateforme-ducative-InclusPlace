<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_exam_timetable")){

	$classroom_id=$_POST["classroom_id"];
	$exam_id=$_POST["exam_id"]; 
	$day=$_POST["day"]; 
	$subject_id=$_POST["subject_id"];
	$disease_id=$_POST["disease_id"];
	$start_time=$_POST["start_time"]; 
	$end_time=$_POST["end_time"]; 
	
	$msg=0;
	
	$sql1 = "SELECT * FROM timetable WHERE day='$day' and classroom_id=$classroom_id and end_time > '$start_time' and (start_time >= '$start_time' and start_time < '$end_time')";

	
	$result1=mysqli_query($conn,$sql1);
	
	if(mysqli_num_rows($result1) > 0){
		$msg+=1; 
		
	}else{
		
		$sql="INSERT INTO exam_timetable (classroom_id,exam_id,day, subject_id,disease_id,start_time,end_time) 
      VALUES ( '".$classroom_id."','".$exam_id."','".$day."','".$subject_id."','".$disease_id."','".$start_time."','".$end_time."')";
	  
	  	if(mysqli_query($conn,$sql)){
			$msg+=2;  
			
	  	}else{
			$msg+=3;  
			
	  	}

	}
	
	if(isset($_POST["create_by"])&&($_POST["create_by"]=="Admin")){
		
		header("Location: view/exam_timetable.php?do=alert_from_insert&msg=$msg&classroom=$classroom_id&exam=$exam_id");
		
	}
	
	if(isset($_POST["create_by"])&&($_POST["create_by"]=="Teacher")){
		
		header("Location: view/exam_timetable2.php?do=alert_from_insert&msg=$msg&classroom=$classroom_id&exam=$exam_id");
		
	}
	
	
}
		
?>

