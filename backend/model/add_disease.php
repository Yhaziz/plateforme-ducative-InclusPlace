<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_disease")){

	$name=$_POST["name"]; 
	$student_count=$_POST["student_count"]; 
	
	$sql1="SELECT * FROM disease where name='$name'";	
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	$name1=$row1['name'];
	
	$msg=0;

	if($name == $name1){
		$msg+=1;
		
	}else{
		
		$sql="INSERT INTO disease (name, student_count) 
     		  VALUES ( '".$name."','".$student_count."')";
	  
			  if(mysqli_query($conn,$sql)){
				$msg+=2;  
				
			  }else{
				$msg+=3;  
				
			  }

	}

header("Location: view/disease.php?do=alert_from_insert&msg=$msg");

}
?>

