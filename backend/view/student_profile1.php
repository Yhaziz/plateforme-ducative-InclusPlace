<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php
include_once('../controller/config.php');
	
$index=$_GET['std_index'];

$sql="SELECT * FROM student WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$surname=$row['surname'];
$fname=$row['fname'];
$image=$row['image_name'];
$address=$row['address'];
$gender=$row['gender'];
$téléphone=$row['téléphone'];
$email=$row['email'];

$g_name=$row['g_name'];
$g_address=$row['g_address'];
$g_email=$row['g_email'];
$g_téléphone=$row['g_téléphone'];

?>

<div class="modal msk-fade" id="modalviewStudent" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog"><!--modal-dialog -->  
		<div class="container col-lg-12 "><!--modal-content --> 
      		<div class="row">
        	<div class="col-md-12">
            	<div class="panel"><!--panel bg-maroon--> 
                	<div class="panel-heading bg-aqua-active">	
                     	<button type="button" class="close" onClick="viewAllNotifi()" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
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
                                        <tr>
                        					<td>Guardians Name</td>
                        					<td id="g_name"><?php echo $g_name; ?> </td>
                      					</tr>
                        				<tr>
                        					<td>Guardians Address</td>
                        					<td id="g_address"><?php echo $g_address; ?> </td>
                      					</tr>
                      					<tr>
                        					<td>Guardians Email</td>
                        					<td id="g_email"><?php echo $g_email; ?> </td>
                      					</tr>
                                        <tr>
                        					<td>Guardians téléphone</td>
                        					<td id="g_téléphone"><?php echo $g_téléphone; ?> </td>
                      					</tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                     </div>
                     <div class="panel-footer">
                    	<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="#modalUpdateform" onClick="showModal(this)"  data-original-title="Edit this user" id="id3"   data-toggle="modal" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a><!--MSK-00151-->
                        </span>
                    </div>
            	</div><!--/. panel--> 
        	</div>
		</div><!--/.row --> 
    	</div><!--/.modal-content -->
	</div><!--/.modal-dialog -->
</div><!--/.modal -->  