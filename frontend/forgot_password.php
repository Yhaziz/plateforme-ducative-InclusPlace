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
                <h1 class="title">Incluspace forgot_password Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        forgot_password
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
                <h3 class="title">Password Reset</h3>
                <?php
                    if (isset($_SESSION['status'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                <form class="account-form" action="assets/php/forgot_password_process.php" method="POST" onsubmit="return restepass()">
                <div class="form-group">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <span class="error-message" id="email-error"></span>
                </div>
                    <div class="form-group">
                        <button type="submit" class="d-block custom-button" name="reset"><span>Send Link</span></button>
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
    <script>
          window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 2000);
            </script>
    
    <!-- ==========js Section End Here========== -->
</body>



</html>