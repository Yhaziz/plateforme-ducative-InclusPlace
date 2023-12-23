<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>

body{
	overflow-y:scroll;	
}

.msk-col-md-4{
	width:28%;
}
.modal{
	overflow-y: auto;
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.msk-set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}
.msk-image-error{
	border:1px solid #f44336;
	
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}


.modal-dialog1 {
  width: 75%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-content1 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 16%; 
}
.modal-content2 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 10%; 
}

.modal-content3 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: -31%; 
}

@media only screen and (max-width: 500px) {
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, #tableSdetails2 , #tableSdetails3{
		
		width:100%;
		
	}
	
	.panel-body, .table1-responsive, .table2-responsive {
		overflow-x:auto !important; 
	}
	
	

}

@media only screen and (max-width: 768px) {
    /* For mobile téléphones: */
    [class*="col-"] {
        width: 100%;
    }
	
	.panel-body, .table1-responsive, .table2-responsive  {
		overflow-x:auto !important; 
	}
	
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, tableSdetails2{
		
		width:100%;
		
	}
	
	
	
}

@media only screen and (max-width: 1200px) {
    /* For mobile téléphones: */
 
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	[class*="col-"] {
        width: 100%;
    }
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, tableSdetails2{
		
		width:100%;
		
	}
	
	.panel-body, .table1-responsive, .table2-responsive  {
		overflow-x:auto !important; 
	}
	
	
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	All doctor
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> All doctor</a></li>
         </ol>
     </section>

    <!-- table for view all records //MSK-00112 -->
    <section class="content" > <!-- Start of table section -->
        <div class="row" id="table1"><!-- after delete methanata thamay overite karanne view_disease table -->
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


if(mysqli_num_rows($result) > 0){
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


if($cant_remove1 > 0 ){
	
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
                	</div><!-- /.box-body -->	
                </div>
            </div>
        </div>
    </section> <!-- End of table section --> 

<!--Modal-Update form //MSK-00114-->  
<div class="modal msk-fade" id="modalUpdateform" tabindex="-1" role="dialog" aria-labelledby="modalUpdateform" aria-hidden="true">  
  		<div class="modal-dialog">
    		<div class="container">
            	<div class="row ">
            		<div class="col-md-6">
                		<div class="panel">
        					<div class="panel-heading bg-orange">               
                    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    			<h4 class="modal-title custom_align" id="Heading">Edit doctor</h4>
                			</div>
                			<form action="../index.php" method="post" enctype="multipart/form-data" id="form2">
                				<div class="panel-body"><!-- Start of the modal body--> 
								<div class="form-group" id="divCinUpdate">
                                        <label for="">Cin</label>
                                        <input class="form-control" type="text" id="cin1" name="cin" autocomplete="off">
                                    </div>
                                    <div class="form-group" id="divFnameUpdate">
                                        <label for="">Name</label>
                                        <input class="form-control" type="text" id="fname1" name="fname" autocomplete="off">
                                    </div>
                                    
                                    <div class="form-group" id="divSurnameUpdate">
                                        <label for="">surname</label>
                                        <input class="form-control " type="text" id="surname1" name="surname" autocomplete="off">
                                    </div>
									<div class="form-group" id="divEmailUpdate">
                                        <label for="">Email</label>
                                        <input class="form-control " type="text" id="email1" name="email" autocomplete="off">
                                    </div>
									<div class="form-group" id="divSpecUpdate">
                                        <label for="">Speciality</label>
                                        <input class="form-control " type="text" id="Spec1" name="Spec" autocomplete="off">
                                    </div>
									
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select class="form-control" style="width:520px;" id="gender1" name="gender">
											<option >Select Your Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="divAddressUpdate">
                                        <label for="">Address</label>
                                        <input class="form-control " type="text" id="address1" name="address" autocomplete="off">
                                    </div>
                                    
                                    <div class="form-group" id="divtéléphoneUpdate">
                                        <label for="">téléphone Number</label>
                                        <input class="form-control" type="text" id="téléphone1" name="téléphone" autocomplete="off">
                                    </div>
                                   
                                    <div class="form-group" id="divPhotoUpdate">
                                        <label for="">Photo</label>
                                    </div>
                                    <div class="form-group"  id="divPhotoUpdate1">
                                        <img id="output1" style="width:130px;height:150px;" src="" />
                                        <input type="file" name="fileToUpload" id="fileToUpload1"  style="margin-top:7px; "  />
                                    </div>
                				</div><!--/.modal body-->
                                <div class="panel-footer bg-gray-light">
                                    <input type="hidden" id="c_page"  name="c_page" value="" />
                                    <input type="hidden" id="id1"  name="id" value="" />
                                    <input type="hidden" name="do" value="update_doctor">
                                    <button type="submit" class="btn btn-info" id="btnSubmit1" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                            	</div><!--/.panel-footer-->
                        	</form> 
            			</div><!--/.panel--> 
            		</div><!--/.col-md-6-->
            	</div><!--/.row-->                                    
        	</div><!-- /.modal-content -->  		 
  		</div><!-- /.modal-dialog -->        
	</div><!--/.Modal-Update form -->   

<script>

function showModal(Updateform){
//MSK-00115 
	$('#modalViewform').modal('hide');
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var Id = $(Updateform).data("id"); 
	var path = "../"; 
	
	var xhttp = new XMLHttpRequest();//MSK-00116-Ajax Start
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
				
				var myArray1 = eval( xhttp.responseText );
				var imagePath = path.concat(myArray1[9]);
			
				//MSK-00118
				document.getElementById("id1").value =myArray1[0];
				document.getElementById("cin1").value =myArray1[1];
				document.getElementById("fname1").value =myArray1[2];
				document.getElementById("surname1").value =myArray1[3];
                document.getElementById("gender1").value =myArray1[4];
				document.getElementById("address1").value =myArray1[5];
				document.getElementById("téléphone1").value =myArray1[6];
				document.getElementById("email1").value =myArray1[7];
				document.getElementById("Spec1").value =myArray1[8];
				document.getElementById("output1").src ='../'+myArray1[9];
				document.getElementById("c_page").value =currentPage;
				
				var telformat = /\d{3}[\-]\d{3}[\-]\d{4}$/;
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				
				$("#téléphone1" ).keydown(function(){//MSK-00119-téléphone
					
					var beforeValue = $(this);// this is the value before the keypress
					
    				setTimeout(function() {
        				
        				var afterValue = beforeValue.val();// this is the value after the keypress
						var mom = $('#divtéléphoneUpdate');
						
						if (telformat.test(afterValue) == false){
							//MSK-00120-téléphone
							$("#btnSubmit1").attr("disabled", true);
							mom.removeClass('has-success has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-error has-feedback');
							mom.append('<span id="spantéléphoneUpdate" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip" title="Enter valid téléphone number" ></span>');	
							
						}else{
							//MSK-00121-téléphone
							$("#btnSubmit1").attr("disabled", false);
							mom.removeClass('has-error has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-success has-feedback');
							mom.append('<span id="spantéléphoneUpdate" class="glyphicon glyphicon-ok form-control-feedback" ></span>');	
						}
				
    				}, 0);

				
				});	
				
				$("#email1" ).keydown(function(){//MSK-00119-email
					
					var beforeValue = $(this);// this is the value before the keypress
					
    				setTimeout(function() {
        				
        				var afterValue = beforeValue.val();// this is the value after the keypress
						var mom = $('#divEmailUpdate');
						
						if (mailformat.test(afterValue) == false){
							//MSK-00120-email
							$("#btnSubmit1").attr("disabled", true);
							mom.removeClass('has-success has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-error has-feedback');
							mom.append('<span id="spanEmailUpdate" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip" title="Enter valid email address" ></span>');	
							
						}else{
							//MSK-00121-email
							$("#btnSubmit1").attr("disabled", false);
							mom.removeClass('has-error has-feedback');
							mom.children("span").remove();
							
							mom.addClass('has-success has-feedback');
							mom.append('<span id="spanEmailUpdate" class="glyphicon glyphicon-ok form-control-feedback" ></span>');	
						}
				
    				}, 0);

				
				});	
				
				$('[type="file"]').change(function () {
					//MSK-00119-photo
					var fileSize = this.files[0].size;	
					var maxSize = 1000000;// bytes
					var ext = $('#fileToUpload1').val().split('.').pop().toLowerCase();
										
						if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
    						//MSK-00120-photo
							
							output1.src="../uploads/error.png";
							
							$("#btnSubmit1").attr("disabled", true);
							$('#divPhotoUpdate1').addClass('has-error has-feedback msk-col-md-4');
							$('#divPhotoUpdate1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="This file type is not allowed" ></span>');
														
						}else{
							
							if(fileSize > maxSize) {
								//MSK-00121-photo
								output1.src="../uploads/error.png";
								
								$("#btnSubmit1").attr("disabled", true);
								$('#divPhotoUpdate1').addClass('has-error has-feedback msk-col-md-4');	
								$('#divPhotoUpdate1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The image size is too large" ></span>');		
							
							}else{
								//MSK-00122-photo 
								output1.src = URL.createObjectURL(this.files[0]);
								
								$("#btnSubmit1").attr("disabled", false);	
								$('#divPhotoUpdate1').removeClass('has-error has-feedback msk-col-md-4');
								$('#spanPhoto').remove();
	   
							}
						}
					});
    		}
			
  		};	
		
    	xhttp.open("GET", "../model/get_doctor.php?id=" + Id , true);//MSK-00116-Ajax End											
  		xhttp.send();
	 
};

$("#form2").submit(function(e){
//MSK-000098-form2 submit

	var Id1 = document.getElementById('id1').value;
	var cin1 = document.getElementById('cin1').value;
	var fname = document.getElementById("fname1").value;
	var surname = document.getElementById("surname1").value;
	var Spec = document.getElementById("Spec1").value;
	var address = document.getElementById("address1").value;	
	var gender = document.getElementById("gender1").value;
	var téléphone = document.getElementById("téléphone1").value;
	var email = document.getElementById("email1").value;
	var photo = document.getElementById("output1").src;

	if(fname == ''){
		//MSK-00123-fname 
		$('#divFnameUpdate').addClass('has-error has-feedback');
		$('#divFnameUpdate').append('<span class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The Fname is required" ></span>');
			
		$("#fname1").keydown(function(){
			//MSK-00124-fname 
			$("#btnSubmit1").attr("disabled",false);
			$('#divFnameUpdate').removeClass('has-error has-feedback');
			$('#divFnameUpdate').children("span").remove();
			
		});
		
	}else{
			
	}
	if(cin == ''){
		//MSK-00123-cin
		$('#divCinUpdate').addClass('has-error has-feedback');
		$('#divCinUpdate').append('<span class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The cin is required" ></span>');
		
		$("#cin1").keydown(function(){
			//MSK-00124-cin 
			$("#btnSubmit1").attr("disabled",false);
			$('#divCinUpdate').removeClass('has-error has-feedback');
			$('#divCinUpdate').children("span").remove();
			
		});
		
	}else{
			
	}
	if(surname == ''){
		//MSK-00123-surname 
		$('#divSurnameUpdate').addClass('has-error has-feedback');
		$('#divSurnameUpdate').append('<span class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The initials name is required" ></span>');
		
		$("#surname1").keydown(function(){
			//MSK-00124-surname 
			$("#btnSubmit1").attr("disabled",false);
			$('#divSurnameUpdate').removeClass('has-error has-feedback');
			$('#divSurnameUpdate').children("span").remove();
			
		});
		
	}else{
			
	}
	if(Spec == ''){
		//MSK-00123-Spec 
		$('#divSpecUpdate').addClass('has-error has-feedback');
		$('#divSpecUpdate').append('<span class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The initials name is required" ></span>');
		
		$("#Spec1").keydown(function(){
			//MSK-00124-Spec 
			$("#btnSubmit1").attr("disabled",false);
			$('#divSpecUpdate').removeClass('has-error has-feedback');
			$('#divSpecUpdate').children("span").remove();
			
		});
		
	}else{
			
	}
	
	if(address == ''){
		//MSK-00123-address
		$('#divAddressUpdate').addClass('has-error has-feedback');
		$('#divAddressUpdate').append('<span class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The address is required" ></span>');
		
		$("#address1").keydown(function(){
			//MSK-00124-address
			$("#btnSubmit1").attr("disabled",false);
			$('#divAddressUpdate').removeClass('has-error has-feedback');
			$('#divAddressUpdate').children("span").remove();
			
		});
		
	}else{
			
	}
	
	var telformat = /\d{3}[\-]\d{3}[\-]\d{4}$/;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if(cin=='' || fname == '' || surname == '' ||Spec == '' || address == '' || téléphone == '' || email == '' || gname == '' || gaddress == '' || gtéléphone == '' || gemail == '' ||telformat.test(téléphone) == false || mailformat.test(email) == false ){
		//MSK-000098- form2 validation failed
		$("#btnSubmit1").attr("disabled", true);
		e.preventDefault();
		return false;
		
	}else{
		$("#btnSubmit1").attr("disabled", false);
		//return true;
	}
});

//MSK-000125
function cTablePage(page){
	
	var currentPage1 = (page-1)*10;
	
	$(function(){
		$("#example1").DataTable({
			"displayStart": currentPage1,    
			"bDestroy": true       
   		});
						
	});
					  
	window.scrollTo(0,document.body.scrollHeight);
	
};

</script> 

<!--run update alert using PHP & JS/JQUERY  -->    
<?php
// MSK-000143-24-PHP-JS-UPDATE
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_update")){
  
$msg=$_GET['msg'];
$page=$_GET['page'];

	if($msg==1){
		
		echo '<script>','cTablePage('.$page.');','</script>';
		echo"
				<script>
				
				var myModal = $('#update_Success');
				myModal.modal('show');
				
				myModal.data('hideInterval', setTimeout(function(){
					myModal.modal('hide');
				}, 3000));
							
				</script>
			";
		 
	}
	
	if($msg==2){
		
		echo '<script>','cTablePage('.$page.');','</script>';
		echo"
				<script>
				
				var myModal = $('#connection_Problem');
				myModal.modal('show');
				
				myModal.data('hideInterval', setTimeout(function(){
					myModal.modal('hide');
				}, 3000));
							
				</script>
			";
		 
	}
	
	if($msg==3){
		
		echo '<script>','cTablePage('.$page.');','</script>';
		echo"
				<script>
				
				var myModal = $('#upload_error1');
				myModal.modal('show');
				
				myModal.data('hideInterval', setTimeout(function(){
					myModal.modal('hide');
				}, 3000));
							
				</script>
			";
		
	}
	
	if($msg==4){
		
		echo '<script>','cTablePage('.$page.');','</script>';
		echo"
				<script>
				
				var myModal = $('#update_error1');
				myModal.modal('show');
				
				myModal.data('hideInterval', setTimeout(function(){
					myModal.modal('hide');
				}, 3000));
							
				</script>
			";
		 
	}
	
	if($msg==5){
		
		echo '<script>','cTablePage('.$page.');','</script>';
		echo"
				<script>
				
				var myModal = $('#email_Duplicated');
				myModal.modal('show');
				
				myModal.data('hideInterval', setTimeout(function(){
					myModal.modal('hide');
				}, 3000));
							
				</script>
			";
		 
	}
	
}
?>


<!-- Modal-Delete Confirm Popup //MSK-000129 -->
	<div class="modal msk-fade " id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete</h4>
      			</div>

				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to Delete this Record
        		</div>
      			<div class="modal-footer">
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000130 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>


<script>
//MSK-000127
$('body').on('click', '.confirm-delete', function (e){
	e.preventDefault();
    var id = $(this).data('id');
	$('#modalViewform').modal('hide');
	$('#deleteConfirm').data('id1', id).modal('show');//MSK-000128
});

$('#btnYes').click(function() {
//MSK-000131  
  
    var id = $('#deleteConfirm').data('id1');	
	var do1 = "delete_record";
	var table_name="doctor";	
		
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-000132-Ajax Start  

  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200){//MSK-000134
				
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){//MSK-000135
					
					$("#deleteConfirm").modal('hide');	        		
					var page = myArray[1];
				
					var xhttp1 = new XMLHttpRequest();//MSK-000136-Start Ajax  
						xhttp1.onreadystatechange = function(){		
				
							if (this.readyState == 4 && this.status == 200) {
										
								document.getElementById('table1').innerHTML = this.responseText;//MSK-000137
								cTablePage(page);//MSK-000138
								Delete_alert(myArray[0]);//MSK-000139	
							
							}
								
						}
						xhttp1.open("GET", "show_doctor_table.php" , true);												
  						xhttp1.send(); //MSK-000136-End Ajax
				
				}
		
				if(myArray[0]==2){//MSK-000140
					
					$("#deleteConfirm").modal('hide');
					Delete_alert(myArray[0]);//MSK-000141
				
				}


    		}
			
  		};
			
    	xhttp.open("GET", "../model/delete_record.php?id=" + id + "&do="+do1 + "&table_name="+table_name  + "&page="+currentPage , true);												
  		xhttp.send();//MSK-000133-Ajax End
	 			   		
});

function Delete_alert(msg){
//MSK-000142	
	if(msg==1){
		
    	var myModal = $('#delete_Success');
		myModal.modal('show');
		
		clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
			
    	}, 3000));
			
	}
	
	if(msg==2){
		
    	var myModal = $('#connection_Problem');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
    	}, 3000));
				
	}

};	

</script>
               
<!-- Modal-View form //MSK-00148 --> 
	<div class="modal msk-fade" id="modalViewform" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog"><!--modal-dialog -->  
			<div class="container col-lg-12 "><!--modal-content --> 
      			<div class="row">
                    <div class="panel panel-info"><!--panel --> 
                        <div class="panel-heading">
                        	 <button type="button"  class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h3 class="panel-title" id="hname"></h3>
                        </div>
                        <div class="panel-body"><!--panel-body -->
                            <div class="row">
                                <div class="col-md-3"> 
                                	<img id="photo2" alt="User Pic" src="" class="img-circle img-responsive"> 
                                </div>
                                <div class=" col-md-9"> 
                                    <table class="table table-user-information">
                                        <tbody>
										<tr>
                                                <td>Cin</td>
                                                <td id="cin2"> </td>
                                            </tr>
                                            <tr>
                                                <td>Fname</td>
                                                <td id="fname2"> </td>
                                            </tr>
                                            <tr>
                                                <td>Surname</td>
                                                <td id="surname2"> </td>
                                            </tr>
											<tr>
                                                <td>Spec</td>
                                                <td id="spec2"> </td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td id="address2"> </td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td id="gender2"> </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td id="email2"> </td>
                                            </tr>
                                            <tr>
                                                <td>téléphone Number</td>
                                                <td id="téléphone2"> </td>
                                            </tr>
                                             <tr>
                                                <td>Register Date:</td>
                                                <td id="reg_date"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--/.panel-body -->
                        <div class="panel-footer text-right"><!-- panel-footer-->
           <!--MSK-00151--><a href="#modalUpdateform" onClick="showModal(this)"  data-original-title="Edit this user" id="id_Edit"   data-toggle="modal" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
           <!--MSK-00152--><a href="#" data-original-title="Remove this user" id="id_Delete"  data-toggle="modal" type="button" class="confirm-delete btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                           <span class="pull-right"> </span>
                        </div><!--/. panel-footer-->
                   </div><!--/. panel--> 
                </div><!--/.row --> 
            </div><!--/.modal-content -->
        </div><!--/.modal-dialog -->
    </div><!--/.modal -->      
<script>
//MSK-00147
function showModal1(Viewform){
	var Id = $(Viewform).data("id"); 
	var path = "../"; 
	
	var xhttp = new XMLHttpRequest();//MSK-00149-Start Ajax  
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-00150
				var myArray1 = eval( xhttp.responseText );
				document.getElementById("cin2").innerHTML =myArray1[1];
				document.getElementById("fname2").innerHTML =myArray1[2];
				document.getElementById("surname2").innerHTML =myArray1[3];
				document.getElementById("hname").innerHTML =myArray1[4];
				document.getElementById("address2").innerHTML =myArray1[5];
				document.getElementById("gender2").innerHTML =myArray1[6];
				document.getElementById("téléphone2").innerHTML =myArray1[7];
				document.getElementById("email2").innerHTML =myArray1[8];
				document.getElementById("photo2").src ="../"+myArray1[9];	
				document.getElementById("reg_date").innerHTML =myArray1[10];
				
				$('#id_Edit').data('id',myArray1[0]);
				$('#id_Delete').data('id',myArray1[0]);
			
    		}
			
  		};	
		
    xhttp.open("GET", "../model/get_doctor.php?id=" + Id , true);												
  	xhttp.send();//MSK-00149--End Ajax
	 
};
  


function scrollDown(){
	
	window.scrollTo(0,document.body.scrollHeight);
}

</script>


<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>
  	 	
</div><!-- /.content-wrapper -->  
                             
<?php include_once('footer.php');?>