<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php 
if(isset($_GET["do"])&&($_GET["do"]=="show_range_classroom_text")){
$id=$_GET['id'];
$count=$_GET['count'];
$range=$_GET['range'];
$classroom=$_GET['classroom'];

?>
<td  id="rangeU_td_<?php echo $count; ?>"><input type="text" value="<?php echo $range; ?>" style="width:40px;" id="rangeText_<?php echo $count; ?>"></td>
<td  id="classroomU_td_<?php echo $count; ?>"><input type="text" value="<?php echo $classroom; ?>" style="width:40px;" id="classroomText_<?php echo $count; ?>"></td>
<td id="action_<?php echo $count; ?>">
	
</td>
<?php } ?>