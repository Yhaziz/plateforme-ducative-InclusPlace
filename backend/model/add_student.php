<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_student")){

	$index_number = $_POST["index_number"];	
	$fname = $_POST["fname"];
	$surname= $_POST["surname"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$téléphone = $_POST["téléphone"];
	$email = $_POST["email"];
	$b_date = $_POST["b_date"];
	
	$g_index_number = $_POST["g_index"];	
	$g_fname = $_POST["g_fname"];
	$g_surname= $_POST["g_surname"];
	$g_gender = $_POST["g_gender"];
	$g_address = $_POST["g_address"];
	$g_téléphone = $_POST["g_téléphone"];
	$g_email = $_POST["g_email"];
	$g_b_date = $_POST["g_b_date"];
	
	$reg_year=date("Y");
	$reg_month=date("F");
	$reg_date=date("Y-m-d");
	
	$target_dir = "uploads/";
	$name = basename($_FILES["fileToUpload"]["name"]);
	$size = $_FILES["fileToUpload"]["size"];
	$type = $_FILES["fileToUpload"]["type"];
	$tmpname = $_FILES["fileToUpload"]["tmp_name"];

	$max = 31457280;
	$extention = strtolower(substr($name, strpos($name, ".")+ 1));
	$filename = date("Ymjhis");
	
	
	$name1 = basename($_FILES["g_fileToUpload"]["name"]);
	$size1 = $_FILES["g_fileToUpload"]["size"];
	$type1 = $_FILES["g_fileToUpload"]["type"];
	$tmpname1 = $_FILES["g_fileToUpload"]["tmp_name"];

	$max1 = 31457280;
	$extention1 = strtolower(substr($name1, strpos($name1, ".")+ 1));
	$filename1 = date("Ymjhis")+1;
	
	$msg=0;
	$g_msg=0;
	$image_path =  $target_dir.$filename.".".$extention;
	$g_image_path =  $target_dir.$filename1.".".$extention1;
	
	//Insert Student--------------------------------------------------
	
	$sql1="SELECT * FROM student where index_number='$index_number'";	
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	$index_number1=$row1['index_number'];
	
	$sql2="SELECT * FROM student where email='$email'";	
	$result2=mysqli_query($conn,$sql2);
	$row2=mysqli_fetch_assoc($result2);
	$email2=$row2['email'];
	
	if($index_number == $index_number1 ){
		
		$msg+=1;
		
		if($email == $email2){
			
			$msg+=3; 
		}

	}else if($email == $email2){
		
		
		$msg+=5;
		
	}else{
		
		if(($extention == "jpg" || $extention == "jpeg" || $extention == "png") && $size < $max){
			if(move_uploaded_file($tmpname, $image_path)){				
				

				$sql = "INSERT INTO student (index_number,fname,surname,gender,address,téléphone,email,image_name,reg_year,reg_month,reg_date,b_date)
			            VALUES ('".$index_number."','".$fname."','".$surname."','".$gender."','".$address."','".$téléphone."','".$email."','".$image_path."','".$reg_year."','".$reg_month."','".$reg_date."','".$b_date."')";

				if(mysqli_query($conn,$sql)){
					$msg+=2;  
					
					$sql3= "INSERT INTO user (email,password,type)
			                VALUES ('".$email."','12345','Student')";
					
					mysqli_query($conn,$sql3);
				}else{
					$msg+=3;  
					
				}
				
			}else{
				
				$msg+=6; 
			}
		}else{
			
			
		}
	
	}
	
	
	//Insert Parents-------------------------------------------------------------------------------------------------------------
	
	$sql4="SELECT * FROM parents where index_number='$g_index_number'";	
	$result4=mysqli_query($conn,$sql4);
	$row4=mysqli_fetch_assoc($result4);
	$index_number4=$row4['index_number'];
	
	$sql5="SELECT * FROM parents where email='$g_email'";	
	$result5=mysqli_query($conn,$sql5);
	$row5=mysqli_fetch_assoc($result5);
	$email5=$row5['email'];
	
	if($g_index_number == $index_number4 ){
		
		$g_msg+=1;
		
		if($g_email == $email5){
			
			$g_msg+=3; 
		}

	}else if($g_email == $email5){
		
		
		$g_msg+=5;
		
	}else{
		
		if(($extention1 == "jpg" || $extention1 == "jpeg" || $extention1 == "png") && $size1 < $max1){
			if(move_uploaded_file($tmpname1, $g_image_path)){				
				

				$sql6 = "INSERT INTO parents (index_number,my_son_index,fname,surname,gender,address,téléphone,email,image_name,reg_year,reg_month,reg_date,b_date)
			             VALUES ('".$g_index_number."','".$index_number."','".$g_fname."','".$g_surname."','".$g_gender."','".$g_address."','".$g_téléphone."','".$g_email."','".$g_image_path."','".$reg_year."','".$reg_month."','".$reg_date."','".$g_b_date."')";

				if(mysqli_query($conn,$sql6)){
					$g_msg+=2;  
					
					$sql7= "INSERT INTO user (email,password,type)
			                VALUES ('".$g_email."','12345','Parents')";
					
					mysqli_query($conn,$sql7);
				}else{
					$g_msg+=3;  
					
				}
				
			}else{
				
				$g_msg+=6; 
			}
		}else{
			
			
		}
	
	}
	
	header("Location: view/student.php?do=alert_from_insert&msg=$msg&index=$index_number");
	
}
?>