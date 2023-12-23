<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>




<?php
//Add Friend parent
include_once('../controller/config.php');
if(isset($_GET["friend_type"])&&($_GET["friend_type"]=="Parent")){
	$my_index=$_GET["my_index"];
	$my_type=$_GET["my_type"];
	
	$sql="SELECT * FROM parent WHERE index_number!='$my_index'";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)){
			
			$name=$row['surname'];
			$image=$row['image_name'];
			$friend_index=$row['index_number'];
			
			$status = null;
			$sql1 = "SELECT * FROM my_friends WHERE my_index='$my_index' and friend_index='$friend_index'";
			$result1 = mysqli_query($conn, $sql1);

			if ($result1 && mysqli_num_rows($result1) > 0) {
				$row1 = mysqli_fetch_assoc($result1);
				$status = $row1['_status'];
			} else {
				// Handle the case where the query didn't return any results
				// For example, you could set a default status or display an error message
			}
?>   
			<tr>
				<td><img src="../<?php echo $image; ?>" class="friend-image"></td>
				<td>
					<a href="#"onClick="friendProfile('Parent','<?php echo $friend_index; ?>')"><?php echo $name; ?> </a><br>
					<small>parent</small>
                </td>
				<td>
	 
					<?php 
					
						if($status == "Pending"){
							echo '<a href="#" onClick="confirmFriend1(this)" data-id="'.$my_type.','.$my_index.',Parent,'.$friend_index.'" class="btn btn-xs bg-green-active">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Confirm Friend Request'.'</i>'.'</a>'; 
						}
					
						if($status == "Friend_Request_Sent"){
							echo '<span class="label label-info label-lg">' .'Friend Request Sent'.'</span>'; 
						}
											
						if($status == ""){
							echo '<a href="#" onClick="addFriends(this)" data-id="'.$my_type.','.$my_index.',Parent,'.$friend_index.'" class="btn btn-xs bg-blue">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Add Friend'.'</i>'.'</a>';
						}
											
						if($status == "Friend"){
							echo '<span class="label label-lg bg-maroon">' .'Friend'.'</span>'; 
						}
									
					
					?>
	
				</td>
		   </tr>
<?php } } }?>




<?php
//Add Friend avs
include_once('../controller/config.php');
if(isset($_GET["friend_type"])&&($_GET["friend_type"]=="Avs")){
	$my_index=$_GET["my_index"];
	$my_type=$_GET["my_type"];
	
	$sql="SELECT * FROM avs WHERE index_number!='$my_index'";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)){
			
			$name=$row['surname'];
			$image=$row['image_name'];
			$friend_index=$row['index_number'];
			
			$status = null;
			$sql1 = "SELECT * FROM my_friends WHERE my_index='$my_index' and friend_index='$friend_index'";
			$result1 = mysqli_query($conn, $sql1);

			if ($result1 && mysqli_num_rows($result1) > 0) {
				$row1 = mysqli_fetch_assoc($result1);
				$status = $row1['_status'];
			} else {
				// Handle the case where the query didn't return any results
				// For example, you could set a default status or display an error message
			}
?>   
			<tr>
				<td><img src="../<?php echo $image; ?>" class="friend-image"></td>
				<td>
					<a href="#"onClick="friendProfile('Avs','<?php echo $friend_index; ?>')"><?php echo $name; ?> </a><br>
					<small>Avs</small>
                </td>
				<td>
	 
					<?php 
					
						if($status == "Pending"){
							echo '<a href="#" onClick="confirmFriend1(this)" data-id="'.$my_type.','.$my_index.',Avs,'.$friend_index.'" class="btn btn-xs bg-green-active">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Confirm Friend Request'.'</i>'.'</a>'; 
						}
					
						if($status == "Friend_Request_Sent"){
							echo '<span class="label label-info label-lg">' .'Friend Request Sent'.'</span>'; 
						}
											
						if($status == ""){
							echo '<a href="#" onClick="addFriends(this)" data-id="'.$my_type.','.$my_index.',Avs,'.$friend_index.'" class="btn btn-xs bg-blue">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Add Friend'.'</i>'.'</a>';
						}
											
						if($status == "Friend"){
							echo '<span class="label label-lg bg-maroon">' .'Friend'.'</span>'; 
						}
									
					
					?>
	
				</td>
		   </tr>
<?php } } }?>




<?php
//Add Friend Doctor
include_once('../controller/config.php');
if(isset($_GET["friend_type"])&&($_GET["friend_type"]=="Doctor")){
	$my_index=$_GET["my_index"];
	$my_type=$_GET["my_type"];
	
	$sql="SELECT * FROM doctor WHERE index_number!='$my_index'";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)){
			
			$name=$row['fname'];
			$image=$row['image_name'];
			$friend_index=$row['index_number'];
			
			$status = null;
			$sql1 = "SELECT * FROM my_friends WHERE my_index='$my_index' and friend_index='$friend_index'";
			$result1 = mysqli_query($conn, $sql1);

			if ($result1 && mysqli_num_rows($result1) > 0) {
				$row1 = mysqli_fetch_assoc($result1);
				$status = $row1['_status'];
			} else {
				// Handle the case where the query didn't return any results
				// For example, you could set a default status or display an error message
			}
?>   
			<tr>
				<td><img src="../<?php echo $image; ?>" class="friend-image"></td>
				<td>
					<a href="#"onClick="friendProfile('Doctor','<?php echo $friend_index; ?>')"><?php echo $name; ?> </a><br>
					<small>Doctor</small>
                </td>
				<td>
	 
					<?php 
					
						if($status == "Pending"){
							echo '<a href="#" onClick="confirmFriend1(this)" data-id="'.$my_type.','.$my_index.',Doctor,'.$friend_index.'" class="btn btn-xs bg-green-active">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Confirm Friend Request'.'</i>'.'</a>'; 
						}
					
						if($status == "Friend_Request_Sent"){
							echo '<span class="label label-info label-lg">' .'Friend Request Sent'.'</span>'; 
						}
											
						if($status == ""){
							echo '<a href="#" onClick="addFriends(this)" data-id="'.$my_type.','.$my_index.',Doctor'.$friend_index.'" class="btn btn-xs bg-blue">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Add Friend'.'</i>'.'</a>';
						}
											
						if($status == "Friend"){
							echo '<span class="label label-lg bg-maroon">' .'Friend'.'</span>'; 
						}
									
					
					?>
	
				</td>
		   </tr>
<?php } } }?>





<?php
include_once('../controller/config.php');
if(isset($_GET["friend_type"])&&($_GET["friend_type"]=="Student")){
	$my_index=$_GET["my_index"];
	$my_type=$_GET["my_type"];
	$current_year=date('Y');
		
	$sql="select student.index_number as std_index,student.surname as std_name,student.image_name as std_image,classroom.name as g_name
	      from student
	      inner join student_classroom
	      on student.index_number=student_classroom.index_number
	      inner join classroom
	      on student_classroom.classroom_id=classroom.id
	      where student.index_number!='$my_index' and student_classroom.year='$current_year'";
	
	$result=mysqli_query($conn,$sql);
	$count = 0;
	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)){
			
			$name=$row['std_name'];
			$image=$row['std_image'];
			$classroom=$row['g_name'];
			$friend_index=$row['std_index'];
			$status = null;
			$sql1 = "SELECT * FROM my_friends WHERE my_index='$my_index' and friend_index='$friend_index'";
			$result1 = mysqli_query($conn, $sql1);

			if ($result1 && mysqli_num_rows($result1) > 0) {
				$row1 = mysqli_fetch_assoc($result1);
				$status = $row1['_status'];
			} else {
				// Handle the case where the query didn't return any results
				// For example, you could set a default status or display an error message
			}
			
?>   
			<tr>
				<td><img src="../<?php echo $image; ?>" class="friend-image"></td>
				<td>
					<a href="#"onClick="friendProfile('Student','<?php echo $friend_index; ?>')"><?php echo $name; ?> </a><br>
					<small>Student - <?php echo $classroom; ?></small>
                </td>
				<td>
	 				
                    <?php 
					
						if($status == "Pending"){
							echo '<a href="#" onClick="confirmFriend1(this)" data-id="'.$my_type.','.$my_index.',Student,'.$friend_index.'" class="btn btn-xs bg-green-active">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Confirm Friend Request'.'</i>'.'</a>'; 
						}
						if($status == "Friend_Request_Sent"){
							echo '<span class="label label-info label-lg">' .'Friend Request Sent'.'</span>'; 
						}
						
						if($status == "Friend"){
							echo '<span class="label label-lg bg-maroon">' .'Friend'.'</span>';  
						}
						
						if($status == ""){
							 
							echo '<a href="#" onClick="addFriends(this)" data-id="'.$my_type.','.$my_index.',Student,'.$friend_index.'" class="btn btn-xs bg-blue">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Add Friend'.'</i>'.'</a>';
						}
									
					?>
	
	
				</td>
		   </tr>
<?php } } }?>

<?php
include_once('../controller/config.php');
if(isset($_GET["friend_type"])&&($_GET["friend_type"]=="Teacher")){
	$my_index=$_GET["my_index"];
	$my_type=$_GET["my_type"];
	
	$sql="SELECT * FROM teacher WHERE index_number!='$my_index'";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)){
			
			$name=$row['surname'];
			$image=$row['image_name'];
			$friend_index=$row['index_number'];
			
			$status = null;
			$sql1 = "SELECT * FROM my_friends WHERE my_index='$my_index' and friend_index='$friend_index'";
			$result1 = mysqli_query($conn, $sql1);

			if ($result1 && mysqli_num_rows($result1) > 0) {
				$row1 = mysqli_fetch_assoc($result1);
				$status = $row1['_status'];
			} else {
				// Handle the case where the query didn't return any results
				// For example, you could set a default status or display an error message
			}
?>   
			<tr>
				<td><img src="../<?php echo $image; ?>" class="friend-image"></td>
				<td>
					<a href="#"onClick="friendProfile('Teacher','<?php echo $friend_index; ?>')"><?php echo $name; ?> </a><br>
					<small>Teacher</small>
                </td>
				<td>
	 
					<?php 
					
						if($status == "Pending"){
							echo '<a href="#" onClick="confirmFriend1(this)" data-id="'.$my_type.','.$my_index.',Teacher,'.$friend_index.'" class="btn btn-xs bg-green-active">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Confirm Friend Request'.'</i>'.'</a>'; 
						}
					
						if($status == "Friend_Request_Sent"){
							echo '<span class="label label-info label-lg">' .'Friend Request Sent'.'</span>'; 
						}
											
						if($status == ""){
							echo '<a href="#" onClick="addFriends(this)" data-id="'.$my_type.','.$my_index.',Teacher,'.$friend_index.'" class="btn btn-xs bg-blue">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Add Friend'.'</i>'.'</a>';
						}
											
						if($status == "Friend"){
							echo '<span class="label label-lg bg-maroon">' .'Friend'.'</span>'; 
						}
									
					
					?>
	
				</td>
		   </tr>
<?php } } }?>

<?php
include_once('../controller/config.php');
if(isset($_GET["friend_type"])&&($_GET["friend_type"]=="Admin")){
	$my_index=$_GET["my_index"];
	$my_type=$_GET["my_type"];
	
	$sql="SELECT * FROM admin WHERE index_number!='$my_index'";
	
	$result=mysqli_query($conn,$sql);
	$count = 0;
	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)){
			
			$name=$row['surname'];
			$image=$row['image_name'];
			$friend_index=$row['index_number'];
			
			$status = null;
			$sql1 = "SELECT * FROM my_friends WHERE my_index='$my_index' and friend_index='$friend_index'";
			$result1 = mysqli_query($conn, $sql1);

			if ($result1 && mysqli_num_rows($result1) > 0) {
				$row1 = mysqli_fetch_assoc($result1);
				$status = $row1['_status'];
			} else {
				// Handle the case where the query didn't return any results
				// For example, you could set a default status or display an error message
			}
?>   
			<tr>
				<td><img src="../<?php echo $image; ?>" class="friend-image"></td>
				<td>
					<a href="#"onClick="friendProfile('Admin','<?php echo $friend_index; ?>')"><?php echo $name; ?> </a><br>
                	<small>Admin</small>
                </td>
				<td>
	
					<?php 
					
					if($status == "Pending"){
						echo '<a href="#" onClick="confirmFriend1(this)" data-id="'.$my_type.','.$my_index.',Admin,'.$friend_index.'" class="btn btn-xs bg-green-active">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Confirm Friend Request'.'</i>'.'</a>'; 
					}
					
					if($status == "Friend_Request_Sent"){
						echo '<span class="label label-info label-lg">' .'Friend Request Sent'.'</span>'; 
					}
										
					if($status == ""){
						echo '<a href="#" onClick="addFriends(this)" data-id="'.$my_type.','.$my_index.',Admin,'.$friend_index.'" class="btn btn-xs bg-blue">'.'<i class="fa fa-user-plus" aria-hidden="true">'. ' Add Friend'.'</i>'.'</a>';
					}
										
					if($status == "Friend"){
						echo '<span class="label label-lg bg-maroon">' .'Friend'.'</span>'; 
					}
									
					?>
				</td>
		   </tr>
           
<?php } } }?>