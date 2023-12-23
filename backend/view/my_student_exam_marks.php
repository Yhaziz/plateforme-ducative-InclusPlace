<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_teacher.php'); ?>
<?php include_once('sidebar2.php'); ?>
<?php include_once('alert.php'); ?>

<style>

body { 
	overflow-y:scroll;
}

.msk-modal-content {
   position: absolute;
   left: 125px; 
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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Exam
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Exam</a></li>
            <li><a href="#">My Exam Marks</a></li>
        </ol>
	</section>

	<!-- Main content -->
    <section class="content">
    	<div class="row">
            <div class="col-md-5"><!-- left column -->
              	<div class="box box-primary"><!-- general form elements -->
                	<div class="box-header with-border">
                  		<h3 class="box-title">My Student Exam Marks</h3>
                	</div><!-- /.box-header -->
                  	<div class="box-body">
                        <div class="form-group" id="divClassroom">
                        	<div class="col-md-3">
                        		<label>Classroom</label>
                     		</div>
                        	<div class="col-md-7" id="divClassroom1">
                                <select name="classroom" class="form-control" id="classroom" style="width:105%;" ><!--MSK-000107-->
                                    <option>Select Classroom</option>
<?php
include_once('../controller/config.php');
$index=$_SESSION["index_number"];
$current_year=date('Y');
    
$sql="SELECT * FROM classroom";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>
                                </select>
                     		</div>
                    	</div>   
                    	<br><br>
                        <div class="form-group" id="divExam">
                        	<div class="col-md-3">
                        		<label>Exam</label>
                     		</div>
                        	<div class="col-md-7" id="divExam1">
                                <select name="exam" class="form-control" id="exam" style="width:105%;" ><!--MSK-000107-->
                                    <option>Select Exam</option>
<?php
include_once('../controller/config.php');
$my_index=$_SESSION["index_number"];
$current_year=date('Y');
    
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
                  	</div><!-- /.box-body -->
                  	<div class="box-footer">
                    	<input type="hidden" id="current_year" value="<?php echo $current_year; ?>">
	                  	<input type="hidden" id="my_index" value="<?php echo $my_index; ?>">
                    	<button type="button" id="btnSubmit" class="btn btn-primary"  onClick="showMyStudent(this)">Submit</button><!--MSK-000108-->
                  	</div>
            	</div><!-- /.box -->
        	</div>
    	</div>
	</section><!-- End of form section -->

	<!-- table for view all records-->
    <section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000112--> 
           
        </div>
    </section> <!-- End of table section --> 
        
<script>

function showMyStudent(){

	
	var my_index = document.getElementById("my_index").value;
	var current_year = document.getElementById("current_year").value;
	var exam = document.getElementById("exam").value;
	var classroom = document.getElementById("classroom").value;
	
	if(exam == 'Select Exam'){
		
		$("#btnSubmit").attr("disabled", true);
		$('#divExam').addClass('has-error');
		$('#divExam1').addClass('has-feedback');
		$('#divExam1').append('<span id="spanExam" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The exam is required" ></span>');	
					
		$("#exam").change(function() {
			
			$("#btnSubmit").attr("disabled", false);	
			$('#divExam').removeClass('has-error has-feedback');
			$('#spanExam').remove();
						
		});
		
	}
	
	if(classroom == 'Select Classroom'){
		
		$("#btnSubmit").attr("disabled", true);
		$('#divClassroom').addClass('has-error');
		$('#divClassroom1').addClass('has-feedback');
		$('#divClassroom1').append('<span id="spanClassroom" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The classroom is required" ></span>');	
					
		$("#classroom").change(function() {
			
			$("#btnSubmit").attr("disabled", false);	
			$('#divClassroom').removeClass('has-error has-feedback');
			$('#spanClassroom').remove();
						
		});
		
	}
	
	if(exam == 'Select Exam' || classroom == 'Select Classroom'){
	
	}else{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('table1').innerHTML = this.responseText;
				
				$(function () {
					$("#example1").DataTable();
				});
												
    		}
			
  		};
			
    	xhttp.open("GET", "show_my_student.php?exam="+exam  +  "&year="+current_year+  "&my_index="+my_index +  "&classroom="+classroom, true);												
  		xhttp.send();
		
	}
		
};

function showMyStudent1(exam,current_year,my_index,classroom){
	
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('table1').innerHTML = this.responseText;
				
				$(function () {
					$("#example1").DataTable();
				});
												
    		}
			
  		};
			
    	xhttp.open("GET", "show_my_student.php?exam="+exam  +  "&year="+current_year+  "&my_index="+my_index +  "&classroom="+classroom, true);												
  		xhttp.send();
		

};

</script>
<?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){

	$exam=$_GET['exam'];
	$current_year=$_GET['current_year'];
	$my_index=$_GET['my_index'];
	$classroom=$_GET['classroom'];
	$msg=$_GET['msg'];
	
	if($msg==1){
		echo '<script>','showMyStudent1('.$exam.','.$current_year.','.$my_index.','.$classroom.');','</script>';
		
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
	
	if($msg==2){
		
		echo '<script>','showMyStudent1('.$exam.','.$current_year.','.$my_index.','.$classroom.');','</script>';
		
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

if(isset($_GET["do"])&&($_GET["do"]=="alert_from_update")){

	$exam=$_GET['exam'];
	$current_year=$_GET['current_year'];
	$my_index=$_GET['my_index'];
	$classroom=$_GET['classroom'];
	$msg=$_GET['msg'];
	
	if($msg==1){
		
		echo '<script>','showMyStudent1('.$exam.','.$current_year.','.$my_index.','.$classroom.');','</script>';
		
		echo"
			<script>
			
			var myModal = $('#update_Success');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
		
	}
	
	if($msg==2){
		
		echo '<script>','showMyStudent1('.$exam.','.$current_year.','.$my_index.','.$classroom.');','</script>';
		
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

	<section class="content" > <!-- Start of table section -->
    	<div class="row" id="table2"><!--MSK-000112--> 
           
        </div>
    </section> <!-- End of table section --> 
	
    <div id="stdProfile">
    
    </div>

	<div id="add_eMark">
    
    </div>
    
    <div id="edit_eMark">
    
    </div>

<script>

function studentProfile(std_index){
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
																	
			if (this.readyState == 4 && this.status == 200) {
																		
				document.getElementById('stdProfile').innerHTML = this.responseText;
				$('#modalviewStudent').modal('show');														
			}
		};
																
		xhttp.open("GET", "student_profile.php?std_index=" + std_index , true);												
		xhttp.send();	
		
};


function showModalAddExam(exam,my_index,std_index,classroom){
	
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('add_eMark').innerHTML = this.responseText;
				$('#inserteMark').modal('show');
				
				
    		}
			
  		};
			
    	xhttp.open("GET", "my_student_exam_mark_insert_form.php?exam="+exam +  "&my_index="+my_index + "&std_index="+std_index + "&classroom="+classroom, true);												
  		xhttp.send();
};

function showModalEditExam(exam,my_index,std_index,classroom){
	
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('edit_eMark').innerHTML = this.responseText;
				$('#edit_examMark').modal('show');
				
				
    		}
			
  		};
			
    	xhttp.open("GET", "my_student_exam_mark_update_form.php?exam="+exam +  "&my_index="+my_index + "&std_index="+std_index + "&classroom="+classroom, true);												
  		xhttp.send();
};

function showModalViewExam(exam,year,index){
	
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('table2').innerHTML = this.responseText;
				window.scrollTo(0,document.body.scrollHeight);
				var subject = document.getElementById('chartLable').value;
				var marks = document.getElementById('chartData').value;
				
				showBarChart(subject,marks);
				
    		}
			
  		};
			
    	xhttp.open("GET", "my_student_exam_marks1.php?exam="+exam +  "&year="+year +  "&index="+index, true);												
  		xhttp.send();
};

function showBarChart(subject,marks){
	
 	$("#barChart").show();	
	 $("#lineChart").hide();
	 $("#pieChart").hide();
	 $("#doughnutChart").hide();
 
	var subject1 = JSON.parse("[" + subject + "]");
	var marks1 = JSON.parse("[" + marks + "]");

	new Chart(document.getElementById("barChart"), {
		type: 'bar',
		data: {
		  labels: subject1,
		  datasets: [
			{
			  label: "Number of Days",
			  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			  data: marks1
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: ''
		  },
		  scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

};

function showLineChart(subject,marks){

	 $("#lineChart").show();	
	 $("#barChart").hide();
	 $("#pieChart").hide();
	 $("#doughnutChart").hide();
	 
	var subject1 = JSON.parse("[" + subject + "]");
	var marks1 = JSON.parse("[" + marks + "]");

	new Chart(document.getElementById("lineChart"), {
		type: 'line',
		data: {
		  labels: subject1,
		  datasets: [
			{
			  label: "Number of Days",
			  borderColor: "#3e95cd",
			  fill: false,
			  data: marks1
			 
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: ''
		  },
		  scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

};

function showPieChart(subject,marks){
	
	$("#pieChart").show();	
 	$("#barChart").hide();
 	$("#lineChart").hide();
 	$("#doughnutChart").hide();
	
	var subject1 = JSON.parse("[" + subject + "]");
	var marks1 = JSON.parse("[" + marks + "]");

	new Chart(document.getElementById("pieChart"), {
		type: 'pie',
		data: {
		  labels: subject1,
		  datasets: [{
			label: "Population (millions)",
			backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			data: marks1
		  }]
		},
		options: {
		  title: {
			display: true,
			text: ''
		  }
		}
	});
	
};

function showDoughnutChart(subject,marks){

	$("#doughnutChart").show();	
 	$("#barChart").hide();
 	$("#lineChart").hide();
 	$("#pieChart").hide();
	
	var subject1 = JSON.parse("[" + subject + "]");
	var marks1 = JSON.parse("[" + marks + "]");

	new Chart(document.getElementById("doughnutChart"), {
		type: 'doughnut',
		data: {
		  labels: subject1,
		  datasets: [
			{
			  label: "Population (millions)",
			  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			  data: marks1
			}
		  ]
		},
		options: {
		  title: {
			display: true,
			text: ''
		  }
		}
	});

};

</script>
 	 	
</div><!-- /.content-wrapper -->  

<!--redirect your own url when clicking browser back button -->
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
                        
<?php include_once('footer.php');?>