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
                <h1 class="title">Notre Page Événements</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                    Événements
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Events Section Starts Here========== -->
    <div class="events-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="class-wrapper">
                <div class="class-inner programe">
                    <div class="event-item">
                        <div class="event-thumb">
                            <a href="events-single.php"><img src="assets/images/events/event1.jpg"
                                    alt="events"></a>
                            <div class="date-tag">
                                <h3 class="title">29</h3>
                                <span class="mon">Avril 2023</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h5 class="title">
                                <a href="events-single.php">Cours d'accompagnement éducatif pour enfants atteints de troubles du développement</a>
                            </h5>
                            <ul class="events-info">
                                <li><i class="fas fa-clock"></i> 08h30 à 16h30 </li>
                                <li><i class="fas fa-home"></i> AV.Hedi Nouira _ Immeuble jasmin médical 5ème étage B 502 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="default-pagination">
                <li>
                    <a href="#"><i class="fas fa-angle-left"></i></a>
                </li>
                <li>
                    <a href="#" class="active">01</a>
                </li>
                <li>
                    <a href="#" >02</a>
                </li>
                <li>
                    <a href="#">03</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ==========Events Section Ends Here========== -->


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