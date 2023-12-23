<?php session_start(); ?>
<?php include 'assets/php/change_password_process.php' ?>
<!-- ==========Head========== -->
<?php include('include/head.php')?>
<!-- ==========Head========== -->

<body>


    <!-- ==========Preloader Overlay Starts Here========== -->
    <div class="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>
    <!-- ==========Preloader Overlay Ends Here========== -->

    <!-- ==========Header Section Starts Here========== -->
    <header>
           <!-- ==========BAR========== -->
    <?php include('include/bar.php')?>
    <!-- ==========BAR========== -->


    
     <!-- ==========Header========== -->
     <?php include('include/header.php')?>
     <!-- ==========Header========== -->
    </header>
    <!-- ==========Header Section Ends Here========== -->

    

    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Incluspace Change Password</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        Change Password
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Login Section Section Starts Here========== -->
    <div class="login-section padding-top padding-bottom">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Change Password</h3>
                <form class="account-form" action="" method="POST" onsubmit="return validlogin()">
                <div class="form-group">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <span class="error-message" id="email-error"></span>
                </div>
                <div class="form-group">
                <input type="password" placeholder="mot de passe" id="password" name="password" class="password-input">
                <span class="toggle-password" onclick="togglePasswordVisibility('password')">
                    <i class="fa fa-eye"></i>
                    <i class="fa fa-eye-slash"></i>
                </span>
                <span class="error-message" id="password-error"></span>
                </div>
                <div class="form-group">
                <input type="password" placeholder="confirmer mot de passe" id="conf_password" name="conf_password" class="password-input">
                <span class="toggle-password" onclick="togglePasswordVisibility('conf_password')">
                    <i class="fa fa-eye"></i>
                    <i class="fa fa-eye-slash"></i>
                </span>
                <span class="error-message" id="confpassword-error"></span>
                </div>

                        <button type="submit" class="d-block custom-button" name="change"><span>Change password</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ==========Login Section Section Ends Here========== -->


    <!-- ==========Footer Section Starts Here========== -->
    <footer class="bg_img" data-background="assets/images/footer/footer-bg.jpg">
    <?php include('include/footer.php')?>
        
    </footer>
    <!-- ==========Footer Section Ends Here========== -->

    <!-- ==========js Section Starts Here========== -->
    <?php include('include/js.php')?>
    <!-- ==========js Section End Here========== -->
</body>
<script>
function togglePasswordVisibility(inputId) {
  const passwordInput = document.getElementById(inputId);
  const toggleIcon = passwordInput.parentElement.querySelector(".toggle-password");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.classList.add("password-visible");
  } else {
    passwordInput.type = "password";
    toggleIcon.classList.remove("password-visible");
  }
}





</script>



</html>