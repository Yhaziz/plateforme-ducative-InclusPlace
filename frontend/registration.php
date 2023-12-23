<?php session_start(); ?>
<!-- ==========Head========== -->
<?php include('include/head.php')?>
<!-- ==========Head========== -->

<style>

.iti--allow-dropdown input,
        .iti--allow-dropdown input[type=text],
        .iti--allow-dropdown input[type=tel],
        .iti--separate-dial-code input,
        .iti--separate-dial-code input[type=text],
        .iti--separate-dial-code input[type=tel] {
            padding-right: 215px;
            padding-left: 57px; /* Adjust this value according to your preference */
            margin-left: 0;
        }

</style>

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
                <h1 class="title">Incluspace S'inscrire Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        Register
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Register Section Section Starts Here========== -->
    <div class="login-section padding-top padding-bottom">
    <div class="container">
        <div class="account-wrapper">
            <h3 class="title">S'inscrire </h3>
            
            <?php
            if(isset($_SESSION['status']))
            {
                
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <?php echo $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['status']);
            }
            ?>
            <form class="account-form" action="assets/php/register.php"  method="POST" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" placeholder="Cin" id="cin" name="cin" autocomplete="on" >
                    <span class="error-message" id="cin-error"></span>
                    
                    
                </div>
                <div class="form-group">
                    <input type="text" placeholder="nom" id="fname" name="fname" autocomplete="on">
                    <span class="error-message" id="fname-error"></span>

                </div>
                <div class="form-group">
                    <input type="text" placeholder="prénom" id="surname" name="surname" autocomplete="on">
                    <span class="error-message" id="surname-error"></span>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" id="email" name="email" autocomplete="on">
                    <span class="error-message" id="email-error"></span>
                </div>
                <div class="form-group">
                    <select id="gender" name="gender">
                        <option value="">Quel est ton genre ?</option>
                        <option value="Male">Mâle</option>
                        <option value="Femelle">Femelle</option>
                    </select>
                    <span class="error-message" id="gender-error"></span>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Adresse" id="address" name="address" autocomplete="on">
                    <span class="error-message" id="address-error"></span>
                </div>
                <div class="form-group">
                    
                    <input type="tel"  id="téléphone" name="téléphone" maxlength="12" autocomplete="on" >
                    <span class="error-message" id="téléphone-error"></span>
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

                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LcNrj4nAAAAANEiUCHw2zKs3mTLmplwXoT7tugW"></div>
                        </div>
                        <div class="form-group">
                            <span id="error-message" class="error-message"></span>
                        </div>

                <div class="container">
                        
                            
                        
                        <div class="button">
                        <input id="parent" type="submit" value="Parent" onclick="setType('Parent')">
                        </div>
                        <div class="button">
                        <input id="avs" type="submit" value="Avs" onclick="setType('Avs')">
                        </div>
                        <div class="button">
                        <input id="teacher" type="submit" value="professeur(e)" onclick="setType('Teacher')">
                        </div>
                        <div class="button">
                        <input id="doctor" type="submit" value="Docteur"  onclick="setType('Doctor')">
                        </div>
                        
                    </div>
                    <input type="hidden" id="type" name="type" value="">
               
            </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Êtes vous membre? <a href="login.php">Connexion</a></span>
                </div>
            </div>
        </div>
</div>
    <!-- ==========Register Section Section Ends Here========== -->


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