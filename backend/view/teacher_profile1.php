<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php
include_once('../controller/config.php');
$index=$_GET['index_number'];

$sql="SELECT * FROM teacher WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$surname=$row['surname'];
$fname=$row['fname'];
$image=$row['image_name'];
$address=$row['address'];
$gender=$row['gender'];
$téléphone=$row['téléphone'];
$email=$row['email'];

?>

<div class="modal msk-fade" id="modalviewTeacher" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog"><!--modal-dialog -->  
		<div class="container col-lg-12 "><!--modal-content --> 
      		<div class="row">
        	<div class="col-md-12">
            	<div class="panel">
                	<div class="panel-heading bg-aqua-active">	
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    	<h4 class="panel-title" id="hname"><?php echo $surname; ?></h4>
                    </div>				
                    <div class="panel-body"><!--panel-body -->
                    	<div class="row">
                			<div class="col-md-3"> 
                				<img id="photo2" alt="User Pic" src="../<?php echo $image; ?>" class="img-circle img-responsive"> 
                			</div>
                			<div class=" col-md-9"> 
                  				<table class="table table-bordered table-striped">
                    				<tbody>
                      					<tr>
                        					<td class="col-md-4">Full Name</td>
                        					<td id="fname"><?php echo $fname; ?></td>
                      					</tr>
                      					<tr>
                        					<td>Name With Initials</td>
                        					<td id="surname"><?php echo $surname; ?> </td>
                      					</tr>
                             			<tr>
                        					<td>Address</td>
                        					<td id="address"><?php echo $address; ?> </td>
                      					</tr>
                        				<tr>
                        					<td>Gender</td>
                        					<td id="gender"><?php echo $gender; ?> </td>
                      					</tr>
                      					<tr>
                        					<td>Email</td>
                        					<td id="email"><?php echo $email; ?> </td>
                      					</tr>
                                        <tr>
                        					<td>téléphone Number</td>
                        					<td id="téléphone"><?php echo $téléphone; ?> </td>
                      					</tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                     </div>
            	</div><!--/. panel--> 
        	</div>
		</div><!--/.row --> 
    	</div><!--/.modal-content -->
	</div><!--/.modal-dialog -->
</div><!--/.modal -->  