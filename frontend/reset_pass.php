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
                    Reset password
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Reset password Section Section Starts Here========== -->
    <div class="login-section padding-top padding-bottom">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Password Reset</h3>
                <form class="account-form" action="#" method="POST" onsubmit="return validlogin()">
                <div class="form-group">
                    <input type="password" placeholder="new password" id="password" name="password">
                    <span class="error-message" id="password-error"></span>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Repete your password " id="password" name="password">
                    <span class="error-message" id="password-error"></span>
                </div>
                <div class="form-group">
                        <button class="d-block custom-button"><span>Change password</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ==========Reset password Section Section Ends Here========== -->


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