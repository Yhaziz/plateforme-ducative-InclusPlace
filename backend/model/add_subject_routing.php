<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_subject_routing")){

	$classroom_id=$_POST['classroom_id'];	
	$subject_id=$_POST['subject_id'];
	$teacher_id=$_POST['teacher_id'];
	$fee=$_POST['fee'];

	$sql1="SELECT * FROM subject_routing where classroom_id='$classroom_id' and subject_id='$subject_id' and teacher_id='$teacher_id'";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);

	$classroom_id1=$row1['classroom_id'];	
	$subject_id1=$row1['subject_id'];
	$teacher_id1=$row1['teacher_id'];
	$fee1=$row1['fee'];

	$msg=0;

	if($classroom_id == $classroom_id1 && $subject_id == $subject_id1 && $teacher_id == $teacher_id1){
		$msg+=1;
		
		
	}else{
	
		$sql="INSERT INTO subject_routing(classroom_id,subject_id,teacher_id,fee) 
      VALUES ( '".$classroom_id."','".$subject_id."','".$teacher_id."','".$fee."')";
	  
	 	if(mysqli_query($conn,$sql)){
			$msg+=2;  
			
	  	}else{
			$msg+=3;
			
	  	}
		
	}

	header("Location: view/subject_routing.php?do=alert_from_insert&msg=$msg");
	
}

?>