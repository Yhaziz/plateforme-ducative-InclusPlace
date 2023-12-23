<?php
include_once("../controller/config.php");
for($i=0;$i<count(json_decode($_GET['id']));$i++){

	$index=$_GET['index'];
	$id = json_decode($_GET['id'], true);
	
	$sql = "update student_subject set tt_id='".$id[$i]."' where index_number='$index'";
	
	if(mysqli_query($conn,$sql)){
		
	}else{
		//methana fail unoth mokada karanne and kohetada header karanne
	}
	
	echo $sql." -- 1". "<br>";

}

?>

<?php
include_once("../controller/config.php");

	$index=$_GET['index'];
	$classroom=$_GET['classroom'];

	$sql = "update student_classroom set classroom_id='".$classroom."' where index_number='$index'";
			
	if(mysqli_query($conn,$sql)){
		
	}else{
		//methana fail unoth mokada karanne and kohetada header karanne
	}
	echo $sql." -- 2". "<br>";

?>
	