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

.form-control-feedback {
   pointer-events: auto;
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s;
	
}

.modal-content1 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 25%; 
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


.cal-table{
	
	width:100%;
	padding:0;
	margin:0;	
	
}

#calendar_dates{
	
	padding:10px;
	margin-left:10px;
	width:97%;	
	
}

.tHead{
	
	height:40px;
	background-color:#8e1c82;
	color:#FFF;
	text-align:center;
	border:1px solid #FFF;
	width:70px;
}

.cal-tr{
	
	height:75px;
	
}

.td_no_number{
	border:1px solid white;
	width:70px;
	background-color:#979045;
	padding:0;
}

.cal-number-td{
	border:1px solid white;
	width:70px;
	background-color:#677be2;
	color:white;	
}


.h5{
	color:#FFF;
	display: inline-block;
	background:#636;
	width:20px;
	height:20px;	
	font-size:14px;
	font-weight:bold;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	text-align:center;
	float:right;
	padding-top:3px;
	margin-bottom:40%;
	
}
.div-event-c{
	margin-top:45%;
	
}

#cal_month{
	width:20%;
	border-radius:5%;
	
	padding:0;
}
#cal_year{
	width:15%;
	border-radius:5%;
	margin-left:5px;
	padding:0;
}

#btnShow{
	
	margin-left:5px;
	
}



</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	My Events
        	<small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">My Events</a></li>
    	</ol>
	</section>
<?php 

$my_index=$_SESSION['index_number'];
$my_type=$_SESSION['type'];


?>   

  <!-- table for view all records -->     
	<section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000132-1-->    
        	<div class="col-md-8">
            	<div class="box">
                    <div id="calendar-container">
                        <div id="calendar-header">
                           	<center><h2> <a href="#" class="" onClick="ShowEvents('P','<?php echo $my_index; ?>','<?php echo $my_type; ?>')" id="btn1">&#8249;</a>
                            <span id="calendar_month_year"></span>
                            <a href="#" class="" onClick="ShowEvents('N','<?php echo $my_index; ?>','<?php echo $my_type; ?>')" id="btn2">&#8250;</a></h2></center>
        				</div>
                        <div class="col-md-4">
                                
						</div>
                        <div class="col-md-7" >
                            <select class="form-control col-md-3 " id="cal_month" ><!--MSK-000107-->
							<option value="0" <?php if(date("n") == 1) echo "selected"; ?>>January</option>
                                <option value="1"  <?php if(date("n") == 2) echo "selected"; ?>>February</option>
                                <option value="2"  <?php if(date("n") == 3) echo "selected"; ?>>March</option>
                                <option value="3"  <?php if(date("n") == 4) echo "selected"; ?>>April</option>
                                <option value="4"  <?php if(date("n") == 5) echo "selected"; ?>>May</option>
                                <option value="5"  <?php if(date("n") == 6) echo "selected"; ?>>June</option>
                                <option value="6"  <?php if(date("n") == 7) echo "selected"; ?>>July</option>
                                <option value="7"  <?php if(date("n") == 8) echo "selected"; ?>>August</option>
                                <option value="8"  <?php if(date("n") == 9) echo "selected"; ?>>September</option>
                                <option value="9"  <?php if(date("n") == 10) echo "selected"; ?>>October</option>
                                <option value="10"  <?php if(date("n") == 11) echo "selected"; ?>>November</option>
                                <option value="11"  <?php if(date("n") == 12) echo "selected"; ?>>December</option>
                            </select> 
                                                       
                            <select class="form-control col-md-3" id="cal_year" >
								<option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>
                             
                            </select> 
                                                       
                           <button type="button" class="btn btn-info btn-md"  id="btnShow" onClick="ShowEvents1(this)">
                                <i class="fa fa-calendar" aria-hidden="true"></i> Show<!--MSK-000138-->
                           </button>
                           <input type="hidden" id="my_index" value="<?php echo $my_index; ?>">  
                           <input type="hidden" id="my_type" value="<?php echo $my_type; ?>">                         
                        </div>
                        <div class="col-md-1">
                        	<a href="#" onClick="createEvents('<?php echo $my_index; ?>','<?php echo $my_type; ?>')" class="btn btn-sm  bg-orange-active pull-right " data-id="" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Create Event </a><!-- MSK-00094--> 
                        </div>
                        <br><br>
                        
                        <div class="row" id="row">
                        
                        </div>
       				</div>
        		</div>  
        	</div>             
		</div>
	</section>
    
    <div id="cEvent">
    
    </div>  
    
<script>



var m2 = 0;

function ShowEvents(status,my_index,my_type){
	
	
	var d = new Date();    
	var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
		
	var m1 = d.getMonth(); 
	var y1 = d.getFullYear(); 
		
	if(status == 'K'){
		var m3 = m1;
	}
		
	if(status == 'N'){
		m2++;
		var m3 = m1 + m2;
	}
				
	if(status == 'P'){
		m2--;
		var m3 = m1 + m2;
	}
				
	if(m3 == 0){
		$('#btn1').css('pointer-events', 'none');
	}
				
	if(m3 == 11){
		$('#btn2').css('pointer-events', 'none');
	}
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200){
					//MSK-00107 
				document.getElementById('row').innerHTML = this.responseText;//MSK-000132
				
				var start_date = $('#start_date').val().split(',');
				var end_date = $('#end_date').val().split(',');
				var color = $('#color').val().split(',');
				var event_id = $('#event_id').val().split(',');
			
				var month = m3; 
				var year = y1;  
				var first_date = month_name[month] + " " + 1 + " " + year;
				
				var tmp = new Date(first_date).toDateString();
				
				
				var first_day = tmp.substring(0,3); //Thu
				var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
				var day_no = day_name.indexOf(first_day);  //4
				var days = new Date(year, month+1, 0).getDate(); //31
				// Thu Aug 31 2017...
				
				var calendar = get_calendar(day_no,days);
				
				document.getElementById("calendar_month_year").innerHTML = month_name[month];
				document.getElementById("calendar_dates").appendChild(calendar);
				 
				var count1 = start_date.length;
				var k=0;
				for(var i=0; i<count1; i++){
					var s_date = parseInt(start_date[i], 10);
					var e_date = parseInt(end_date[i], 10);
					
					var count = e_date - s_date;
				
					for(var j=0; j<=count; j++){
					
						k = s_date+j;
						
						$("#td_"+k).append('<div class="div-event-c" style="background-color:'+color[i]+'"><a id="event_"+'+[i]+' style="color:white;" href="#" onclick="showEvent('+event_id[i]+')"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>');
													
					}
					
					
				}

			}
				
		};	
		xhttp.open("GET", "event1.php?year=" + y1 + "&month="+m3 + "&my_type="+my_type + "&my_index="+my_index , true);	
		xhttp.send();//MSK-00105-Ajax End
		
						
};

function ShowEvents1(){
	
	var year = $("#cal_year").val();
	var month = $("#cal_month").val();
	
	var my_index = $("#my_index").val();
	var my_type = $("#my_type").val();
	
	
	var d = new Date();    //new Date('2017','08','25');
	var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
		
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200){
					//MSK-00107 
				document.getElementById('row').innerHTML = this.responseText;//MSK-000132
				
				var start_date = $('#start_date').val().split(',');
				var end_date = $('#end_date').val().split(',');
				var color = $('#color').val().split(',');
				var event_id = $('#event_id').val().split(',');
			
				var first_date = month_name[month] + " " + 1 + " " + year;
				
				var tmp = new Date(first_date).toDateString();
				// Tue Aug 01 2017...
				
				var first_day = tmp.substring(0,3); //Thu
				var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
				var day_no = day_name.indexOf(first_day);  //4
				var days = new Date(year, month+1, 0).getDate(); //31
				// Thu Aug 31 2017...
				
				var calendar = get_calendar(day_no,days);
				
				document.getElementById("calendar_month_year").innerHTML = month_name[month];
				document.getElementById("calendar_dates").appendChild(calendar);
				 
				var count1 = start_date.length;
				var k=0;
				for(var i=0; i<count1; i++){
					var s_date = parseInt(start_date[i], 10);
					var e_date = parseInt(end_date[i], 10);
					
					var count = e_date - s_date;
				
					for(var j=0; j<=count; j++){
					
						k = s_date+j;
						
						$("#td_"+k).append('<div class="div-event-c" style="background-color:'+color[i]+'"><a id="event_"+'+[i]+' style="color:white;" href="#" onclick="showEvent('+event_id[i]+')"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>');
													
					}
					
					
				}

			}
				
		};	
		xhttp.open("GET", "event1.php?year=" + year + "&month="+month + "&my_type="+my_type + "&my_index="+my_index , true);	
		xhttp.send();//MSK-00105-Ajax End
		
						
};

</script>

	<div id="showEvent">
    
    </div>
    
<script>

function showEvent(event_id){
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('showEvent').innerHTML = this.responseText;//MSK-000132
				$('#modalviewEvent').modal('show');
			}
				
		};	
		
		xhttp.open("GET", "show_events.php?event_id="+event_id , true);												
		xhttp.send();//MSK-00105-Ajax End
};

function createEvents(my_index,my_type){
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
					//MSK-00107 
				document.getElementById('cEvent').innerHTML = this.responseText;//MSK-000132
				
       			$('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        
				$('#daterange-btn').daterangepicker(
					{
					  ranges: {
						'Today': [moment(), moment()],
						'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						'This Month': [moment().startOf('month'), moment().endOf('month')],
						'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					  },
					  startDate: moment().subtract(29, 'days'),
					  endDate: moment()
					},
					function (start, end) {
					  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
					}
				);
				
				$('#modalcEvent').modal('show');
				$(".my-colorpicker2").colorpicker();
				
				$("#divClassroom").hide();
				

				$("#category").change(function(){
					var category = this.value;
					if(category == 3 || category == 4 ){
						$("#divClassroom").show();
					}else{
						$("#divClassroom").hide();
					}
				});
				
				$("form").submit(function (e) {
					
					var title = $('#title').val();
					var category = $('#category').val();
					var datetime = $('#reservationtime').val();
					var note = $('#note').val();
					var color = $('#colorF').val();
					
					if(title == ''){
						//MSK-00099-name
						$("#btnSubmit").attr("disabled", true);
						$('#divTitle').addClass('has-error has-feedback');	
						$('#divTitle').append('<span id="spanTitle" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The title is required" ></span>');	
							
						$("#title").keydown(function() {
							//MSK-00100-name  
							$("#btnSubmit").attr("disabled", false);	
							$('#divTitle').removeClass('has-error has-feedback');
							$('#spanTitle').remove();
							
						});
							
					}
					
					if(category == 0){
						//MSK-00099-name
						$("#btnSubmit").attr("disabled", true);
						$('#divCategory').addClass('has-error');
						$('#divCategory1').addClass('has-error has-feedback');	
						$('#divCategory1').append('<span id="spanCategory" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The category is required" ></span>');	
							
						$("#category").change(function() {
							//MSK-00100-name  
							$("#btnSubmit").attr("disabled", false);	
							$('#divCategory').removeClass('has-error');
							$('#divCategory1').removeClass('has-error has-feedback');
							$('#spanCategory').remove();
							
						});
							
					}
					
					if(datetime == ''){
						//MSK-00099-name
						$("#btnSubmit").attr("disabled", true);
						$('#divDate').addClass('has-error has-feedback');	
						$('#divDate').append('<span id="spanDate" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The date & time is required" ></span>');	
							
						$("#reservationtime").change(function() {
							//MSK-00100-name  
							$("#btnSubmit").attr("disabled", false);	
							$('#divDate').removeClass('has-error has-feedback');
							$('#spanDate').remove();
							
						});
							
					}
					
					if(note == ''){
						//MSK-00099-name
						$("#btnSubmit").attr("disabled", true);
						$('#divNote').addClass('has-error has-feedback');	
						$('#divNote').append('<span id="spanNote" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The note is required" ></span>');	
							
						$("#note").keydown(function() {
							//MSK-00100-name  
							$("#btnSubmit").attr("disabled", false);	
							$('#divNote').removeClass('has-error has-feedback');
							$('#spanNote').remove();
							
						});
							
					}
					
					
					
					if(title == '' || category == 0 || datetime == '' || note == '' || color == ''){
						//MSK-000098- form validation failed
						$("#btnSubmit").attr("disabled", true);
						e.preventDefault();
						return false;
							
					}else{
						$("#btnSubmit").attr("disabled", false);
					}
					
					
				});

				
			}
				
		};	
			
		xhttp.open("GET", "create_events.php?my_type=" + my_type + "&my_index="+my_index, true);												
		xhttp.send();//MSK-00105-Ajax End
	
};


function get_calendar(day_no,days){
	
	var table = document.createElement('table');
	var tr = document.createElement('tr');
	
	table.className = 'cal-table';
	
	// row for the day letters
	for(var c=0; c<=6; c++){
		
		var th = document.createElement('th');
		th.innerHTML =  ['Sunday','Monday','Tuesday','Wednesday','Thuresday','Friday','Saturday'][c];
		tr.appendChild(th);
		th.className = "tHead";
		
	}
	
	table.appendChild(tr);
	
	//create 2nd row
	
	tr = document.createElement('tr');
	
	var c;
	for(c=0; c<=6; c++){
		
		if(c== day_no){
			break;
		}
		var td = document.createElement('td');
		td.innerHTML = "";
		tr.appendChild(td);
		td.className = "td_no_number";
		tr.className = 'cal-tr';
	}
	
	var count = 1;
	for(; c<=6; c++){
		
		var td = document.createElement('td');
		td.id = "td_"+count;
		td.className = 'cal-number-td';
		tr.appendChild(td);
		tr.className = 'cal-tr';
		
		var h5 = document.createElement('h5');
		h5.className = 'h5';
		td.appendChild(h5);
		h5.innerHTML = count;
		count++;
		
	}
	table.appendChild(tr);
	
	//rest of the date rows
	
	for(var r=3; r<=7; r++){
		
		tr = document.createElement('tr');
		for(var c=0; c<=6; c++){
			
			if(count > days){
				for(; c<=6; c++){
		
					var td = document.createElement('td');
					td.innerHTML = "";
					tr.appendChild(td);
					td.className = "td_no_number";
					tr.className = 'cal-tr';
				}
				
				table.appendChild(tr);
				return table;
			}
			
			var td = document.createElement('td');
			//td.innerHTML = count;
			td.id = "td_"+count;
			//td.style.padding = 0;
			td.className = 'cal-number-td';
			
			tr.appendChild(td);
			
			var h5 = document.createElement('h5');
			h5.className = 'h5';
			td.appendChild(h5);
			h5.innerHTML = count;
			count++;
			tr.className = 'cal-tr';
			
		}
		table.appendChild(tr);
		
	}
	
};	
</script>

<div class="modal msk-fade" id="modaluEvent" tabindex="-1" role="dialog" aria-labelledby="modalInsertform" aria-hidden="true">  
  	<div class="modal-dialog ">
    	<div class="container msk-modal-content"><!--modal-content --> 
      		<div class="row ">	
           		<div class="col-md-6">
            		<div class="panel panel-primary">
        				<div class="panel-heading">               
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="cboxUncheck()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          					<h3 class="panel-title">Edit Event</h3>
   						</div>
						   <form action="../index.php" method="post" id="form1" class="form-horizontal" enctype="multipart/form-data">
            				<div class="panel-body"> <!-- Start of modal body--> 
                                <div class="form-group" id="divTitleUpdate" >
                                	<div class="col-md-3">
                                    	<label for="" >Title:</label>
                                    </div>
                                    
                                    <div class="input-group col-md-8">
                                    	<input type="text" class="form-control" name="title" id="title_update" autocomplete="off">
                                    </div>      						
                                </div>
								<div class="form-group " id="divTitle">
                                	<div class="col-md-3">
                                    	<label for="" >Creator Name:</label>
                                    </div>
                                    
                                    <div class="input-group col-md-8">
                                    	<input type="text" class="form-control" name="creator_name" id="creator_name" autocomplete="off">
                                    </div>      						
                                </div>
								<div class="form-group " id="divTitle">
                                	<div class="col-md-3">
                                    	<label for="" >Location:</label>
                                    </div>
                                    
                                    <div class="input-group col-md-8">
                                    	<input type="text" class="form-control" name="location" id="location" autocomplete="off">
                                    </div>      						
                                </div>
                                <div class="form-group" id="divCategoryUpdate">
                               		<div class="col-md-3">
                                    	<label>Category:</label>
                                    </div>
                                    <div class="input-group col-md-4" id="divCategoryUpdate1">
                                        <select name="category" class="form-control" id="category_update" style="width:105%;"><!--MSK-000107-->
											<option value="0">Select Category</option>
                                            <option value="1">All</option>
                                    		<option value="2">All Teachers & Student</option>
                                            <option value="3">All Teachers & Specific Classrooms</option>
                                            <option value="4">Only Specific Classrooms</option>
                                            <option value="5">Only Teachers</option>
                                            <option value="6">Only Students</option>
                                            <option value="7">Only Parents</option>
                                		</select> 
                            		</div> 
                                </div>
                                <div class="form-group" id="divClassroomUpdate">
                               		<div class="col-md-3">
                                    	<label>Classroom:</label>
                                    </div>
                                    <div class="input-group col-md-4" id="divClassroomUpdate1">
                                   		<table class="table borderless">
                                        	<tbody>   
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM classroom";
$count=0;
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
		$count++;
?> 
                                                <tr>
                                                    <td><input type="checkbox" name="checkbox1[]" id="ck_<?php echo $count; ?>" value="<?php echo $row['id']; ?>" ></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                </tr>
<?php }} ?>
                                			</tbody>
                                     	</table>       
                            		</div> 
                            	</div> 
								<div class="form-group " id="divDate">
                                	<div class="col-md-3">
                                    	<label>Date Creation:</label>
                                    </div>
                                    <div class="input-group col-md-8">
                                    	<div class="input-group-addon">
                                        	<i class="fa fa-calendar"></i>
                                         </div>
                                    	<input type="date" class="form-control pull-right" id="date_creation" name="date_creation_range" autocomplete="off">
                                    </div>
                              	</div> 
								<!--Event start --> 
								<div class="form-group " id="divDate">
                                	<div class="col-md-3">
                                    	<label>Start Date:</label>
                                    </div>
                                    <div class="input-group col-md-8">
                                    	<div class="input-group-addon">
                                        	<i class="fa fa-calendar"></i>
                                         </div>
										 <input type="date" class="form-control pull-right" id="start_date" name="start_date_range" autocomplete="off">

                                    </div>
                              	</div>
								<!--Event end --> 
								<div class="form-group " id="divDate">
                                	<div class="col-md-3">
                                    	<label>End Date:</label>
                                    </div>
                                    <div class="input-group col-md-8">
                                    	<div class="input-group-addon">
                                        	<i class="fa fa-calendar"></i>
                                         </div>
										 <input type="date" class="form-control pull-right" id="end_date" name="end_date_range" autocomplete="off">
                                    </div>
                              	</div>
								<!--Event time statrt --> 
								<div class="form-group " id="divDate">
                                	<div class="col-md-3">
                                    	<label>Start Time:</label>
                                    </div>
                                    <div class="input-group col-md-8">
                                    	<div class="input-group-addon">
                                        	<i class="fa fa-clock"></i>
                                         </div>
                                    	<input type="time" class="form-control pull-right" id="start_time" name="start_time_range" autocomplete="off">
                                    </div>
                              	</div>
								<!--Event time end --> 
								<div class="form-group " id="divDate">
                                	<div class="col-md-3">
                                    	<label>End Time:</label>
                                    </div>
                                    <div class="input-group col-md-8">
                                    	<div class="input-group-addon">
                                        	<i class="fa fa-clock"></i>
                                         </div>
                                    	<input type="time" class="form-control pull-right" id="end_time" name="end_time_range" autocomplete="off">
                                    </div>
                              	</div>
                                <div class="form-group " id="divNoteUpdate">
                               		<div class="col-md-3">
                                    	<label>Note:</label>
                                    </div>
                                    <div class="input-group col-md-8">
                                        <textarea class="form-control" id="note_update" name="note" rows="3"></textarea>
                            		</div> 
                            	</div> 
                                <div class="form-group " >
                               		<div class="col-md-3">
                                    	<label>Color:</label>
                                    </div>
                                    <div class="input-group col-md-4 my-colorpicker2">
                                      <input type="text" class="form-control" name="color" id="color_update" onchange="TextChange()">
                                      <div class="input-group-addon">
                                        <i></i>
                                      </div>
                                    </div><!-- /.input group -->
                            		
                            	</div> 
								<div class="col-xs-5">
                                        	<div class="form-group" id="divPhoto">
                                                <div class="col-xs-3">
                                                    <label>Evnet Image</label>
                                                </div>                            
                                                <div class="col-xs-3" id="divPhoto1" style="height:150px;">
												<input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;" />
                                                </div>
                                            </div>
                                        </div>
            				</div><!--/.modal body-->
            				<div class="panel-footer bg-blue-active">
                            	<input type="hidden" name="my_type" id="my_type_update" value="">
                            	<input type="hidden" name="event_id" id="id_update" value=""/>
            					<input type="hidden" name="do" value="update_events"/>
                    			<button type="submit" class="btn btn-info btnS" id="btnSubmit1" style="width:100%;">Update</button>
             				</div>
             			</form>      
      				</div><!--/.panel-->
         		</div><!--/.col-md-3 --> 
            </div><!--/.row-->      
        </div><!-- /.modal-content -->  		 
  	</div><!-- /.modal-dialog -->   
</div><!--/.modal-modalInsertform -->

<script>

function showUEventmodal(event_id) {
    $("#modalviewEvent").modal('hide');

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var eventData = JSON.parse(xhttp.responseText);


            $("#modaluEvent").modal('show');

            document.getElementById("id_update").value = eventData.id;
            document.getElementById("title_update").value = eventData.title;
            document.getElementById("note_update").value = eventData.note;
            document.getElementById("color_update").value = eventData.color;
            document.getElementById("category_update").value = eventData.category;
            document.getElementById("creator_name").value = eventData.creator_name;
            document.getElementById("location").value = eventData.location;
            document.getElementById("date_creation").value = eventData.date_creation;

            // Set classroom checkboxes based on eventData.classroom_id (you'll need to adapt this)
            if (eventData.category == 3 || eventData.category == 4) {
                $("#divClassroomUpdate").show();
                var classroomIds = eventData.classroom_id.split(',');
                classroomIds.forEach(function (classroomId) {
                    $('#ck_' + classroomId).prop('checked', true);
                });
            } else {
                $("#divClassroomUpdate").hide();
            }

            document.getElementById("start_date").value = eventData.start_date;
			document.getElementById("end_date").value = eventData.end_date;
            document.getElementById("start_time").value = eventData.start_time;
            document.getElementById("end_time").value = eventData.end_time;

            // Handle image_name display or upload, depending on your implementation.

            $('#reservationtime_update').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                format: 'MM/DD/YYYY h:mm A',
                startDate: eventData.start_date + ' ' + eventData.start_time,
                endDate: eventData.end_date + ' ' + eventData.end_time
            });

            $(".my-colorpicker2").colorpicker();

            $("#form1").submit(function (e) {
                var title = $('#title_update').val();
                var category = $('#category_update').val();
                var datetime = $('#reservationtime_update').val();
                var note = $('#note_update').val();
                var color = $('#color_update').val();

                if (title === '' || category == 0 || datetime === '' || note === '' || color === '') {
                    // Form validation failed
                    e.preventDefault();
                    // You can display an error message here if needed.
                    return false;
                }
            });
        }
    };

    xhttp.open("GET", "../model/get_events.php?event_id=" + event_id, true);
    xhttp.send();
}





					

function cboxUncheck(){
	window.location.reload();
};

</script>

<!-- //MSK-000131 Modal-Delete Confirm Popup -->
	<div class="modal msk-fade " id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete</h4>
      			</div>

				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to remove this Event?
        		</div>
      			<div class="modal-footer">
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000132 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>

<script>

//$('body').on('click', '.confirm-delete', function (e){	
function deleteEvent(event_id){
//MSK-000129
	$('#modalviewEvent').modal('hide');
	$('#deleteConfirm').data('id1', event_id).modal('show');//MSK-000130
 	
};

$('#btnYes').click(function() {
//MSK-000133
     
    var id = $('#deleteConfirm').data('id1');	
		
	var do1 = "delete_record";	
	var table_name= "events";//give data table name
			
	var xhttp = new XMLHttpRequest();//MSK-000134-Ajax Start  
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-000135
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){//MSK-000136
					
					$('#deleteConfirm').modal('hide');	
					window.location.reload();	
				}
		
				if(myArray[0]==2){//MSK-000140
					
				}

    		}
			
  		};	
		
    	xhttp.open("GET", "../model/delete_record1.php?id=" + id + "&table_name="+table_name + "&do="+do1 , true);												
  		xhttp.send();//MSK-000134-Ajax End
	 			   		
});
</script> 
<?php 

$my_index=$_SESSION['index_number'];
$my_type=$_SESSION['type'];

echo '<script>','ShowEvents("K",'.$my_index.',"'.$my_type.'");','</script>';

?>

<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>

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