<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_group_message")){

	$my_index=$_POST["my_index"]; 
	$my_type=$_POST["my_type"];  
	$group_id=$_POST["group"];
	$message=$_POST["gmessage"]; 

	$date=date("Y-m-d");
	$time=date("h:i:sa");
	$year=date("Y");
	
	$sql6="SELECT conversation_id FROM my_friends ORDER BY id DESC LIMIT 1;";
	$result6=mysqli_query($conn,$sql6);
	$row6=mysqli_fetch_assoc($result6);
	$conversation_id = $row6['conversation_id'];
	$conversation_id1 = $conversation_id + 1;
	
	$prefix="";
	$classroom_id="";
	
	if(isset($_POST["checkbox"])){
		for($i=0;$i<count(($_POST["checkbox"]));$i++){
		
			$classroom=$_POST["checkbox"][$i];
			
			$classroom_id.=$prefix.$classroom;
			$prefix=',';
	
		}
	}
	
	$msg=0;
	
	
	
	$sql7="INSERT INTO group_message (conversation_id,message,sender_index,sender_type,group_id,classroom,date,time) 
		   VALUES ('".$conversation_id1."','".$message."','".$my_index."','".$my_type."','".$group_id."','".$classroom_id."','".$date."','".$time."')";
	
	if(mysqli_query($conn,$sql7)){
		$msg+=1;
	}else{
		$msg+=2;
	}		  
	

	if($group_id == 1){
		
		include_once('../controller/config.php');
		
		$sql="SELECT * FROM student";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$index_number=$row['index_number'];
				
				$sql1="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number."','Student','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql1);
				
			}
			
		}
	
		$sql2="SELECT * FROM teacher";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0){
			while($row2=mysqli_fetch_assoc($result2)){
				$index_number2=$row2['index_number'];
				
				$sql3="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number2."','Teacher','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
	
		$sql4="SELECT * FROM parents";
		$result4=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result4) > 0){
			while($row4=mysqli_fetch_assoc($result4)){
				$index_number4=$row4['index_number'];
				
				$sql5="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number4."','Parents','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql5);
				
			}
			
		}
	
	}

	if($group_id == 2){
	
	include_once('../controller/config.php');
		
		$sql="SELECT * FROM student";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$index_number=$row['index_number'];
				
				$sql1="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number."','Student','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql1);
				
			}
			
		}
	
		$sql2="SELECT * FROM teacher";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0){
			while($row2=mysqli_fetch_assoc($result2)){
				$index_number2=$row2['index_number'];
				
				$sql3="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number2."','Teacher','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
	
	}	
		
	if($group_id == 3){
	
		if(isset($_POST["checkbox"])){
			for($i=0;$i<count(($_POST["checkbox"]));$i++){
			
				$classroom1=$_POST["checkbox"][$i];
				
				
				$sql="select student.index_number as std_index 
					  from student
					  inner join student_classroom
					  on student.index_number=student_classroom.index_number
					  where student_classroom.year='$year' and student_classroom.classroom_id='$classroom1'";
					  
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) > 0){
					while($row=mysqli_fetch_assoc($result)){
						$index_number=$row['std_index'];
						
						$sql1="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
							   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number."','Student','".$message."','".$date."','".$time."',0)";
					  
						mysqli_query($conn,$sql1);
						
					}
					
				}	
				
			}
		
		}
		
		
		$sql2="SELECT * FROM teacher";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0){
			while($row2=mysqli_fetch_assoc($result2)){
				$index_number2=$row2['index_number'];
				
				$sql3="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number2."','Teacher','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
		
	}

	if($group_id == 4){
	
		if(isset($_POST["checkbox"])){
			for($i=0;$i<count(($_POST["checkbox"]));$i++){
			
				$classroom1=$_POST["checkbox"][$i];
				
				
				$sql="select student.index_number as std_index 
					  from student
					  inner join student_classroom
					  on student.index_number=student_classroom.index_number
					  where student_classroom.year='$year' and student_classroom.classroom_id='$classroom1'";
					  
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) > 0){
					while($row=mysqli_fetch_assoc($result)){
						$index_number=$row['std_index'];
						
						$sql1="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
							   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number."','Student','".$message."','".$date."','".$time."',0)";
					  
						mysqli_query($conn,$sql1);
						
					}
					
				}	
				
			}
		
		}
		
	}
	
	if($group_id == 5){
		
		$sql2="SELECT * FROM teacher";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0){
			while($row2=mysqli_fetch_assoc($result2)){
				$index_number2=$row2['index_number'];
				
				$sql3="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number2."','Teacher','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
		
	}

	if($group_id == 6){
	
		$sql="SELECT * FROM student";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$index_number=$row['index_number'];
				
				$sql1="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number."','Student','".$message."','".$date."','".$time."',0)";
			  
				mysqli_query($conn,$sql1);
				
			}
			
		}	
			
	}

	if($group_id == 7){
		
		$sql4="SELECT * FROM parents";
		$result4=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result4) > 0){
			while($row4=mysqli_fetch_assoc($result4)){
				$index_number4=$row4['index_number'];
				
				$sql5="INSERT INTO chat (conversation_id,sender_index,sender_type,receiver_index,receiver_type,msg,date,time,_isread) 
					   VALUES ('".$conversation_id1."','".$my_index."','".$my_type."','".$index_number4."','Parents','".$message."','".$date."','".$time."',0)";;
			  
				mysqli_query($conn,$sql5);
				
			}
			
		}
		
		
	}

	if($my_type == "Admin"){
		header("Location: view/group_message.php?do=alert_from_insert&msg=$msg");
	}
	
	if($my_type == "Teacher"){
		
	}

}

?>