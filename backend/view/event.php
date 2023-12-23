<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    
    header('location:../index.php');
    exit;
}
?>

<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>

<style>


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


.tHead{
	
	height:40px;
	background-color:#e62d11;
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
	background-color:#a3d5ee;
	padding:0;
}

#td_1{
	border:1px solid white;
	width:70px;
	
	background-color:#e8eb0d;
	color:white;
	
}

.cal-number-td{
	border:1px solid white;
	width:70px;
	background-color:#4c9db1;
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


<div class="content-wrapper">
	
    <section class="content-header">
    	<h1>
        	Events
        	<small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">My Events</a></li>
    	</ol>
	</section>
   

    
    
	<section class="content" > 
    	<div class="row" id="table1">
        	<div class="col-md-8">
            	<div class="box">
                    <div id="calendar-container">
                        <div id="calendar-header">
                           	<center><h2> <a href="#" class="" onClick="test123('J')" id="btn1">&#8249;</a>
                            <span id="calendar_month_year"></span>
                            <a href="#" class="" onClick="test123('S')" id="btn2">&#8250;</a></h2></center>
                  			<div class="row" id="row5">
                            
                            </div>
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

function test123(status,my_index,my_type){
		
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200){
					
				document.getElementById('row5').innerHTML = this.responseText;
				
				var start_date = $('#start_date').val().split(',');
				var end_date = $('#end_date').val().split(',');
				var color = $('#color').val().split(',');
				var event_id = $('#event_id').val().split(',');
				
				
    						
				var d = new Date();    
				var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
		
				var m1 = d.getMonth(); 
				var y1 = d.getFullYear(); 
		
				if(status == 'K'){
					var m3 = m1;
				}
		
				if(status == 'S'){
					m2++;
					var m3 = m1 + m2;
				}
				
				if(status == 'J'){
					
					m2--;
					var m3 = m1 + m2;
				}
				
				if(m3 == 0){
					$('#btn1').css('pointer-events', 'none');
				}
				
				if(m3 == 11){
					$('#btn2').css('pointer-events', 'none');
				}
				
				var month = m3; 
				var year = y1; 
				var first_date = month_name[month] + " " + 1 + " " + year;
				
				
				
				var tmp = new Date(first_date).toDateString();
				
				
				var first_day = tmp.substring(0,3); 
				var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
				var day_no = day_name.indexOf(first_day);  
				var days = new Date(year, month+1, 0).getDate(); 
				
				
				var calendar = get_calendar(day_no,days);
				
				document.getElementById("calendar_month_year").innerHTML = month_name[month];
				document.getElementById("calendar_dates").appendChild(calendar);
				
				  $("td").dblclick(function() {
					  var tdval =  $(this).text(); 
					  if (tdval === ''){
						 
					  }else{
						  test3(tdval); 
					  }
					  
    			 });
				  				
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
		
		xhttp.open("GET", "event1.php?" , true);												
		xhttp.send();
		
						
}
</script>

	<div id="showEvent">
    
    </div>
<script>
function showEvent(event_id){
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('showEvent').innerHTML = this.responseText;
				$('#modalviewEvent').modal('show');
			}
				
		};	
		
		xhttp.open("GET", "show_events.php?event_id="+event_id , true);												
		xhttp.send();
};

function test3(tdval){
	
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
					
				document.getElementById('cEvent').innerHTML = this.responseText;
				
				
				 
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
				var type = $("#type").value;
				
				$("#category").change(function(){
					var category = this.value;
					if(category == 1 || category == 3){
						$("#type").val(1);
						
						$("#type option[value=0]").hide();
						$("#type option[value=2]").hide();
						$("#divClassroom").hide();
					}
					if(category == 2 ){
						
						$("#type option[value=0]").show();
						$("#type option[value=1]").show();
						$("#type option[value=2]").show();
						
						
					}
				});
				
				$("#type").change(function(){
					var type = this.value;
					if(type == 2){
						$("#divClassroom").show();
						
					}else{
						$("#divClassroom").hide();
					}
				});
			}
				
		};	
			
		xhttp.open("GET", "create_events.php?day="+tdval, true);												
		xhttp.send();
	
	
}

function get_calendar(day_no,days){
	
	var table = document.createElement('table');
	var tr = document.createElement('tr');
	
	table.className = 'cal-table';
	
	
	for(var c=0; c<=6; c++){
		var th = document.createElement('th');
		th.innerHTML =  ['Sunday','Monday','Tuesday','Wednesday','Thuresday','Friday','Saturday'][c];
		tr.appendChild(th);
		th.className = "tHead";
		
		
	}
	
	table.appendChild(tr);
	
	
	
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
	
	
	;
	for(var r=3; r<=7; r++){
		tr = document.createElement('tr');
		for(var c=0; c<=6; c++){
			if(count > days){
				table.appendChild(tr);
				return table;
			}
			
			var td = document.createElement('td');
			
			td.id = "td_"+count;
			
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
    	
    	<div class="container msk-modal-content">
      		<div class="row ">	
           		<div class="col-md-6">
            		<div class="panel panel-primary">
        				<div class="panel-heading">               
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="cboxUncheck()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          					<h3 class="panel-title">Edit Event</h3>
   						</div>
						   <form action="../index.php" method="post" id="" class="form-horizontal" enctype="multipart/form-data">
            				<div class="panel-body"> 
                               
                                <div class="form-group" >
                                	<div class="col-md-3">
                                    	<label for="" >Title:</label>
                                    </div>
                                    
                                    <div class="input-group col-md-8">
                                    	<input type="text" class="form-control" name="title" id="title_update" autocomplete="off">
                                    </div>      						
                                </div>
                                
                                <div class="form-group">
                               		<div class="col-md-3">
                                    	<label>Category:</label>
                                    </div>
                                    <div class="input-group col-md-4">
                                        <select name="category" class="form-control" id="category_update" style="width:105%;">
                                            
                                    
<?php
include_once('../controller/config.php');
    
$sql="SELECT * FROM event_category";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
                                    		<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>
                                		</select> 
                            		</div> 
                                </div>
                                <div class="form-group">
                               		<div class="col-md-3">
                                    	<label>Type:</label>
                                    </div>
                                    
                                 
                                    <div class="input-group col-md-4">
                                        <select name="category_type" class="form-control" id="type_update" style="width:105%;">
                                            
                                    
<?php
include_once('../controller/config.php');
    
$sql="SELECT * FROM event_category_type";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
                                    		<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>
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
                                                    <td><input type="checkbox" name="checkbox[]" id="ck_<?php echo $count; ?>" ></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                </tr>
<?php }} ?>
                                			</tbody>
                                     	</table>       
                            		</div> 
                            	</div> 
                                 <div class="form-group" >
                                	<div class="col-md-3">
                                    	<label>Date and time range:</label>
                                    </div>
                                    <div class="input-group col-md-8">
                                    	<div class="input-group-addon">
                                        	<i class="fa fa-clock-o"></i>
                                         </div>
                                    	<input type="text" class="form-control pull-right" id="reservationtime_update" name="date_time_range">
                                    </div>
                              	</div> 
                                <div class="form-group " id="divExamSubject">
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
                                      <input type="text" class="form-control" name="color" id="color_update">
                                      <div class="input-group-addon">
                                        <i></i>
                                      </div>
                                    </div>
                            		<br><br><br>
                            	</div> 
        					
                               
            				</div>
            
            				<div class="panel-footer bg-blue-active">
                            	
                            	<input type="hidden" name="event_id" id="id_update" value=""/>
            					<input type="hidden" name="do" value="update_events"/>
                    			<button type="submit" class="btn btn-info btnS" id="btnSubmit4" style="width:100%;">Update</button>
             				</div>
             			</form>      
      				</div>
         		</div>
            </div>
        </div>
  	</div>
</div>


  
<script>

function showUEventmodal(event_id){
	
	$("#modalviewEvent").modal('hide');
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
				var myArray = eval(xhttp.responseText);
				
				$("#modaluEvent").modal('show');
				
				var classroom_id = myArray[6];
				
				if(classroom_id == ''){
					$("#divClassroomUpdate").hide();
				}else{
					$("#divClassroomUpdate").show();
					var g_id = classroom_id.split(',');
					
					var count = g_id.length;
				
					for(var i=1; i<count+1; i++){
						$('#ck_'+i).attr('checked', 'checked');
					}
					
					
				}
				
				
				document.getElementById("id_update").value = myArray[0];
				document.getElementById("title_update").value = myArray[1];
				document.getElementById("note_update").value = myArray[2];
				document.getElementById("color_update").value = myArray[3];
				document.getElementById("category_update").value = myArray[4];
				document.getElementById("type_update").value = myArray[5];
				
				
				
				var s_date = myArray[7].split(' ');
				var e_date = myArray[8].split(' ');
				
				var s_d = new Date(s_date[0]);
				var dd = s_d.getDate();
				var mm = s_d.getMonth()+1; 
				var yyyy = s_d.getFullYear();
				
				if(dd<10){
					dd='0'+dd;
				} 
				if(mm<10){
					mm='0'+mm;
				} 
				var s_d = mm+'/'+dd+'/'+yyyy;
				
				var e_d = new Date(e_date[0]);
				
				var dd1 = e_d.getDate();
				var mm1 = e_d.getMonth()+1; 
				
				var yyyy1 = e_d.getFullYear();
				if(dd1<10){
					dd1='0'+dd1;
				} 
				if(mm1<10){
					mm1='0'+mm1;
				} 
				var e_d = mm1+'/'+dd1+'/'+yyyy1;
				
				var d_range = s_d + ' '+s_date[1] + ' - ' + e_d + ' ' + e_date[1];
				
				document.getElementById("reservationtime_update").value = d_range;
				
				$('#reservationtime_update').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
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
				
				$(".my-colorpicker2").colorpicker();
				
			}
				
		};	
		
		xhttp.open("GET", "../model/get_events.php?event_id="+event_id , true);												
		xhttp.send();
	
};

function cboxUncheck(){
	window.location.reload();
};

</script>


	<div class="modal msk-fade " id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete</h4>
      			</div>

				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to leave this Student?
        		</div>
      			<div class="modal-footer">
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a>
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>

<script>


function deleteEvent(event_id){

	$('#modalviewEvent').modal('hide');
	$('#deleteConfirm').data('id1', event_id).modal('show');
 	
};

$('#btnYes').click(function() {

     
    var id = $('#deleteConfirm').data('id1');	
		
	var do1 = "delete_record";	
	var table_name= "events";
			
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {
				
				var myArray = eval( xhttp.responseText );
					
					
				if(myArray[0]==1){
					
					$('#deleteConfirm').modal('hide');	
					window.location.reload();	
				}
		
				if(myArray[0]==2){
					
				}

    		}
			
  		};	
		
    	xhttp.open("GET", "../model/delete_record1.php?id=" + id + "&table_name="+table_name + "&do="+do1 , true);												
  		xhttp.send();
	 			   		
});
</script> 
<?php 

$my_index=$_SESSION['index_number'];
$my_type=$_SESSION['type'];


	
	echo '<script>','test123("K",'.$my_index.',"'.$my_type.'");','</script>';

?>


	
    <script src="../plugins/select2/select2.full.min.js"></script>
    
    <script src="../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    
    <script src="https:
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    
    <script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    
    
    <script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    
    <script src="../plugins/iCheck/icheck.min.js"></script>
    
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    
    <script src="../dist/js/app.min.js"></script>
    
    <script src="../dist/js/demo.js"></script>
    
   
      
   
      
      
</div>


               
<?php include_once('footer.php');?>
     
    
 