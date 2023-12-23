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
                <h1 class="title">Recent Blog Posts</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Blog
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Blog Section Starts Here========== -->
    <div class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb-30-none justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog01.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">How Kids make sense of Life Experiences</a>
                                </h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog02.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">Why do aerobicay fit children have
                                        better?</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog03.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">Why do aerobically have better Math
                                        Skills</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog04.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">How Kids make sense of Life Experiences</a>
                                </h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog05.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">Why do aerobicay fit children have
                                        better?</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog06.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">Why do aerobically have better Math
                                        Skills</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog07.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">How Kids make sense of Life Experiences</a>
                                </h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog08.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">Why do aerobicay fit children have
                                        better?</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.php"><img src="assets/images/blog/blog09.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.php">Why do aerobically have better Math
                                        Skills</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.php" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
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
    <!-- ==========Blog Section Ends Here========== -->


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