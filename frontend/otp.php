<?php
session_start();


if (!isset($_SESSION['otp']) || !isset($_SESSION['type']) || !isset($_SESSION['cin']) || !isset($_SESSION['fname']) || !isset($_SESSION['surname']) || !isset($_SESSION['email']) || !isset($_SESSION['address']) || !isset($_SESSION['téléphone']) || !isset($_SESSION['password'])) {

    header("Location: http://127.0.0.1/incluspace/frontend/error-page.php");
    exit;
}
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/Exception.php';
?>

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
                <h1 class="title">Code de vérification</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                    Vérification Otp
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


   <!-- ==========Otp Section Section Starts Here========== -->
   <div class="form" style="text-align: center;">
    <h2>Vérifiez Votre Compte</h2>
    <p>Nous avons envoyé par e-mail le code OTP à 4 chiffres. Entrez le code ci - dessous pour confirmer votre adresse e-mail.</p>
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
    <form action="assets/php/otpv.php" method="POST" autocomplete="on">
        <div class="error-text">Error</div>
        <div class="fields_input">
            <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required maxlength="1">
            <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required maxlength="1">
            <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required maxlength="1">
            <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required maxlength="1">
        </div>
        <div class="submit">
            <!-- <input type="button" name="resend" class="resend_btn" value="Resend Again"> -->
            <input type="submit" value="Vérifiez Maintenant" class="button">
        </div>
    </form>
</div>



  <!-- ==========Otp Section Section End Here========== -->

    <!-- ==========Footer Section Starts Here========== -->
    <footer class="bg_img" data-background="assets/images/footer/footer-bg.jpg">
    <?php include('include/footer.php')?>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->

    <!-- ==========js Section Starts Here========== -->
    <?php include('include/js.php')?>
    <!-- ==========js Section End Here========== -->
</body>



</html>