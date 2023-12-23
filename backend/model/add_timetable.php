<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_timetable")){

	$classroom_id=$_POST["classroom_id"]; 
	$day=$_POST["day"]; 
	$subject_id=$_POST["subject_id"];
	$teacher_id=$_POST["teacher_id"]; 
	$disease_id=$_POST["disease_id"];
	$start_time=$_POST["start_time"]; 
	$end_time=$_POST["end_time"]; 
	
	$msg=0;
	
	$sql1 = "SELECT * FROM timetable WHERE day='$day' and classroom_id=$classroom_id and end_time > '$start_time' and (start_time >= '$start_time' and start_time < '$end_time')";


	$result1=mysqli_query($conn,$sql1);
	
	if(mysqli_num_rows($result1) > 0){
		$msg+=1; 
		
	}else{
		
		$sql="INSERT INTO timetable (classroom_id, day, subject_id,teacher_id,disease_id,start_time,end_time) 
      VALUES ( '".$classroom_id."','".$day."','".$subject_id."','".$teacher_id."','".$disease_id."','".$start_time."','".$end_time."')";
	  
	  	if(mysqli_query($conn,$sql)){
			$msg+=2;  
			
	  	}else{
			$msg+=3;  
			
	  	}

	}

	if(isset($_POST["do1"])&&($_POST["do1"]=="add_timetable1")){
		
		header("Location: view/timetable.php?do=alert_from_insert&msg=$msg&classroom=$classroom_id");

	}
	
	
	if(isset($_POST["do2"])&&($_POST["do2"]=="add_timetable2")){
		
		header("Location: view/my_timetable2.php?do=alert_from_insert&msg=$msg");

	}

}
?>

