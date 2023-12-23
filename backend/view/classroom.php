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

body { 
	overflow-y:scroll;
}
.msk-scroll{
	overflow-y:scroll;
}
.form-control-feedback {
   pointer-events: auto;
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}
.modal-content1 {
   position: absolute;
   left: 25%; 
}

@media only screen and (max-width: 500px) {
	
	.modal-content1 {
		
	 	width:100%;
	  	position: static;
		
	}

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

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Classroom
        	<small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Classroom</a></li>
    	</ol>
	</section>

	<!-- Main content -->
	<section class="content">
    	<div class="row">
        	<!-- left column -->
            <div class="col-md-5">
            	<!-- general form elements -->
              	<div class="box box-primary">
                	<div class="box-header with-border">
                  		<h3 class="box-title">Add Classroom</h3>
                	</div><!-- /.box-header -->
                	<!--  //MSK-00097 form start -->
                	<form role="form" action="../index.php" method="post" id="form1">                    
                  		<div class="box-body">
                    		<div class="form-group" id="divClassroom">
                      			<label for="">Classroom</label>
                      			<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" autocomplete="off">
                    		</div>
                            <div class="form-group" id="divAdmissionFee">
                      			<label for="">Admission Fee(DT)</label>
                      			<input type="text" class="form-control" id="admission_fee" placeholder="Enter admission fee" name="admission_fee" autocomplete="off">
                    		</div>
                             <div class="form-group" id="divHallCharge">
                      			<label for="">Hall Charge(%)</label>
                      			<input type="text" class="form-control" id="hall_charge" placeholder="Enter hall charge" name="hall_charge" autocomplete="off">
                    		</div>
                  		</div><!-- /.box-body -->
                  		<div class="box-footer">
                  			<input type="hidden" name="do" value="add_classroom" />
                    		<button type="submit" class="btn btn-primary" id="btnSubmit">Next</button>
                  		</div>
                	</form>
				</div><!-- /.box -->
			</div>
		</div>
	</section><!-- End of form section -->
    
    
<script>

$("#form1").submit(function (e) {
//MSK-000098-form submit
	
	var name = $('#name').val();	
	var admission_fee = $('#admission_fee').val();
	var hall_charge = $('#hall_charge').val();
	
	if(name == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divClassroom').addClass('has-error has-feedback');	
		$('#divClassroom').append('<span id="spanName" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The classroom is required" ></span>');	
			
		$("#name").keydown(function() {
			//MSK-00100-name  
			$("#btnSubmit").attr("disabled", false);	
			$('#divClassroom').removeClass('has-error has-feedback');
			$('#spanName').remove();
			
		});
			
	}else{
		
	}
	
	if(admission_fee == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divAdmissionFee').addClass('has-error has-feedback');	
		$('#divAdmissionFee').append('<span id="spanAdmissionFee" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The admission fee is required" ></span>');	
			
		$("#admission_fee").keydown(function() {
			//MSK-00100-name  
			$("#btnSubmit").attr("disabled", false);	
			$('#divAdmissionFee').removeClass('has-error has-feedback');
			$('#spanAdmissionFee').remove();
			
		});
			
	}else{
		
	}
	
	if(hall_charge == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divHallCharge').addClass('has-error has-feedback');	
		$('#divHallCharge').append('<span id="spanHallCharge" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The hall charge is required" ></span>');	
			
		$("#hall_charge").keydown(function() {
			//MSK-00100-name  
			$("#btnSubmit").attr("disabled", false);	
			$('#divHallCharge').removeClass('has-error has-feedback');
			$('#spanHallCharge').remove();
			
		});
			
	}else{
		
	}

	if(name == '' || admission_fee == ''){
		//MSK-000098- form validation failed
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
	}


});

function eMarkRG(classroom){
	
	$('#modalUpdateform1').modal('hide');
	$('#modalInsertform').modal('show');
	document.getElementById("classroom_id").value =classroom;
	
};
function cTablePage(page){
//MSK-000135	
	var currentPage1 = (page-1)*10;
	
	$(function(){
		$("#example1").DataTable({
			"displayStart": currentPage1,    
			"bDestroy": true       
   		});
						
	});
					  
	window.scrollTo(0,document.body.scrollHeight);
	
};

function showeMark1(classroom,page){
	
	cTablePage(page);
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
					//MSK-00107 
				document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
				$('#modalUpdateform1').data('id1', classroom).modal('show');
											
			}
				
		};	
			
		xhttp.open("GET", "emarks_range_classroom_update_form.php?classroom="+classroom +"&page="+page , true);												
		xhttp.send();//MSK-00105-Ajax End
	 
};
</script>   

<!--run Insert alert using PHP & JS/jQuery  -->          
<?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	$classroom=$_GET['classroom'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#classroom_Duplicated  ');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}

	if($msg==2){
			
		echo '<script>','eMarkRG('.$classroom.');','</script>';
	
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
	if($msg==5){
		
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
}

if(isset($_GET["do"])&&($_GET["do"]=="alert_from_eMark_insert")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	$classroom=$_GET['classroom'];
	$page=$_GET['page'];

	if($msg==5){
		
		echo '<script>','showeMark1('.$classroom.','.$page.');','</script>';
	
	}

	
}
?><!--./Insert alert --> 
 

<script>

function addNewRow(){
	
	var last_id = $('.tBody tr:last').attr('id').replace('tr_','');

		last_id++;
	
	var tr = '<tr id="tr_'+last_id+'">'+
          		'<td id="range_td_'+last_id+'"><input type="text" class="mark-range form-control" id="mark_range_text_'+last_id+'" name="mark_range[]"  placeholder="75-100" autocomplete="off"/></td> '+
                '<td id="classroom_td_'+last_id+'"><input type="text" class="mark-classroom form-control" id="mark_classroom_text_'+last_id+'" name="mark_classroom[]"  placeholder="A" autocomplete="off"/> </td>'+
         	'</tr>';
				
	$('.tBody').append(tr);

}; 

function deleteRow(){
	
	var last_id = $('.tBody tr:last').attr('id').replace('tr_','');

	if(last_id != 1){
		$('.tBody tr:last').remove();	
		$("#btnSubmit1").attr("disabled", false); 
	}

}

$("#form2").submit(function (e) {
	
	var rowCount = $('.tBody tr').length;
	
	for(i=1; i<rowCount+1; i++){
		
		var markRange = document.getElementById('mark_range_text_'+i).value;
		var markClassroom = document.getElementById('mark_classroom_text_'+i).value;

		if(markRange==""){
			$("#btnSubmit1").attr("disabled", true);
			$("#range_td_"+i).addClass('has-feedback');
			$("#range_td_"+i).append('<span id="spanMarkRange" class="glyphicon glyphicon-remove form-control-feedback set-color-tooltip" data-toggle="tooltip" title="The mark range is required" ></span>');
			
			$("#mark_range_text_"+i).keydown(function(){
				$("#btnSubmit1").attr("disabled", false);     
				$("#range_td_"+i).removeClass('has-feedback');
				$("#spanMarkRange").remove();
			});
			
		}
		
		if(markClassroom==""){
			$("#btnSubmit1").attr("disabled", true);  
			$('#classroom_td_'+i).addClass('has-feedback');
			$('#classroom_td_'+i).append('<span id="spanMarkClassroom" class="glyphicon glyphicon-remove form-control-feedback set-color-tooltip" data-toggle="tooltip" title="The mark classroom is required" ></span>');
			
			$("#mark_classroom_text_"+i).keydown(function(){
				$('#btnSubmit1').attr("disabled", false);     
				$('#classroom_td_'+i).removeClass('has-feedback');
				$("#spanMarkClassroom").remove();
			});
		}
		
	}
	
	if(markRange == '' || markClassroom == '' ){
		//MSK-000099- form validation failed
		
		$("#btnSubmit1").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit1").attr("disabled", false);
		//return true;
	}
	
});

function showeMark(classroom,page){
	
	$('#modalUpdateform1').modal('hide');
	$('#modalInsertform').modal('show');
	document.getElementById("classroom_id").value =classroom;
	document.getElementById("current_page").value =page;
	 
};


</script>       
  
 <!--run  alert using PHP & JS/jQuery  -->          
<?php
if(isset($_GET["do"])&&($_GET["do"]=="show_eMark")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	$classroom=$_GET['classroom'];
	$page=$_GET['page'];

	if($msg==1){
		
		echo '<script>','showeMark('.$classroom.','.$page.');','</script>';
			
	}

	if($msg==2){
		
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
}
?><!--./show_eMark  -->
  
<!-- table for view all records -->
 
	<!-- Main content -->
	<section class="content" > <!-- Start of table section -->
		<div class="row" id="table1"><!--MSK-000132-1-->
			<div class="col-md-7">
            	<div class="box">
                	<div class="box-header">
                  		<h3 class="box-title">All Classroom</h3>
                	</div><!-- /.box-header -->
                	<div class="box-body table-responsive">
                    	<!--MSK-00101-->
                		<table id="example1" class="table table-bordered table-striped">
                    		<thead>
                        		<th>ID</th>
                            	<th>Classroom</th>
                                <th>Admission Fee(DT)</th>
                                <th>Hall Charge(%)</th>
                            	<th>Action</th>
                        	</thead>
                        	<tbody>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM classroom";
$result=mysqli_query($conn,$sql);
$count = 0;
$cant_remove1=0;
$cant_remove2=0;
$cant_remove3=0;
$cant_remove4=0;
$cant_remove5=0;
$cant_remove6=0;
$cant_remove7=0;

if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
		$count++;
		$id=$row['id'];
?>   
                        		<tr>
                            		<td><?php echo $count; ?></td>
               <!--MSK-000115-td1--><td id="td1_<?php echo $row['id']; ?>"><?php echo $row['name']; ?></td>
               <!--MSK-000115-td2--><td id="td2_<?php echo $row['id']; ?>"><?php echo $row['admission_fee']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['hall_charge']; ?></td>
                                	<td>
<?php
$sql1="SELECT * FROM exam_timetable WHERE classroom_id='$id'";	
 
$result1=mysqli_query($conn,$sql1);

if(mysqli_num_rows($result1) > 0){
	$cant_remove1=1;
}else{
	$cant_remove1=0;
}

$sql2="SELECT * FROM student_exam WHERE classroom_id='$id'";	
   
$result2=mysqli_query($conn,$sql2);

if(mysqli_num_rows($result2) > 0){
	$cant_remove2=1;
}else{
	$cant_remove2=0;
}

$sql3="SELECT * FROM student_classroom WHERE classroom_id='$id'";	
   
$result3=mysqli_query($conn,$sql3);

if(mysqli_num_rows($result3) > 0){
	$cant_remove3=1;
}else{
	$cant_remove3=0;
}

$sql4="SELECT * FROM student_payment_history WHERE classroom_id='$id'";	
   
$result4=mysqli_query($conn,$sql4);

if(mysqli_num_rows($result4) > 0){
	$cant_remove4=1;
}else{
	$cant_remove4=0;
}

$sql5="SELECT * FROM subject_routing WHERE classroom_id='$id'";	
   
$result5=mysqli_query($conn,$sql5);

if(mysqli_num_rows($result5) > 0){
	$cant_remove5=1;
}else{
	$cant_remove5=0;
}

$sql6="SELECT * FROM teacher_salary_history WHERE classroom_id='$id'";	
   
$result6=mysqli_query($conn,$sql6);

if(mysqli_num_rows($result6) > 0){
	$cant_remove6=1;
}else{
	$cant_remove6=0;
}

$sql7="SELECT * FROM timetable WHERE classroom_id='$id'";	
   
$result7=mysqli_query($conn,$sql7);

if(mysqli_num_rows($result7) > 0){
	$cant_remove7=1;
}else{
	$cant_remove7=0;
}

if($cant_remove1 > 0 || $cant_remove2 > 0 || $cant_remove3 > 0 || $cant_remove4 > 0 || $cant_remove5 > 0 || $cant_remove6 > 0 || $cant_remove7 > 0 ){
	
	echo '<a href="#modalUpdateform" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="'.$id.'" data-toggle="modal">Edit</a>';

	
}else{
	
	echo '<a href="#modalUpdateform" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="'.$id.'" data-toggle="modal">Edit</a>';
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
	</section> <!-- End of table section --> 
          
	<!-- //MSK-00103 Modal-Update form -->  
	<div class="modal msk-fade" id="modalUpdateform" tabindex="-1" role="dialog" aria-labelledby="modalUpdateform" aria-hidden="true">  
  		<div class="modal-dialog">
    		<div class="container">
            	<div class="row ">	
           			<div class="col-md-6">
                		<div class="panel">
        					<div class="panel-heading bg-orange">              
        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          						<h4 class="modal-title custom_align" id="Heading">Edit Classroom</h4>
   							</div>
                            <div class="panel-body"> <!-- Start of modal body--> 
                                <div class="form-group" id="divClassroomUpdate">
                                    <label for="">Classroom</label>
                                    <input class="form-control" type="text" id="name1" name="name" autocomplete="off">
                                </div>
                                <div class="form-group" id="divAFeeUpdate">
                                    <label for="">Admission Fee(DT)</label>
                                    <input class="form-control" type="text" id="admission_fee1" name="admission_fee" autocomplete="off">
                                </div>
                                <div class="form-group" id="divHChargeUpdate">
                                    <label for="">Hall Charge(%)</label>
                                    <input class="form-control" type="text" id="hall_charge1" name="hall_charge" autocomplete="off">
                                </div>
                            </div><!--/.modal body-->
                            <div class="panel-footer bg-gray-light">
                                <input type="hidden" name="id" id="id" value="">
                                <button type="button" onClick="Updateclassroom(this)" id="btnSubmit1" class="btn btn-info" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>    
                            </div><!--/.panel-footer--> 
            			</div><!--/.panel-->
            		</div><!--/.col-md-6-->
            	</div><!--/.row-->                                        
        	</div><!-- /.modal-content -->  		 
		</div><!-- /.modal-dialog -->            
	</div><!--/.Modal-Update form -->   
    
<script>
function showModal(Updateform){
//MSK-00104
	
	var Id = $(Updateform).data("id");  
		
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start 1 
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-00107 
				var myArray1 = eval( xhttp.responseText );
				
				document.getElementById("id").value =myArray1[0];
				document.getElementById("name1").value =myArray1[1];
				document.getElementById("admission_fee1").value =myArray1[2];
				document.getElementById("hall_charge1").value =myArray1[3];

    		}
			
  		};	
		
    xhttp.open("GET", "../model/get_classroom.php?id=" + Id , true);												
  	xhttp.send();//MSK-00105-Ajax End
	 
};
  
function Updateclassroom(){
//MSK-000108
	
	var Id1 = document.getElementById('id').value;
	var name1 = document.getElementById('name1').value;
	var admission_fee1 = document.getElementById('admission_fee1').value;
	var hall_charge1 = document.getElementById('hall_charge1').value;
	
	if(name1 == ''){
		//MSK-00109-name
		$("#btnSubmit1").attr("disabled", true);
		$('#divClassroomUpdate').addClass('has-error has-feedback');	
		$('#divClassroomUpdate').append('<span id="spanNameUpdate" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The classroom is required" ></span>');	
			
		$("#name1").keydown(function() {
			//MSK-00110-name 
			$("#btnSubmit1").attr("disabled", false);	
			$('#divClassroomUpdate').removeClass('has-error has-feedback');
			$('#spanNameUpdate').remove();
			
		});	
	}else{
		
	}
	
	if(admission_fee1 == ''){
		//MSK-00109-name
		$("#btnSubmit1").attr("disabled", true);
		$('#divAFeeUpdate').addClass('has-error has-feedback');	
		$('#divAFeeUpdate').append('<span id="spanAFeeUpdate" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The admission fee is required" ></span>');	
			
		$("#admission_fee1").keydown(function() {
			//MSK-00110-name 
			$("#btnSubmit1").attr("disabled", false);	
			$('#divAFeeUpdate').removeClass('has-error has-feedback');
			$('#spanAFeeUpdate').remove();
			
		});	
	}else{
		
	}
	
	if(hall_charge1 == ''){
		//MSK-00109-name
		$("#btnSubmit1").attr("disabled", true);
		$('#divHChargeUpdate').addClass('has-error has-feedback');	
		$('#divHChargeUpdate').append('<span id="spanHChargeUpdate" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The hall charge is required" ></span>');	
			
		$("#hall_charge1").keydown(function() {
			//MSK-00110-name 
			$("#btnSubmit1").attr("disabled", false);	
			$('#divHChargeUpdate').removeClass('has-error has-feedback');
			$('#spanHChargeUpdate').remove();
			
		});	
	}else{
		
	}
	
	
	if(name1 == '' || admission_fee1 == '' || hall_charge1 == ''){
		//MSK-000098-validation failed
		$("#btnSubmit1").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		
		var do1 = "update_classroom";	
		
		var xhttp = new XMLHttpRequest();//MSK-00111-Ajax Start  
			xhttp.onreadystatechange = function() {
				
				if (this.readyState == 4 && this.status == 200) {
					//MSK-000112
					var myArray2 = eval(xhttp.responseText);
					
					var msg = myArray2[4];
					
					if(msg==1){//MSK-000113
						
						document.getElementById("td1_"+Id1 ).innerHTML =myArray2[1];//MSK-000114
						document.getElementById("td2_"+Id1 ).innerHTML =myArray2[2];
						document.getElementById("td3_"+Id1 ).innerHTML =myArray2[3];
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);//MSK-000116
						
					}
					
					if(msg==2){//MSK-000118
						
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);
						
					}
		
					if(msg==3){//MSK-000119
						
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);
		
					}
					
					if(msg==4){//MSK-000120
						
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);
		
					}
								
			
				}
					
			};
			xhttp.open("GET", "../model/update_classroom.php?id=" + Id1 + "&name="+name1 + "&admission_fee="+admission_fee1 + "&hall_charge="+hall_charge1 + "&do="+do1, true);												
			xhttp.send();//MSK-00111-Ajax End
		
	}
			
};


function Update_alert(msg){
//MSK-000117	
	if(msg==1){
		
    	var myModal = $('#update_Success');
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
	
	if(msg==3){

    	var myModal = $('#update_error1');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
    	}, 3000));
				
	}
	
	if(msg==4){
		
    	var myModal = $('#classroom_Duplicated');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
    	}, 3000));
				
	}
	
};

</script>   
   
	<!-- //MSK-000124 Modal-Delete Confirm Popup -->
	<div class="modal msk-fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000125 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
<script>

$('body').on('click', '.confirm-delete', function (e){
//MSK-000122	
	
    e.preventDefault();
    var id = $(this).data('id');
	$('#deleteConfirm').data('id1', id).modal('show');//MSK-000123
 	
});

$('#btnYes').click(function() {
//MSK-000126
   
    var id = $('#deleteConfirm').data('id1');	
	var do1 = "delete_record";	
	
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-000127-Ajax Start  
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-000129
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){//MSK-000130
				
					$("#deleteConfirm").modal('hide');	        		
					var page = myArray[1];
						
					var xhttp1 = new XMLHttpRequest();//MSK-000131-Start Ajax  
						xhttp1.onreadystatechange = function() {		
				
							if (this.readyState == 4 && this.status == 200) {
										
								document.getElementById('table1').innerHTML = this.responseText;//MSK-000132
								cTablePage(page);//MSK-000133
								Delete_alert(myArray[0]);//MSK-000134	
							
							}
								
						};
						
						xhttp1.open("GET", "show_classroom_table.php" , true);												
  						xhttp1.send();//MSK-000131-End Ajax
				
					}
		
					if(myArray[0]==2){//MSK-000137
			
						$("#deleteConfirm").modal('hide');
						Delete_alert(myArray[0]);//MSK-000138
				
					}


    		}
			
  		};	
    xhttp.open("GET", "../model/delete_classroom.php?id=" + id + "&do="+do1 + "&page="+currentPage , true);												
  	xhttp.send();//MSK-000127-Ajax End
	 			   		
});

function Delete_alert(msg){
//MSK-000136	
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

    <div id="divEMG">  
          
    </div>

<script>
function showModal1(Viewform){
	
	var classroom = $(Viewform).data("id"); 
	
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
					//MSK-00107 
				document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
				$('#modalUpdateform1').data('id1', classroom).modal('show');
											
			}
				
		};	
			
		xhttp.open("GET", "emarks_range_classroom_update_form.php?classroom="+classroom +"&page="+currentPage , true);												
		xhttp.send();//MSK-00105-Ajax End
	 
};

function editRangeClassroom(viewRG){
	
	var myArray = $(viewRG).data("id").split(',');
	
	var id = myArray[0];
	var count = myArray[1];
	
	var markRange= document.getElementById('rangeU_td_'+count).innerHTML;
	var markClassroom= document.getElementById('classroomU_td_'+count).innerHTML;
	
	var do1="show_range_classroom_text";
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
							
				document.getElementById('trU_'+count).innerHTML = this.responseText;//MSK-000137		
				$('#edit_RG_'+count).hide();
				$('#delete_RG_'+count).hide();
				
				$('#action_'+count).append('<a id="update_RG_'+count+'" onclick="updateRangeClassroom(this)" data-id="'+id+','+count+'" class="glyphicon glyphicon-ok btn btn-success btn-xs" ></a>');			
			}
				
		};	
							
    	xhttp.open("GET", "range_classroom_text.php?id="+id + "&count="+count +"&range="+markRange +"&classroom="+markClassroom +"&do="+do1, true);												
  		xhttp.send();//MSK-00135-Ajax End	
	
};

function updateRangeClassroom(updateRG){
	
var myArray1 = $(updateRG).data("id").split(',');
	
	var id = myArray1[0];
	var count = myArray1[1];
		
	var range = $('#rangeText_'+count).val();
	var classroom = $('#classroomText_'+count).val();

	var do1="update_emarks_range_classroom";

	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				
				var myArray = eval(xhttp.responseText);
				var msg=myArray[0];
				
				if(msg == 1){
					$('#update_RG_'+count).remove();
					
					$('#rangeText_'+count).remove();
					$('#classroomText_'+count).remove();
					
					$('#rangeU_td_'+count).html(range);
					$('#classroomU_td_'+count).html(classroom);
					
					$('#action_'+count).append('<a href="#" id="edit_RG_'+count+'" onclick="editRangeClassroom(this)" data-id="'+id+','+count+'" class="label-warning "><span class="glyphicon glyphicon-edit "></span></a> <a href="#" id="delete_RG_'+count+'" data-id="'+id+'" class="confirm-delete-RG label-danger"><span class="glyphicon glyphicon-remove "></span></a>');
					
				}
							
			}
				
		};	
							
    	xhttp.open("GET", "../model/update_emarks_range_classroom.php?id="+id +"&range="+range +"&classroom="+classroom +"&do="+do1, true);												
  		xhttp.send();//MSK-00135-Ajax End
		
};
</script>
	<!-- //MSK-000124 Modal-Delete Confirm Popup -->
	<div class="modal msk-fade" id="deleteConfirmRG" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete1</h4>
      			</div>
				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to Delete this Record
        		</div>
      			<div class="modal-footer">
					<a href="#" style="margin-left:10px;" id="btnYesRG" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000125 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
    
    <div id="divEMG2">
    
    </div>

<script>
$('body').on('click', '.confirm-delete-RG', function (e){
//MSK-000122	

	$('#modalUpdateform1').modal('hide');
    e.preventDefault();
    var id = $(this).data('id');
	$('#deleteConfirmRG').data('id1', id).modal('show');//MSK-000123
	 	
});

$('#btnYesRG').click(function() {
//MSK-000126
  
	var id = $('#deleteConfirmRG').data('id1');
	var classroom = $('#modalUpdateform1').data('id1');
	
	var do1 = "delete_range_classroom";	
	
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-000127-Ajax Start  
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-000129
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){//MSK-000130
				
					$("#deleteConfirmRG").modal('hide');	        		
					var page = myArray[1];
					document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
						
					var xhttp1 = new XMLHttpRequest();//MSK-000131-Start Ajax  
						xhttp1.onreadystatechange = function() {		
				
							if (this.readyState == 4 && this.status == 200) {
								
								document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
								$('#modalUpdateform1').data('id1', classroom).modal('show');			
								
							}
								
						};
						
						xhttp1.open("GET", "emarks_range_classroom_update_form.php?classroom="+classroom + "&page="+currentPage , true);													
  						xhttp1.send();//MSK-000131-End Ajax
				
					}
		
					if(myArray[0]==2){//MSK-000137
			
						$("#deleteConfirm").modal('hide');
						Delete_alert(myArray[0]);//MSK-000138
				
					}


    		}
			
  		};	
    xhttp.open("GET", "../model/delete_range_classroom.php?id=" + id + "&do="+do1 , true);												
  	xhttp.send();//MSK-000127-Ajax End
	 			   		
});

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