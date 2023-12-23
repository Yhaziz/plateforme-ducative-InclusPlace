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
            padding-right: 163px;
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
                <h1 class="title">Contactez-nous</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                    Contactez-nous
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Contact Section Starts Here========== -->
    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="contact-form-area">
                <h4 class="title">Laisser un message</h4>
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
                <form class="contact-form" id="contact_form_submit" action="assets/php/contact.php"  method="POST" onsubmit="return valdicontact()">
                    <div class="form-group">
                        <input type="text" placeholder="votre Nom" id="fname" name="fname">
                        <span class="error-message" id="fname-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Votre E-mail" id="email" name="email">
                        <span class="error-message" id="email-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder="Téléphone" id="téléphone" name="téléphone">
                        <span class="error-message" id="téléphone-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Sujette" id="sujet" name="sujet">
                        <span class="error-message" id="sujet-error"></span>
                    </div>
                    <div class="form-group w-100">
                        <textarea name="message" id="message" id="message" placeholder="Your Message"></textarea>
                        <span class="error-message" id="message-error"></span>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="custom-button"><span>Envoyer</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ==========Contact Section Ends Here========== -->


    <!-- ==========Map Section Starts Here========== -->
    <?php include('include/map.php')?>
    <!-- ==========Map Section Ends Here========== -->

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