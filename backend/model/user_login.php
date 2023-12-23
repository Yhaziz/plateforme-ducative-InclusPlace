<?php
session_start();
include_once('controller/config.php');
if(isset($_POST["do"]) && ($_POST["do"] == "user_login")) {

    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $keyadmin = $_POST["keyadmin"];

    $sql = "SELECT * FROM user WHERE email='$email'";    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ($row) { 
        $email1 = $row['email'];
        $password1 = $row['password'];
        $type = $row['type'];
        
        $msg = 0;
        
     if ($email == $email1 && $password == $password1) {
            if ($type == "Admin") {
                
                $sql1 = "SELECT * FROM admin WHERE email='$email'";
                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1);

                if ($row1) {
                    $keyadmin1 = $row1['keyadmin'];
                    if ($keyadmin == $keyadmin1) {
                        $index_number = $row1['index_number'];
                        $_SESSION["index_number"] = $index_number;
                        $_SESSION["type"] = "Admin";
                        header("Location: view/dashboard.php");
                    } else {
                        $msg += 1; // Keyadmin is incorrect
                        header("Location: view/login.php?do=login_error&msg=$msg");
                    }
                } else {
                    $msg += 1; // Admin with provided email doesn't exist
                    header("Location: view/login.php?do=login_error&msg=$msg");
                }
            } else {
                $msg += 1; // Incorrect User Type
                header("Location: view/login.php?do=login_error&msg=$msg");
            }
        } else {
            $msg += 1; // Email or Password is incorrect
            header("Location: view/login.php?do=login_error&msg=$msg");
        }
    } else {
        $msg += 1; // User with provided email doesn't exist
        header("Location: view/login.php?do=login_error&msg=$msg");
    }

	
	if($email==$email1 && $password==$password1){
		if($type == "Student"){
			$msg = "Yes he is Student";
			
			$sql1="SELECT * FROM student where email='$email'";	
			$result1=mysqli_query($conn,$sql1);
			$row1=mysqli_fetch_assoc($result1);
	
			$index_number=$row1['index_number'];
			$_SESSION["index_number"]=$index_number;
			$_SESSION["type"]="Student";
			header("Location: view/dashboard1.php");
		}
		
		if($type == "Teacher"){
			$msg ;//
			
			$sql1="SELECT * FROM teacher where email='$email'";	
			$result1=mysqli_query($conn,$sql1);
			$row1=mysqli_fetch_assoc($result1);
	
			$index_number=$row1['index_number'];
			$_SESSION["index_number"]=$index_number;
			$_SESSION["type"]="Teacher";
			header("Location: view/dashboard2.php");
		}
		
		
		if($type == "Parents"){
			
			$sql1="SELECT * FROM parents WHERE email='$email'";	
			$result1=mysqli_query($conn,$sql1);
			$row1=mysqli_fetch_assoc($result1);
	
			$index_number=$row1['index_number'];
			$_SESSION["index_number"]=$index_number;
			$_SESSION["type"]="Parents";
			header("Location: view/dashboard3.php");
		}


        if($type == "Avs"){
			$msg ;//
			
			$sql1="SELECT * FROM avs where email='$email'";	
			$result1=mysqli_query($conn,$sql1);
			$row1=mysqli_fetch_assoc($result1);
	
			$index_number=$row1['index_number'];
			$_SESSION["index_number"]=$index_number;
			$_SESSION["type"]="Avs";
			header("Location: view/dashboard4.php");
		}
	}else{
		$msg+=1;//Email or Password is incorrect
		header("Location: ../frontend/login.php");
		
	}
	
	echo $_SESSION["index_number"];
	echo $_SESSION["type"];


}
?>

