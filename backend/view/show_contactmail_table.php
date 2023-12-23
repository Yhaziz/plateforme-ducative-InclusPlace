<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<div class="col-md-8">
	<div class="box">
    	<div class="box-header">
        	<h3 class="box-title">Contact Me</h3>
        </div>
        <div class="box-body table-responsive">
        	<table id="example1" class="table table-bordered table-striped">
            	<thead>
                                <th>ID</th>
                            	<th>fname</th>
								<th>email</th>
                            	<th>téléphone</th>
								<th>sujet</th>
								<th>message</th>
                            	<th>Action</th>
                </thead>
                <tbody>
                
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM contact_me";
$result=mysqli_query($conn,$sql);
$count = 0;
$cant_remove1=0;


if(mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
	$count++;
	$id=$row['id'];


?>   
    
               		<tr>
                    	<td><?php echo $count; ?></td>
                                    <td id="td1_<?php echo $row['id']; ?>"><?php echo $row['fname']; ?></td>
									<td id="td2_<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
									<td id="td3_<?php echo $row['id']; ?>"><?php echo $row['téléphone']; ?></td>
									<td id="td4_<?php echo $row['id']; ?>"><?php echo $row['sujet']; ?></td>
									<td id="td5_<?php echo $row['id']; ?>"><?php echo $row['message']; ?></td>
						<td>   
                                
<?php




if($cant_remove1 > 0){
	
	echo ' <a href="#" class="confirm-delete btn btn-danger btn-xs"  data-id="'.$id.'">Delete</a>';
	
}

?>                                 
  
						</td>
					</tr>

<?php } } ?>
				</tbody>
			</table>	
		</div>
	</div>
</div>