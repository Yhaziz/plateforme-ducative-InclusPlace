<?php include('include/head.php')?>

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

    <!-- ===========Header Search=========== -->
    <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- ===========Header Search=========== -->

    <!-- ===========Header Cart=========== -->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="index.php" class="logo">
                <img src="assets/images/logo/logo.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop01.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Color Pencil</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop02.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Water Pot</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop03.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Art Paper</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop04.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Stop Watch</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop05.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Comics Book</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="#" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Header Cart=========== -->

    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Our Class Schedule</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="classes.php">Classes</a>
                    </li>
                    <li>
                        Class Schedule
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Schedule Section Starts Here========== -->
    <div class="schedule-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb--20--50 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="schedule-item-2 bg_img bg_contain"
                        data-background="assets/images/schedule/monday.php">
                        <ul>
                            <li>
                                <h6 class="title painting">Painting</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title">English</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title fitness">Power Fitnes</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="schedule-item-2 bg_img bg_contain"
                        data-background="assets/images/schedule/tuesday.php">
                        <ul>
                            <li>
                                <h6 class="title painting">Painting</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title fitness">Power Fitnes</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title">English</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="schedule-item-2 bg_img bg_contain"
                        data-background="assets/images/schedule/wednesday.php">
                        <ul>
                            <li>
                                <h6 class="title">English</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title painting">Painting</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title fitness">Power Fitnes</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="schedule-item-2 bg_img bg_contain"
                        data-background="assets/images/schedule/thursday.php">
                        <ul>
                            <li>
                                <h6 class="title painting">Painting</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title">English</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title fitness">Power Fitnes</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="schedule-item-2 bg_img bg_contain"
                        data-background="assets/images/schedule/friday.php">
                        <ul>
                            <li>
                                <h6 class="title">English</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title painting">Painting</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title fitness">Power Fitnes</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="schedule-item-2 bg_img bg_contain"
                        data-background="assets/images/schedule/saturday.php">
                        <ul>
                            <li>
                                <h6 class="title painting">Painting</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title fitness">Power Fitnes</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                            <li>
                                <h6 class="title">English</h6>
                                <span class="time">07:30am - 08:30am</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Schedule Section Ends Here========== -->


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