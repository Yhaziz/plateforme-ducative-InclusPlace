<?php
include_once('../controller/config.php');
$id=$_GET["id"];

$sql = "select subject_routing.id as sr_id,subject_routing.fee as s_fee, classroom.name as g_name,subject.name as s_name,teacher.surname as t_name
		from subject_routing
		inner join classroom
		on subject_routing.classroom_id=classroom.id 
		inner join subject
		on subject_routing.subject_id=subject.id 
		inner join teacher
		on subject_routing.teacher_id=teacher.id
		where subject_routing.id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$res=array($row['sr_id'],$row['g_name'],$row['s_name'],$row['t_name'],$row['s_fee']);
echo json_encode($res);

?>	