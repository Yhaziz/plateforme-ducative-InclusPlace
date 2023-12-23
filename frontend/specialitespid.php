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
                <h1 class="title">Incluspace Register Page</h1>
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
            <h3 class="title">Quelle est votre spécialité pédagogique ?  </h3>
            <form class="account-form" action="assets/php/specpid.php" method="POST" onsubmit="return checkSelection()">
                <div class="form-group">
                <input type="text" placeholder="spécialité pédagogique " id="spec" name="spec" autocomplete="on">
                    <span class="error-message" id="fname-error"></span>
                </div>
                <div class="button">
                    <input id="suivant" type="submit" value="Suivant">
                </div>
                <input type="hidden" id="type" name="type" value="">
            </form>
                
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



  

</body>



</html>