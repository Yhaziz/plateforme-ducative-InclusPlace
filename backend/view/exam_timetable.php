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
body { 
	overflow-y:scroll;
}

tbody tr{
	height:100px;	
}

.modal-content1 {
   position: absolute;
   left: 125px; 
}
@media only screen and (max-width: 500px) {

	.modal-content1 {
   		
		position:static;
   
	}
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}
.image-error{
	border:1px solid #f44336;
	
}

.image-success{
	border:1px solid #009900;
	
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}

body.modal-open-noscroll1
{
    overflow:hidden;
	
 
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


<div class="content-wrapper">
	
    <section class="content-header">
    	<h1>
        	Exam Timetable
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Exam Timetabe</a></li>
        </ol>
	</section>

	
    <section class="content">
    	<div class="row">
            <div class="col-md-5">
              	<div class="box box-primary">
                	<div class="box-header with-border">
                  		<h3 class="box-title">Add Exam Timetable</h3>
                	</div>
                  	<div class="box-body">
                    	<div class="form-group col-md-5" id="divGender1">
                        	<label>Classroom</label>
                    		<select name="classroom" class="form-control col-md-3" id="classroom" >
                    			<option>Select Classroom</option>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM classroom";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     							<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>
					  		</select>
                     	</div>
                        <div class="form-group col-md-5" id="divGender1">
                        	<label>Exam</label>
                    		<select name="exam" class="form-control " id="exam" >
                    			<option>Select Exam</option>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM exam";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     							<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>
					  		</select>
                     	</div>
                        
                  	</div>
                  	<div class="box-footer">
                    	<button type="button" class="btn btn-primary"  onClick="showExamTimetable(this)">Next</button>
                  	</div>
            	</div>
        	</div>
    	</div>
	</section>

	
    <section class="content" > 
    	<div class="row" id="table1">
           
        </div>
    </section> 
        
<script>
function showExamTimetable(){

	
	var classroom = document.getElementById("classroom").value;
	var exam = document.getElementById("exam").value;
			
	var do1 ="show_exam_Timetable";
	
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('table1').innerHTML = this.responseText;
										
    		}
			
  		};
			
    	xhttp.open("GET", "exam_timetable_classroom_wise.php?classroom="+classroom +  "&exam="+exam +  "&do="+do1 , true);												
  		xhttp.send();
	
};

function showExamTimetable1(classroom,exam){
	
	var do1 ="show_exam_Timetable";
	
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('table1').innerHTML = this.responseText;
				window.scrollTo(0,document.body.scrollHeight);
										
    		}
			
  		};
			
    	xhttp.open("GET", "exam_timetable_classroom_wise.php?classroom="+classroom + "&exam="+exam + "&do="+do1 , true);												
  		xhttp.send();
	
};

</script>

	
	<div id="divAddEtt">

	</div>       
    
<script>
function showModal(Insertform){

	var myArray = $(Insertform).data("id").split(','); 
	
	var classroom = myArray[0];
	var exam = myArray[1];

	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
									
				document.getElementById('divAddEtt').innerHTML = this.responseText;
				$("#modalInsertform").modal('show');
				
				$("form").submit(function (e) {
				
				
					var day = $('#day').val();
					var subject = $('#subject').val();
					var teacher = $('#teacher').val();	
					var disease = $('#disease').val();
					var start_time = $('#start_time').val();	
					var end_time = $('#end_time').val();	
				
					if(day == 'Select Day'){
						
						$("#btnSubmit").attr("disabled", true);
						$('#divDay').addClass('has-error has-feedback');
						$('#divDay').append('<span id="spanDay" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The day is required" ></span>');	
					
						$("#day").change(function() {
							
							$("#btnSubmit").attr("disabled", false);	
							$('#divDay').removeClass('has-error has-feedback');
							$('#spanDay').remove();
						
						});
				
					}else{
					
					}
					
					if(subject == 'Select Subject'){
						
						$("#btnSubmit").attr("disabled", true);
						$('#divSubject').addClass('has-error has-feedback');
						$('#divSubject').append('<span id="spanSubject" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The subject is required" ></span>');	
					
						$("#subject").change(function() {
							
							$("#btnSubmit").attr("disabled", false);	
							$('#divSubject').removeClass('has-error has-feedback');
							$('#spanSubject').remove();
						
						});
				
					}else{
					
					}
					
					if(disease == 'Select disease'){
						
						$("#btnSubmit").attr("disabled", true);
						$('#divdisease').addClass('has-error has-feedback');
						$('#divdisease').append('<span id="spandisease" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The disease is required" ></span>');	
					
						$("#disease").change(function() {
							
							$("#btnSubmit").attr("disabled", false);	
							$('#divdisease').removeClass('has-error has-feedback');
							$('#spandisease').remove();
						
						});
				
					}else{
					
					}
					
					if(start_time == ''){
						
						$("#btnSubmit").attr("disabled", true);
						$('#divStartTime').addClass('has-error has-feedback');
						$('#divStartTime').append('<span id="spanStartTime" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The start time is required" ></span>');	
					
						$("#start_time").keydown(function() {
							
							$("#btnSubmit").attr("disabled", false);	
							$('#divStartTime').removeClass('has-error has-feedback');
							$('#spanStartTime').remove();
						
						});
				
					}else{
					
					}
				
					if(end_time == ''){
						
						$("#btnSubmit").attr("disabled", true);
						$('#divEndTime').addClass('has-error has-feedback');
						$('#divEndTime').append('<span id="spanEndTime" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The end time is required" ></span>');	
					
						$("#end_time").keydown(function() {
							
							$("#btnSubmit").attr("disabled", false);	
							$('#divEndTime').removeClass('has-error has-feedback');
							$('#spanEndTime').remove();
						
						});
				
					}else{
					
					}
				
					if(day == 'Select Day' || subject == 'Select Subject' || disease == 'Select disease' || start_time == '' || end_time == '' ){
						
						$("#btnSubmit").attr("disabled", true);
						e.preventDefault();
						return false;
							
					}else{
						$("#btnSubmit").attr("disabled", false);
						
					}

				});
						
    		}
			
  		};	
		
    	xhttp.open("GET", "exam_timetable_insert_form.php?classroom="+classroom + "&exam="+exam , true);												
  		xhttp.send();
	
};

function showModal1(time){


	var myArray = $(time).closest('a').data("id").split(',');
	var myArray1 = $(time).closest('tr').attr('id').split('_');
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
									
				document.getElementById('divAddEtt').innerHTML = this.responseText;
				$("#modalInsertform").modal('show');
	
				document.getElementById("start_time").value=myArray1[0];
				document.getElementById("end_time").value=myArray1[1];
				document.getElementById("day").value=myArray[0];
					
					$("form").submit(function (e) {
						
						var day = $('#day').val();
						var subject = $('#subject').val();
						var teacher = $('#teacher').val();	
						var disease = $('#disease').val();
						var start_time = $('#start_time').val();	
						var end_time = $('#end_time').val();	
					
						if(day == 'Select Day'){
						
							$("#btnSubmit").attr("disabled", true);
							$('#divDay').addClass('has-error has-feedback');
							$('#divDay').append('<span id="spanDay" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip" title="The day is required" ></span>');	
						
							
							$("#day").change(function() {
							
								$("#btnSubmit").attr("disabled", false);	
								$('#divDay').removeClass('has-error has-feedback');
								$('#spanDay').remove();
							
							});
					
						}else{
						
						}
						
						if(subject == 'Select Subject'){
						
							$("#btnSubmit").attr("disabled", true);
							$('#divSubject').addClass('has-error has-feedback');
							$('#divSubject').append('<span id="spanSubject" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The subject is required" ></span>');	
						
							$("#subject").change(function() {
							
								$("#btnSubmit").attr("disabled", false);	
								$('#divSubject').removeClass('has-error has-feedback');
								$('#spanSubject').remove();
							
							});
					
						}else{
						
						}
						
						if(disease == 'Select disease'){
						
							$("#btnSubmit").attr("disabled", true);
							$('#divdisease').addClass('has-error has-feedback');
							$('#divdisease').append('<span id="spandisease" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip" title="The disease is required" ></span>');	
							
							$("#disease").change(function() {
							
								$("#btnSubmit").attr("disabled", false);	
								$('#divdisease').removeClass('has-error has-feedback');
								$('#spandisease').remove();
							
							});
					
						}else{
						
						}
						
						if(start_time == ''){
						
							$("#btnSubmit").attr("disabled", true);
							$('#divStartTime').addClass('has-error has-feedback');
							$('#divStartTime').append('<span id="spanStartTime" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip" title="The start time is required" ></span>');	
						
							$("#start_time").keydown(function() {
							
								$("#btnSubmit").attr("disabled", false);	
								$('#divStartTime').removeClass('has-error has-feedback');
								$('#spanStartTime').remove();
							
							});
					
						}else{
						
						}
					
						if(end_time == ''){
						
							$("#btnSubmit").attr("disabled", true);
							$('#divEndTime').addClass('has-error has-feedback');
							$('#divEndTime').append('<span id="spanEndTime" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The end time is required" ></span>');	
						
							$("#end_time").keydown(function() {
							
								$("#btnSubmit").attr("disabled", false);	
								$('#divEndTime').removeClass('has-error has-feedback');
								$('#spanEndTime').remove();
							
							});
					
						}else{
						
						}
					
						if(day == 'Select Day' || subject == 'Select Subject' || teacher == 'Select Teacher' || disease == 'Select disease' || start_time == '' || end_time == '' ){
						
							$("#btnSubmit").attr("disabled", true);
							e.preventDefault();
							return false;
								
						}else{
							$("#btnSubmit").attr("disabled", false);
							
						}

					});
					
									
    			}
			
		};
			
		xhttp.open("GET", "exam_timetable_insert_form.php?classroom="+myArray[1] + "&exam="+myArray[2] , true);												
  		xhttp.send();
	
};


</script>
  

<?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){

  
	$msg=$_GET['msg'];
	$classroom=$_GET['classroom'];
	$exam=$_GET['exam'];
	
	if($msg==1){
		
		echo '<script>','showExamTimetable1('.$classroom.','.$exam.');','</script>';
		
		echo"
			<script>
			
			var myModal = $('#duplicate_Record2');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}

	if($msg==2){
		
		echo '<script>','showExamTimetable1('.$classroom.','.$exam.');','</script>';
		
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
		
		echo '<script>','showExamTimetable1('.$classroom.','.$exam.');','</script>';
		
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
?>


    <div id="divUpdatett">
    
    </div>

<script>
function showModal2(Updateform){

	
	var myArray = $(Updateform).data("id").split(',');
	
	var Id = myArray[0];
	var classroom = myArray[1];
	var exam = myArray[2];
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
									
				var myArray1 = eval( xhttp.responseText );
				
				var xhttp2 = new XMLHttpRequest();
  					xhttp2.onreadystatechange = function() {
	
						if (this.readyState == 4 && this.status == 200) {	
										
							document.getElementById('divUpdatett').innerHTML = this.responseText;
							$("#modalUpdateform").modal('show');
							
							
							document.getElementById("id1").value=myArray1[0];
							document.getElementById("day1").value=myArray1[1];
							document.getElementById("subject1").value=myArray1[2];
							document.getElementById("disease1").value=myArray1[3];
							document.getElementById("start_time1").value=myArray1[4];
							document.getElementById("end_time1").value=myArray1[5];
							
							
							$("form").submit(function (e) {
							
								var start_time = $('#start_time1').val();	
								var end_time = $('#end_time1').val();	
											
								if(start_time == ''){
									
									$("#btnSubmit1").attr("disabled", true);
									$('#divUpdateSTime').addClass('has-error has-feedback');
									$('#divUpdateSTime').append('<span id="spanUpdateSTime" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip" title="The start time is required" ></span>');	
								
									$("#start_time1").keydown(function() {
										
										$("#btnSubmit1").attr("disabled", false);	
										$('#divUpdateSTime').removeClass('has-error has-feedback');
										$('#spanUpdateSTime').remove();
									
									});
							
								}else{
								
								}
					
								if(end_time == ''){
									
									$("#btnSubmit1").attr("disabled", true);
									$('#divUpdateETime').addClass('has-error has-feedback');
									$('#divUpdateETime').append('<span id="spanUpdateETime" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip" title="The end time is required" ></span>');	
								
									$("#end_time1").keydown(function() {
										
										$("#btnSubmit1").attr("disabled", false);	
										$('#divUpdateETime').removeClass('has-error has-feedback');
										$('#spanUpdateETime').remove();
									
									});
							
								}else{
								
								}
					
								if(start_time == '' || end_time == '' ){
									
									$("#btnSubmit1").attr("disabled", true);
									e.preventDefault();
									return false;
										
								}else{
									$("#btnSubmit1").attr("disabled", false);
									
								}
								
							});
							
						}
			
  					};	
							
    				xhttp2.open("GET", "exam_timetable_update_form.php?classroom="+classroom + "&exam="+exam, true);												
  					xhttp2.send();
    			}
			
		};
			
		xhttp.open("GET", "../model/get_exam_timetable.php?id="+Id , true);												
  		xhttp.send();
	
};

</script>


<?php

if(isset($_GET["do"])&&($_GET["do"]=="alert_from_update")){
  
	$msg=$_GET['msg'];
	$classroom=$_GET['classroom'];
	$exam=$_GET['exam'];
	
	if($msg==1){
		
		echo '<script>','showExamTimetable1('.$classroom.','.$exam.');','</script>';
		
		echo"
			<script>
			
			var myModal = $('#update_Success1');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}

	if($msg==2){
		
		echo '<script>','showExamTimetable1('.$classroom.','.$exam.');','</script>';
		
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

	if($msg==3){
		
		echo '<script>','showExamTimetable1('.$classroom.','.$exam.');','</script>';
		
		echo"
			<script>
			
			var myModal = $('#update_error1');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==4){
		
		echo '<script>','showExamTimetable1('.$classroom.','.$exam.');','</script>';
		
		echo"
			<script>
			
			var myModal = $('#duplicate_Record2');
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
                       
	
	<div class="modal msk-fade " id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a>
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
          
<script>

$('body').on('click', '.confirm-delete', function (e){
	e.preventDefault();
    var id = $(this).data('id');
	$('#deleteConfirm').data('id1', id).modal('show');
});

$('#btnYes').click(function() {
	
	var myArray3 = $('#deleteConfirm').data('id1').split(',');
     		
    var id = myArray3[0];
	var classroom1 = myArray3[1];
	var exam1 = myArray3[2];
	
	var do1 = "delete_record";	
	var table_name1= "exam_timetable";
		
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			
    	if (this.readyState == 4 && this.status == 200) {
			
			var myArray = eval(xhttp.responseText);
					
				if(myArray[0]==1){
				
					$("#deleteConfirm").modal('hide');	        		
					var do2 ="show_Timetable";
				
					var xhttp1 = new XMLHttpRequest();
						xhttp1.onreadystatechange = function() {		
				
							if (this.readyState == 4 && this.status == 200) {
										
								document.getElementById('table1').innerHTML = this.responseText;
								Delete_alert(myArray[0]);
								window.scrollTo(0,document.body.scrollHeight);
							
							}
								
						};
						
						xhttp1.open("GET", "exam_timetable_classroom_wise.php?classroom=" + classroom1 + "&exam="+exam1 + "&do="+do2 , true);												
  						xhttp1.send();
				
				}
		
				if(myArray[0]==2){
			
					$("#deleteConfirm").modal('hide');
					Delete_alert(myArray[0]);
				
				}

    		}
			
  		};
			
		xhttp.open("GET", "../model/delete_record.php?id=" + id + "&do="+do1 + "&table_name="+table_name1 + "&page="+currentPage , true);												
  		xhttp.send();
	 			   		
});

function Delete_alert(msg){
	
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