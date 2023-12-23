<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_school")){

	$index_number = $_POST["index_number"];	
	$fname = $_POST["fname"];
	$address = $_POST["address"];
    $email = $_POST["email"];
	$téléphone = $_POST["téléphone"];
	
	$current_date=date("Y-m-d");
	
	$target_dir = "uploads/";
	$name = basename($_FILES["fileToUpload"]["name"]);
	$size = $_FILES["fileToUpload"]["size"];
	$type = $_FILES["fileToUpload"]["type"];
	$tmpname = $_FILES["fileToUpload"]["tmp_name"];
	
	$max = 31457280;
	$extention = strtolower(substr($name, strpos($name, ".")+ 1));
	$filename = date("Ymjhis");
	
	$sql1="SELECT * FROM school where index_number='$index_number'";	
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	$index_number1=$row1['index_number'];
	
	$sql2="SELECT * FROM school where email='$email'";	
	$result2=mysqli_query($conn,$sql2);
	$row2=mysqli_fetch_assoc($result2);
	$email2=$row2['email'];
	
	$msg=0;
	$image_path =  $target_dir.$filename.".".$extention;

	if($index_number == $index_number1 ){
		
		$msg+=1;
		
		if($email == $email2){
		
		}

	}else if($email == $email2){
		
		
		$msg+=5;
		
	}else{

	 	if(($extention == "jpg" || $extention == "jpeg" || $extention == "png") && $size < $max){
		 	if(move_uploaded_file($tmpname, $image_path)){
			
				
				$sql = "INSERT INTO school (index_number,fname,address,email,téléphone,image_name,reg_date)
			            VALUES ('".$index_number."','".$fname."','".$address."','".$email."','".$téléphone."','".$image_path.                        "','".$current_date."')";
				if(mysqli_query($conn,$sql)){
					$msg+=2;  
			
				}else{
					$msg+=3;  
					
				}
	
			}else{
				
				$msg+=6;  
			}

		}else{
			
		}
	}
	header("Location: view/school.php?do=alert_from_insert&msg=$msg");
}
?>