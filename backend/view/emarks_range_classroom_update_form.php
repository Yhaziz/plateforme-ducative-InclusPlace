<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    
    header('location:../index.php');
    exit;
}
?>

<div class="modal msk-fade" id="modalUpdateform1" tabindex="-1" role="dialog" aria-labelledby="modalInsertform" aria-hidden="true">  
  	<div class="modal-dialog ">
    	
    	<div class="container modal-content1 ">
      		<div class="row ">	
           		<div class="col-md-3">
            		<div class="panel panel-primary">
        				<div class="panel-heading">               
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
<?php

include_once('../controller/config.php');
$classroom_id=$_GET['classroom'];
$page=$_GET['page'];

$sql="SELECT * FROM classroom where id='$classroom_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
?>                             
          					<h3 class="panel-title"><?php echo $name; ?> Exam Routing</h3>
   						</div>
            			<div class="panel-body">
                            
 							<a href="#" style="float:right;" onClick="showeMark('<?php echo $classroom_id; ?>','<?php echo $page; ?>')" class="btn btn-success btn-xs text-right">Add eMark</a><br>
                            <div class="form-group">
                            	<table id="tableU_mark_range" class="table">
                                	<thead>
                                    	<th class="col-md-1">Range</th>
                                        <th class="col-md-1">Classroom</th>
                                        <th class="col-md-1">Action</th>
                                    </thead>	
                                    <tbody class="tBodyU">
<?php

include_once('../controller/config.php');
$classroom_id=$_GET['classroom'];

$count=0;
$sql="SELECT * FROM exam_range_classroom WHERE classroom_id='$classroom_id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
		$count++;
?>                                        
                                    	<tr id="trU_<?php echo $count; ?>">
                                        	<td  id="rangeU_td_<?php echo $count; ?>"><?php echo $row['mark_range']; ?></td>
                                            <td  id="classroomU_td_<?php echo $count; ?>"><?php echo $row['mark_classroom']; ?></td>
                                            <td id="action_<?php echo $count; ?>">
                                            	<a href="#" id="edit_RG_<?php echo $count; ?>" onClick="editRangeClassroom(this)" data-id="<?php echo $row['id']; ?>,<?php echo $count; ?>" class="label-warning "><span class="glyphicon glyphicon-edit "></span></a>
                                  <a href="#" id="delete_RG_<?php echo $count; ?>" class="confirm-delete-RG label-danger" data-id="<?php echo $row['id']; ?>" class="label-warning "><span class="glyphicon glyphicon-remove "></span></a>
                                     		</td>
                                        </tr>
<?php }} ?> 
                                    </tbody>
                                 </table>
                            </div>        
            			</div>
            			<div class="panel-footer bg-blue-active">
                        
             			</div>
      				</div>
         		</div>
            </div>
        </div>
  	</div>
</div>

