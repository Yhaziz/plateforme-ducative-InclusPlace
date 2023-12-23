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
                <h1 class="title">Our Popular Classes</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Classes
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Class Section Starts Here========== -->
    <div class="class-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <ul class="filter">
                <li data-filter="*">Show All</li>
                <li data-filter=".toddler">Toddler</li>
                <li data-filter=".preschool">Preschool</li>
                <li data-filter=".kinder">kindergarten</li>
                <li data-filter=".programe">pre-k Program</li>
                <li data-filter=".school">before/after school</li>
            </ul>
            <div class="class-wrapper">
                <div class="class-inner programe">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class04.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Art And Color Management</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher02.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Joly Smith</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner school kinder">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class05.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Music And Performance</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher01.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Mrs. Labonno</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner programe kinder">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class06.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Religion And History</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher03.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Robot Smith</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner preschool">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class01.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Art And Color Management</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher02.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Joly Smith</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner toddler school">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class02.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Music And Performance</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher01.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Mrs. Labonno</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner preschool">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class03.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Religion And History</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher03.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Robot Smith</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner toddler programe">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class07.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Drawing And Painting</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher02.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Joly Smith</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner preschool kinder">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class08.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Spanish Language Class</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher01.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Mrs. Labonno</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-inner toddler school">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.php"><img src="assets/images/class/class09.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.php">Alphabet Matching Class</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.php"><img src="assets/images/class/teacher03.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.php">Robot Smith</a></h6>
                                        <a href="teacher-single.php" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="default-pagination">
                <li>
                    <a href="#"><i class="fas fa-angle-left"></i></a>
                </li>
                <li>
                    <a href="#">01</a>
                </li>
                <li>
                    <a href="#" class="active">02</a>
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
    <!-- ==========Class Section Ends Here========== -->


    <!-- ==========Call In Action Section Starts Here========== -->
    <section class="call-in-action padding-top padding-bottom theme-overlay bg_img"
        data-background="assets/images/bg/call-bg.php">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="section-header left-style cl-white mb-olpo mb-md-0">
                        <h3 class="mb-3">It’s Perfect Time to Enroll</h3>
                        <h3 class="title">How to Enroll Your Chilld to A Class?</h3>
                    </div>
                </div>
                <div class="col-md-4 text-md-right">
                    <a href="#" class="custom-button theme-one"><span>Get Started Now</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Call In Action Section Ends Here========== -->


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