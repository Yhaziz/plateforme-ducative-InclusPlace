
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Loign</title>
	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="../dist/img/icon.png" type="image/x-icon">

</head>
<body>
	<img class="wave" src="../dist/img/wavee.png">
	<div class="container">
		<div class="img">
			<img src="../dist/img/back.svg">
		</div>
		<div class="login-content">
			<form action="../index.php" method="POST" onsubmit="return loginadmin()">
			<a href="login.php" ><img src="../dist/img/admin-img.jpg"></a>
				<h2 class="title">Admin Login</h2>
				<span class="error-message" id="error-message"></span>
           		<div class="input-div one">
					
           		   <div class="i">
					  <i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email">
						<span class="error-message" id="email-error"></span>
						<br>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
						<span class="error-message" id="password-error"></span>
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-key"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Key admin</h5>
           		    	<input type="password" class="input" name="keyadmin">
						<span class="error-message" id="keyadmin-error"></span>
            	   </div>
            	</div>
				<br>
				<input type="hidden" name="do" value="user_login" />
            	<input type="submit" class="btn" value="Login" >
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../dist/js/script.js"></script>
</body>

<!-- Add this script section after your form -->
<script>
    // Function to get query parameter from URL
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    // Get the 'msg' parameter from URL and display corresponding error message
    var errorMessage = getParameterByName('msg');
    var errorMessageSpan = document.getElementById('error-message');

    if (errorMessageSpan) {
        if (errorMessage === '1') {
            errorMessageSpan.textContent = 'Incorrect email, password, or keyadmin.';
        } else if (errorMessage === '2') {
            errorMessageSpan.textContent = 'Incorrect User Type.';
        } else if (errorMessage === '3') {
            errorMessageSpan.textContent = 'User with provided email doesn\'t exist.';
        }

        // Clear error message after 5 seconds
        setTimeout(function() {
            errorMessageSpan.textContent = '';
        }, 1500);
    }
</script>


</html>
