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
	padding:5px;
	margin-left:10px;
	width:95%;	
	
}

.tHead{
	
	height:40px;
	background-color:#0C356A;
	color:#FFF;
	text-align:center;
	border:1px solid #FFF;
	width:70px;
}

.cal-tr{
	height:50px;
	
}

.td_no_number{
	border:1px solid white;
	width:70px;
	background-color:#40F8FF;
	padding:0;
}



.cal-number-td{
	border:1px solid white;
	width:70px;
	background-color:#279EFF;
	color:white;
	
		
}

.h5{
	color:#080000;
	font-size:17px;
	font-weight:bold;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	text-align:center;
	padding-top:1px;
	margin-bottom:50%;
	
}
.div-event-c{
	margin-top:65%;
	height:17px;
	
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
        	Dashboard
        	<small>Preview</small>
			<h5><?php echo $name; ?>,<strong><span style="color:#cf4ed4;"> Welcome back! </span></strong></h5>
        </h1>
        <ol class="breadcrumb">
        	<li><a><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a >Dashboard</a></li>
    	</ol>
	</section>
    
<?php

include_once('../controller/config.php');

$my_index= $_SESSION["index_number"];

$sql="SELECT * FROM admin WHERE index_number='$my_index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['surname'];

?>  
    
    
    <section class="content">
      
      <div class="row">



	  <div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon" style="background-color: #884A39;"><i class="fa-solid fa-calendar-days" style="color: #ffffff;"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Today Is</span>
	  <br>
      <?php
      include_once('../controller/config.php');

      $currentDate = date("j , F , Y");
      ?>
      <span class="info-box-date"><?php echo $currentDate; ?></span>
    </div>

  </div>
  
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
					<span class="info-box-icon" style="background-color: #0079FF;"><i class="fa-solid fa-user-tie" style="color: #ffffff;"></i></span>
						<div class="info-box-content">
						<span class="info-box-text">Total Admin</span>
			<?php
			include_once('../controller/config.php');

			$sql10="SELECT count(id) FROM admin";
			$total_count10=0;

			$result10=mysqli_query($conn,$sql10);
			$row10=mysqli_fetch_assoc($result10);
			$total_count10=$row10['count(id)'];

			?> 
						<span class="info-box-number"><?php echo $total_count10; ?></span>
						</div>
						
					</div>
					
					</div>
					
		
	  <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
					<span class="info-box-icon" style="background-color: #7149C6;"><i class="fa-solid fa-school-circle-check" style="color: #ffffff;"></i></span>

						<div class="info-box-content">
						<span class="info-box-text">Total School</span>
			<?php
			include_once('../controller/config.php');

			$sql5="SELECT count(id) FROM school";
			$total_count5=0;

			$result5=mysqli_query($conn,$sql5);
			$row5=mysqli_fetch_assoc($result5);
			$total_count5=$row5['count(id)'];

			?> 
						<span class="info-box-number"><?php echo $total_count5; ?></span>
						</div>
						
					</div>
					
					</div>
					


		<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
					<span class="info-box-icon" style="background-color: #FC2947;"><i class="fa-solid fa-user" style="color: #ffffff;"></i></span>
						<div class="info-box-content">
						<span class="info-box-text">Total Parent</span>
			<?php
			include_once('../controller/config.php');

			$sql6="SELECT count(id) FROM parent";
			$total_count6=0;

			$result6=mysqli_query($conn,$sql6);
			$row6=mysqli_fetch_assoc($result6);
			$total_count6=$row6['count(id)'];

			?> 
						<span class="info-box-number"><?php echo $total_count6; ?></span>
						</div>
						
					</div>
					
					</div>
					


					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
					<span class="info-box-icon" style="background-color: #FE6244;"><i class="fa-solid fa-hands-holding-child" style="color: #ffffff;"></i></span>

						<div class="info-box-content">
						<span class="info-box-text">Total Avs</span>
			<?php
			include_once('../controller/config.php');

			$sql7="SELECT count(id) FROM avs";
			$total_count7=0;

			$result7=mysqli_query($conn,$sql7);
			$row7=mysqli_fetch_assoc($result7);
			$total_count7=$row7['count(id)'];

			?> 
						<span class="info-box-number"><?php echo $total_count7; ?></span>
						</div>
						
					</div>
					
					</div>
					



					<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
		  <span class="info-box-icon" style="background-color: #f7d702;"><i class="fa-solid fa-chalkboard-user" style="color: #ffffff;"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Teacher</span>
			<?php
			include_once('../controller/config.php');

			$sql2="SELECT count(id) FROM teacher";
			$total_count2=0;

			$result2=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_assoc($result2);
			$total_count2=$row2['count(id)'];

			?> 
						<span class="info-box-number"><?php echo $total_count2; ?></span>
						</div>
						
					</div>
					
					</div>
					





					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
					<span class="info-box-icon" style="background-color: #00235B;"><i class="fa-solid fa-graduation-cap" style="color: #ffffff;"></i></span>

						<div class="info-box-content">
						<span class="info-box-text">Total Student</span>
			<?php
			include_once('../controller/config.php');

			$sql8="SELECT count(id) FROM student";
			$total_count8=0;

			$result8=mysqli_query($conn,$sql8);
			$row8=mysqli_fetch_assoc($result8);
			$total_count8=$row8['count(id)'];

			?> 
						<span class="info-box-number"><?php echo $total_count8; ?></span>
						</div>
						
					</div>
					
					</div>
					



					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
					<span class="info-box-icon" style="background-color: #78C1F3;"><i class="fa-solid fa-user-doctor" style="color: #ffffff;"></i></span>

						<div class="info-box-content">
						<span class="info-box-text">Total Doctor</span>
			<?php
			include_once('../controller/config.php');

			$sql9="SELECT count(id) FROM doctor";
			$total_count9=0;

			$result9=mysqli_query($conn,$sql9);
			$row9=mysqli_fetch_assoc($result9);
			$total_count9=$row9['count(id)'];

			?> 
						<span class="info-box-number"><?php echo $total_count9; ?></span>
						</div>
						
					</div>
					
					</div>
					



					

        
        <div class="clearfix visible-sm-block"></div>

       
        
        
        
      </div>
      
      
	    
		<div class="row" id="table1">
        	<div class="col-md-8">
                <canvas id="barChart" width="800" height="438"></canvas>
  			</div>



<?php
include_once('../controller/config.php');
$current_year=date("Y");
$prefix="";
$monthly_income1="";
$monthly_income2=0;

$month=array("January","February","March","April","May","June","July","August","September","October","November","December");

for($i=0; $i<count($month); $i++){
	
	$sql="SELECT SUM(paid) FROM student_payment WHERE year='$current_year' AND month='$month[$i]'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$monthly_income1.=$prefix.'"'.$row['SUM(paid)'].'"';
	$prefix=',';
	
}

echo "<script>showBarChart('$monthly_income1');</script>";

?>            
          
        	<div class="col-md-4">
                <div id="calendar-container">
                	<div id="calendar-header">
                    	<center><h4><span id="calendar_month_year"></span> <?php echo $current_year; ?> </h4></center>
        			</div>
                    <input type="hidden" id="my_index" value="<?php echo $my_index; ?>">  
                    <input type="hidden" id="my_type" value="<?php echo $my_type; ?>">                         
                 </div>
                 <div class="row1" id="row">
                        
                 </div>
       		</div>
        </div>  
	
    	<div id="cEvent">
    
    	</div>  
    
<script>

var m2 = 0;

function ShowEvents(status,my_index,my_type){
	
	var d = new Date();    
	var month_name = ['January','February','March','April','May','June','July','August','September','October','November','December'];	
		
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
	
	var current_date = d.getDate();
		
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200){
					
				document.getElementById('row').innerHTML = this.responseText;
				
				var start_date = $('#start_date').val().split(',');
				var end_date = $('#end_date').val().split(',');
				var color = $('#color').val().split(',');
				var event_id = $('#event_id').val().split(',');
			
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
				$("#td_"+current_date).css("background-color", "#D5FFD0");
				 
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
		
		xhttp.open("GET", "all_events1.php?year=" + y1 + "&month="+m3 + "&my_type="+my_type + "&my_index="+my_index , true);	
		xhttp.send();
						
};

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
		
		xhttp.open("GET", "show_events1.php?event_id="+event_id , true);												
		xhttp.send();
};

function get_calendar(day_no,days){
	
	var table = document.createElement('table');
	var tr = document.createElement('tr');
	
	table.className = 'cal-table';
	
	for(var c=0; c<=6; c++){
		var th = document.createElement('th');
		th.innerHTML =  ['S','M','T','W','T','F','S'][c];
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

    

<?php 

$my_index=$_SESSION['index_number'];
$my_type=$_SESSION['type'];

echo '<script>','ShowEvents("K",'.$my_index.',"'.$my_type.'");','</script>';

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
    
<?php include_once('footer.php'); ?>