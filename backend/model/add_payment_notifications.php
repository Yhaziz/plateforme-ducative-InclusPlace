<?php
include_once('../controller/config.php');

if(isset($_GET["do"])&&($_GET["do"]=="add_payment_notifications")){

	$index_number=$_GET['index'];
	
	$current_year=date("Y");
	$current_month=date("F");
	$current_date=date("Y-m-d");
	
	$msg=0;
	
	$sql="INSERT INTO payment_notifications (index_number,year,month,date,_status) 
      	  VALUES ( '".$index_number."','".$current_year."','".$current_month."','".$current_date."',1)";
	  
	 	if(mysqli_query($conn,$sql)){
			
			$last_id = $conn->insert_id;
			
			$sql1="INSERT INTO main_notifications(notification_id,_status,_isread,year,month,date) 
     	       	   VALUES ('".$last_id."','Payments',0,'".$current_year."','".$current_month."','".$current_date."')";
		    mysqli_query($conn,$sql1);
	  		$msg+=1;  
			
			
	  	}else{
		 	$msg+=2;  
		  	
	  	}
	
	$res=array($msg);
	echo json_encode($res);

}

?>