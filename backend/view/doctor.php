<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>

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

@media only screen and (max-width: 500px) {
	
	#divGender1, #divtéléphone1, #divEmail1{
		
	 	width:75%;
		
	}

}

</style>



<div class="content-wrapper">
	
    <section class="content-header">
    	<h1>
        	Doctor
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">doctor</a></li>
         </ol>
     </section>

    
    <section class="content">
        <div class="row" id="test123">
            
            <div class="col-md-7">
                
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Doctor</h3>
                    </div>
                    
                    <form role="form" action="../index.php" method="post"  enctype="multipart/form-data" id="form1" class="form-horizontal" >
					<div class="box-body" >
                        	<div class="form-group" id="divIndexNumber">
                                <div class="col-xs-3">
                                    <label>Index Number</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Enter index number" name="index_number" id="index_number" autocomplete="off" >  
                                </div>                    
                            </div>
							<div class="form-group" id="divCin">
                                <div class="col-xs-3">
                                    <label>Cin</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Enter cin" name="cin" id="cin" autocomplete="off">  
                                </div>                    
                            </div>
                            <div class="form-group" id="divFname">
                                <div class="col-xs-3">
                                    <label>Name</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Enter name" name="fname" id="fname" autocomplete="off">  
                                </div>                    
                            </div>
                            <div class="form-group" id="divSurname" >
                                <div class="col-xs-3">
                                    <label>Surname</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Enter Surname" name="surname" id="surname" autocomplete="off">
                                </div>
                            </div>
							<div class="form-group tt2 " id="divEmail">
                                <div class="col-xs-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-xs-9" id="divEmail1">
                                    <input type="text" class="form-control"  placeholder="Enter valid email address" name="email" id="email" autocomplete="off">
                                </div>
                            </div>
							<div class="form-group" id="divSpec" >
                                <div class="col-xs-3">
                                    <label>specialist doctor</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Enter Your specialty " name="Spec" id="Spec" autocomplete="off">
                                </div>
                            </div>
							<div class="form-group" id="divGender">
                                <div class="col-xs-3">
                                    <label>Gender</label>
                                </div>
                                <div class="col-xs-9" id="divGender1">
                                    <select name="gender" class="form-control" id="gender" >
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group" id="divAddress" >
                                <div class="col-xs-3" >
                                    <label>Address</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Enter address" name="address" id="address" autocomplete="off"> 
                                </div>                     
                            </div>
                            
                            <div class="form-group" id="divtéléphone">
                                <div class="col-xs-3">
                                    <label>téléphone Number </label>
                                </div>
                                <div class="col-xs-9" id="divtéléphone1">
                                    <input type="tel" class="form-control" placeholder="+216 XX XXX XXX" name="téléphone" id="téléphone" autocomplete="off">
                                </div>
                            </div>
                           
                            <div class="form-group" id="divPhoto">
                                <div class="col-xs-3">
                                    <label>Photo</label>
                                </div>                            
                                <div class="col-xs-3" id="divPhoto1" style="height:150px;">
                                    <img id="output" style="width:130px;height:150px;" />
                                    <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;"  />
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="do" value="add_doctor"  />
                            <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    

<script>

$('[type="file"]').change(function (){
	
	
	var fileSize = this.files[0].size;	
    var maxSize = 1000000;
	var ext = $('#fileToUpload').val().split('.').pop().toLowerCase();
	var imageNoError = 0;
	
	if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
		
		output.src="../uploads/error.png";
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"                                title="The file type is not allowed" ></span>');
		
	}else{

		if(fileSize > maxSize) {
			
			output.src="../uploads/error.png";
			$("#btnSubmit").attr("disabled", true);
			$('#divPhoto').addClass('has-error');
			$('#divPhoto1').addClass('has-feedback');	
			$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The file size is too large" ></span>');		
			
					
		}else{
			
			output.src = URL.createObjectURL(this.files[0]);	
			$("#btnSubmit").attr("disabled", false);	
			$('#divPhoto').removeClass('has-error');
			$('#spanPhoto').remove();
			
		}
	}
});

$("#form1").submit(function (e) {
	

	var index_number = $('#index_number').val();
	var cin = $('#cin').val();	
	var fname = $('#fname').val();	
	var surname = $('#surname').val();
	var gender = $('#gender').val();	
	var téléphone = $('#téléphone').val();
	var email = $('#email').val();	
	var Spec = $('#Spec').val();
	var photo = $('#fileToUpload').val();
	var address = $('#address').val();

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
	var imageNoError= 0;
	
	if(index_number == ''){
		
		$("#btnSubmit").attr("disabled", true);
		$('#divIndexNumber').addClass('has-error has-feedback');
		$('#divIndexNumber').append('<span id="spanIndexNumber" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip"   	data-toggle="tooltip"    title="The index number is required" ></span>');	
			
		$("#index_number").keydown(function(){
			
			$("#btnSubmit").attr("disabled",false);	
			$('#divIndexNumber').removeClass('has-error has-feedback');
			$('#spanIndexNumber').remove();
			
		});

	}else{
		
	}
	if(cin == ''){
		
		$('#divCin').addClass('has-error has-feedback');
		$('#divCin').append('<span class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The cin is required" ></span>');
		
		$("#cin").keydown(function(){
			
			$("#btnSubmit").attr("disabled",false);
			$('#divCin').removeClass('has-error has-feedback');
			$('#divCin').children("span").remove();
			
		});
		
	}else{
			
	}

	if(fname == ''){
		
		$("#btnSubmit").attr("disabled", true);
		$('#divFname').addClass('has-error has-feedback');
		$('#divFname').append('<span id="spanFname" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The name is required" ></span>');	
			
		$("#fname").keydown(function(){
			
			$("#btnSubmit").attr("disabled",false);	
			$('#divFname').removeClass('has-error has-feedback');
			$('#spanFname').remove();
			
		});

	}else{
		
	}

	if(Spec == ''){
		
		$("#btnSubmit").attr("disabled",true);
		$('#divSpec').addClass('has-error has-feedback');
		$('#divSpec').append('<span id="spanSpec" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The initials name is required" ></span>');	
		
		$("#Spec").keydown(function(){
			
			$("#btnSubmit").attr("disabled",false);	
			$('#divSpec').removeClass('has-error has-feedback');
			$('#spanSpec').remove();
			
		});
	
	}else{
		
	}

	if(surname == ''){
		
		$("#btnSubmit").attr("disabled",true);
		$('#divSurname').addClass('has-error has-feedback');
		$('#divSurname').append('<span id="spanSurname" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The initials name is required" ></span>');	
		
		$("#surname").keydown(function(){
			
			$("#btnSubmit").attr("disabled",false);	
			$('#divSurname').removeClass('has-error has-feedback');
			$('#spanSurname').remove();
			
		});
	
	}else{
		
	}

	if(address == ''){
		
		$("#btnSubmit").attr("disabled",true);
		$('#divAddress').addClass('has-error has-feedback');
		$('#divAddress').append('<span id="spanAddress" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The address is required" ></span>');	
		
		$("#address").keydown(function() {
			
			$("#btnSubmit").attr("disabled", false);	
			$('#divAddress').removeClass('has-error has-feedback');
			$('#spanAddress').remove();
			
		});
	
	}else{
		
	}
	
	if(gender == 'Select Gender'){
		
		$("#btnSubmit").attr("disabled", true);
		$('#divGender').addClass('has-error has-feedback');
		$('#divGender1').append('<span id="spanGender" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The gender is required" ></span>');	
		
		$("#gender").change(function() {
			
			$("#btnSubmit").attr("disabled", false);	
			$('#divGender').removeClass('has-error has-feedback');
			$('#spanGender').remove();
			
		});
	
	}else{
		
	}

	if(téléphone == ''){
  		
		$('#divtéléphone').addClass('has-error has-feedback');
		$('#divtéléphone1').append('<span id="spantéléphone" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The téléphone number is required" ></span>');	
	 		
		$( "#téléphone" ).keydown(function() {
			
			$("#btnSubmit").attr("disabled", false);	
			$('#divtéléphone').removeClass('has-error has-feedback');
			$('#spantéléphone').remove();
			
		});
	
	}else{
		if (telformat.test(téléphone) == false){ 
			
			$('#divtéléphone').addClass('has-error has-feedback');
			$('#divtéléphone1').append('<span id="spantéléphone" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid téléphone number" ></span>');
		
			$("#téléphone" ).keydown(function(){
				
				var $field = $(this);
    			var beforeVal = $field.val();

    			setTimeout(function() {

        			var afterVal = $field.val();
				
					if (telformat.test(afterVal) == true){
						
						$("#btnSubmit").attr("disabled", false);
						$('#divtéléphone').removeClass('has-error has-feedback');
						$('#spantéléphone').remove();
						$('#divtéléphone').addClass('has-success has-feedback');
						$('#divtéléphone1').append('<span id="spantéléphone" class="glyphicon glyphicon-ok form-control-feedback"></span>');
						
					}else{
						
						$("#btnSubmit").attr("disabled", true);
						$('#spantéléphone').remove();
						$('#divtéléphone').addClass('has-error has-feedback');
						$('#divtéléphone1').append('<span id="spantéléphone" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
							
					}
				
    			}, 0);
				 	
			});
		
    	}else{
		
		}
		  
	}
	
	if(email == ''){
   		
		$('#divEmail').addClass('has-error has-feedback');
		$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The email address is required" ></span>');	
	
		$( "#email" ).keydown(function() {
			
			$("#btnSubmit").attr("disabled", false);	
			$('#divEmail').removeClass('has-error has-feedback');
			$('#spanEmail').remove();
			
		});
		
	}else{
		if (mailformat.test(email) == false){ 
			
			$('#divEmail').addClass('has-error has-feedback');
			$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
		
			$("#email").keydown(function() {
				
				var $field = $(this);
    			var beforeVal = $field.val();

    			setTimeout(function() {

        			var afterVal = $field.val();
				
					if (mailformat.test(afterVal) == true){
						
						$("#btnSubmit").attr("disabled", false);
						$('#divEmail').removeClass('has-error has-feedback');
						$('#spanEmail').remove();
						$('#divEmail').addClass('has-success has-feedback');
						$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-ok form-control-feedback"></span>');
						
					}else{
						
						$("#btnSubmit").attr("disabled", true);
						$('#spanEmail').remove();
						$('#divEmail').addClass('has-error has-feedback');
						$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
					
					}
				
    			}, 0);
				 	
			});
		
		}else{
			
		}
			  
	}

	if(photo == ''){
		
		output.src="../uploads/error.png";
		
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The image is required" ></span>');	
		
	}else{
		
	}
	
	if(cin== '' || fname == '' || surname == '' || address == '' || gender == '' || téléphone == '' || email == ''||Spec == '' || mailformat.test(email) == false || telformat.test(téléphone) == false || photo == '' ){
		
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
	}

});
</script>


<?php

if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
  
$msg=$_GET['msg'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#index_Duplicated');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}

	if($msg==2){
		echo"
			<script>
			
			var myModal = $('#insert_Success');
			myModal.modal('show');

			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}

	if($msg==3){
		echo"
			<script>
			
			var myModal = $('#connection_Problem');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==4){
		echo"
			<script>
			
			var myModal = $('#index_email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==5){
		echo"
			<script>
			
			var myModal = $('#email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==6){
		echo"
			<script>
			
			var myModal = $('#upload_error1');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
}
?>


<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");
    },0);
  }
}, false);
}(window, location));
</script>
  	 	
</div>
                           
<?php include_once('footer.php');?>