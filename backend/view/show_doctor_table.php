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
        	<h3 class="box-title">All doctor</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
        	<table id="example1" class="table table-bordered table-striped">
            	<thead>
                                <th>ID</th>
								<th>Cin</th>
                            	<th>Name</th>
								<th>Surname</th>
								<th>Speciality</th>
                            	<th>Gender</th>
								<th>Address</th>
								<th>téléphone</th>
                            	<th>Email</th>
                                <th>image_doctor</th>
                                <th>Action</th>
                </thead>
                <tbody>
                
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM doctor";
$result=mysqli_query($conn,$sql);
$count = 0;
$cant_remove1=0;


if(mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
	$count++;
	$id=$row['id'];
	$index=$row['index_number'];

?>   
    
               		<tr>
                    	<td><?php echo $count; ?></td>
									<td id="td1_<?php echo $row['id']; ?>"><?php echo $row['cin']; ?></td>
                                    <td id="td2_<?php echo $row['id']; ?>"><?php echo $row['fname']; ?></td>
									<td id="td3_<?php echo $row['id']; ?>"><?php echo $row['surname']; ?></td>
									<td id="td4_<?php echo $row['id']; ?>"><?php echo $row['Spec']; ?></td>
									<td id="td5_<?php echo $row['id']; ?>"><?php echo $row['gender']; ?></td>
									<td id="td6_<?php echo $row['id']; ?>"><?php echo $row['address']; ?></td>
                                    <td id="td7_<?php echo $row['id']; ?>"><?php echo $row['téléphone']; ?></td>
                                    <td id="td8_<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
									<td id="td9_<?php echo $row['id']; ?>"> <img src="../<?php echo $row['image_name']; ?>" alt="Image" style="max-width: 80px; max-height: 80px;"></td>
						<td>   
                                
<?php




if($cant_remove1 > 0){
	
	echo '<a href="#modalUpdateform" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="'.$id.'" data-toggle="modal">Edit</a>';
	
}else{
	
	echo '<a href="#modalUpdateform" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="'.$id.'" data-toggle="modal">Edit</a>';
    echo '<br>';
    echo '<br>';
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