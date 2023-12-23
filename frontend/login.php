<?php session_start(); ?>
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
                <h1 class="title">Incluspace Login Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        Login
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
                <h3 class="title">Connexion</h3>
                <form class="account-form" action="../backend/index.php" method="POST" onsubmit="return validlogin()">
                <div class="form-group">
                        <input type="email" placeholder="Email" id="email" name="email">
                        <span class="error-message" id="email-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="mot de passe" id="password" name="password">
                        <span class="toggle-password" onclick="togglePasswordVisibility('password')">
                    <i class="fa fa-eye"></i>
                    <i class="fa fa-eye-slash"></i>
                </span>
                        <span class="error-message" id="password-error"></span>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Souviens-toi de moi</label>
                            </div>
                            <a href="forgot_password.php">Mot de passe oublié?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="do" value="user_login" />
                        <button class="d-block custom-button"><span>Connexion</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Vous n'avez pas de compte ?<a href="registration.php"> S'inscrire </a></span>
                </div>
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

function setType(userType) {
    document.getElementById('type').value = userType;
}




</script>
</body>



</html>