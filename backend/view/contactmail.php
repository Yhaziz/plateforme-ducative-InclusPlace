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


<div class="content-wrapper">
	
    <section class="content-header">
    	<h1>
        All Contact Mail 
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> All Message</a></li>
         </ol>
     </section>

    
    <section class="content" > 
        <div class="row" id="table1">
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Contact Me</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>ID</th>
                            	<th>fname</th>
								<th>email</th>
                            	<th>téléphone</th>
								<th>sujet</th>
								<th>message</th>
                            	<th>Action</th>
                            </thead>
                            <tbody>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM contact_me";
$result=mysqli_query($conn,$sql);
$count = 0;
$cant_remove1=0;


if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
    	$count++;
		$id=$row['id'];
?>   
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td id="td1_<?php echo $row['id']; ?>"><?php echo $row['fname']; ?></td>
									<td id="td2_<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
									<td id="td3_<?php echo $row['id']; ?>"><?php echo $row['téléphone']; ?></td>
									<td id="td4_<?php echo $row['id']; ?>"><?php echo $row['sujet']; ?></td>
									<td id="td5_<?php echo $row['id']; ?>"><?php echo $row['message']; ?></td>
                                    <td>

<?php
echo ' <a href="#" class="confirm-delete btn btn-danger btn-xs"  data-id="' . $id . '">Delete</a>';


?>
                                    </td>
                                </tr>
<?php } } ?>
                            </tbody>
                        </table>
                	</div>
                </div>
            </div>
        </div>
    </section> 



<script>

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
	$('#modalViewform').modal('hide');
	$('#deleteConfirm').data('id1', id).modal('show');
});

$('#btnYes').click(function() {

  
    var id = $('#deleteConfirm').data('id1');	
	var do1 = "delete_record";
	var table_name="contact_me";	
		
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();

  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200){
				
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){
					
					$("#deleteConfirm").modal('hide');	        		
					var page = myArray[1];
				
					var xhttp1 = new XMLHttpRequest();
						xhttp1.onreadystatechange = function(){		
				
							if (this.readyState == 4 && this.status == 200) {
										
								document.getElementById('table1').innerHTML = this.responseText;
								cTablePage(page);
								Delete_alert(myArray[0]);
							
							}
								
						}
						xhttp1.open("GET", "show_contactmail_table.php" , true);												
  						xhttp1.send(); 
				
				}
		
				if(myArray[0]==2){
					
					$("#deleteConfirm").modal('hide');
					Delete_alert(myArray[0]);
				
				}


    		}
			
  		};
			
    	xhttp.open("GET", "../model/delete_record.php?id=" + id + "&do="+do1 + "&table_name="+table_name  + "&page="+currentPage , true);												
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



function scrollDown(){
	
	window.scrollTo(0,document.body.scrollHeight);
}

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