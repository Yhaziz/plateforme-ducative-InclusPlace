<?php
include_once('controller/config.php');

if(isset($_POST["do"]) && $_POST["do"] == "add_events") {
    $my_index = $_POST["my_index"];
    $my_type = $_POST["my_type"];
    $title = $_POST["title"];
    $creator_name = $_POST["creator_name"];
    $location = $_POST["location"];
    $category_id = $_POST["category"];
    $note = $_POST["note"];
    $color = $_POST["color"];
    $date_creation = $_POST["date_creation_range"];
    $start_date = $_POST["start_date_range"];
    $end_date = $_POST["end_date_range"];
    $start_time = $_POST["start_time_range"];
    $end_time = $_POST["end_time_range"];


	$note = nl2br(htmlspecialchars($note, ENT_QUOTES));

    $start_date1 = $start_date;
    $end_date1 = $end_date;

    $start_time1 = $start_time;
    $end_time1 = $end_time;

    $month1 = date('n');
    $year = date('Y');
    $date = date("Y-m-d");


    if ($month1 > 1) {
        $month1 -= 1;
    } else {
       
        $year -= 1;
        $month1 = 12;
    }

    $prefix = "";
    $classroom_id = "";
    if(isset($_POST["checkbox"])) {
        for($i = 0; $i < count($_POST["checkbox"]); $i++) {
            $classroom = $_POST["checkbox"][$i];
            $classroom_id .= $prefix . $classroom;
            $prefix = ',';
        }
    }

    $msg = 0;


    if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {

        $target_dir = "uploads/";
        $file_name = $_FILES["fileToUpload"]["name"];
        $file_size = $_FILES["fileToUpload"]["size"];
        $file_temp = $_FILES["fileToUpload"]["tmp_name"];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $filename = date("Ymjhis");
        $image_path =  $target_dir . $filename . "." . $file_type;


        $check = getimagesize($file_temp);
        if($check !== false) {

            if($file_size <= 5000000) {

                if($file_type == "jpg" || $file_type == "jpeg" || $file_type == "png") {
                    if(move_uploaded_file($file_temp, $image_path)) {

                        $sql = "INSERT INTO events (title, note, color, category_id, classroom_id, create_by, creator_name, location, creator_type, date_creation, start_date, end_date, start_time, end_time, year, month, image_name) 
                                VALUES ('$title', '$note', '$color', '$category_id', '$classroom_id', '$my_index', '$creator_name', '$location', '$my_type', '$date_creation', '$start_date1', '$end_date1', '$start_time', '$end_time1', '$year', '$month1', '$image_path')";

                        if(mysqli_query($conn, $sql)) {

                            $last_id = $conn->insert_id;
                            $sql1 = "INSERT INTO main_notifications(notification_id, _status, _isread, year, month, date) 
                                     VALUES ('$last_id', 'Events', 0, '$year', '$month1', '$date')";
                            mysqli_query($conn, $sql1);
                            $msg += 2;
                        } else {
                            $msg += 3;

                        }
                    } else {
                        $msg += 6; 
                    }
                } else {
                    $msg += 9; 
                }
            } else {
                $msg += 8; 
            }
        } else {
            $msg += 7; 
        }
    } else {
        $msg += 10; 
    }



	if($category_id == 1){
		
		include_once('../controller/config.php');
		
		$sql="SELECT * FROM student";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$index_number=$row['index_number'];
				
				$sql1="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number."','Student',0)";
			  
				mysqli_query($conn,$sql1);
				
			}
			
		}
	
		$sql2="SELECT * FROM teacher";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0){
			while($row2=mysqli_fetch_assoc($result2)){
				$index_number2=$row2['index_number'];
				
				$sql3="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number2."','Teacher',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
	
		$sql4="SELECT * FROM parents";
		$result4=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result4) > 0){
			while($row4=mysqli_fetch_assoc($result4)){
				$index_number4=$row4['index_number'];
				
				$sql5="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number4."','Parents',0)";
			  
				mysqli_query($conn,$sql5);
				
			}
			
		}
	
	}

	if($category_id == 2){
	
	include_once('../controller/config.php');
		
		$sql="SELECT * FROM student";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$index_number=$row['index_number'];
				
				$sql1="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number."','Student',0)";
			  
				mysqli_query($conn,$sql1);
				
			}
			
		}
	
		$sql2="SELECT * FROM teacher";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0){
			while($row2=mysqli_fetch_assoc($result2)){
				$index_number2=$row2['index_number'];
				
				$sql3="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number2."','Teacher',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
	
	}	
		
	if($category_id == 3){
	
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
						
						$sql1="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
							  VALUES ( '".$last_id."','".$index_number."','Student',0)";
					  
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
				
				$sql3="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number2."','Teacher',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
		
	}

	if($category_id == 4){
	
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
						
						$sql1="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
							  VALUES ( '".$last_id."','".$index_number."','Student',0)";
					  
						mysqli_query($conn,$sql1);
						
					}
					
				}	
				
			}
		
		}
		
	}
	
	if($category_id == 5){
		
		$sql2="SELECT * FROM teacher";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0){
			while($row2=mysqli_fetch_assoc($result2)){
				$index_number2=$row2['index_number'];
				
				$sql3="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number2."','Teacher',0)";
			  
				mysqli_query($conn,$sql3);
				
			}
			
		}
		
	}

	if($category_id == 6){
	
		$sql="SELECT * FROM student";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$index_number=$row['index_number'];
				
				$sql1="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number."','Student',0)";
			  
				mysqli_query($conn,$sql1);
				
			}
			
		}	
			
	}

	if($category_id == 7){
		
		$sql4="SELECT * FROM parents";
		$result4=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result4) > 0){
			while($row4=mysqli_fetch_assoc($result4)){
				$index_number4=$row4['index_number'];
				
				$sql5="INSERT INTO notification_history (notification_id,index_number,user_type,_isread) 
					  VALUES ( '".$last_id."','".$index_number4."','Parents',0)";
			  
				mysqli_query($conn,$sql5);
				
			}
			
		}
		
		
	}

	if($my_type == "Admin"){
		header("Location: view/my_events.php?do=alert_from_insert&msg=$msg");
	}
	
	if($my_type == "Teacher"){
		header("Location: view/my_events2.php?do=alert_from_insert&msg=$msg");
	}

}

?>