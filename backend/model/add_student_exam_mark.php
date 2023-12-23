<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_student_exam_mark")){
	
	$my_index = $_POST['my_index'];
	$std_index = $_POST['std_index'];	
	$classroom_id = $_POST['classroom'];
	$exam_id = $_POST['exam_id'];
	$page = $_POST['current_page'];
	
	$current_year=date('Y');
	$date=date("Y-m-d");
	$msg=0;

	for($i=0;$i<count($_POST['subject_id']);$i++){
	
		$subject_id = $_POST['subject_id'];
		$mark = $_POST['exam_mark'];
		
		$sql = "INSERT INTO student_exam(index_number,classroom_id,exam_id,subject_id,marks,year,date)
				VALUES ('".$std_index."','".$classroom_id."','".$exam_id."','".$subject_id[$i]."','".$mark[$i]."','".$current_year."','".$date."')";
				
		if(mysqli_query($conn,$sql)){
			$msg=1;
			
		}else{
			$msg=2; 
			
		}
		
	}
	
//header("Location: view/all_student.php?do=alert_from_insert_eMark&msg=$msg&classroom=$classroom_id&page=$page");

header("Location: view/my_student_exam_marks.php?do=alert_from_insert&msg=$msg&exam=$exam_id&current_year=$current_year&my_index=$my_index&classroom=$classroom_id");

}
?>