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
                <h1 class="title">Our School Photos</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        Gallery
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Gallery Section Starts Here========== -->
    <div class="gallery-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <ul class="filter-2">
                <li data-filter="*" class="active"><span class="category">Show All</span><span class="amount">09</span>
                </li>
                <li data-filter=".toddler"><span class="category">toddlers</span><span class="amount">05</span></li>
                <li data-filter=".preschool"><span class="category">preschool</span><span class="amount">06</span></li>
                <li data-filter=".programe"><span class="category">kindergarten</span><span class="amount">03</span>
                </li>
                <li data-filter=".kinder"><span class="category">pre-k program</span><span class="amount">06</span></li>
            </ul>
            <div class="masonary-wrapper three-items">
                <div class="masonary-item preschool programe">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g9.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g9.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler kinder">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g10.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g10.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item preschool kinder">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g11.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g11.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler programe">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g12.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g12.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item preschool kinder">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g13.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g13.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler preschool kinder">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g14.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g14.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item preschool">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g15.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g15.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler kinder">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g16.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g16.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler kinder preschool">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g17.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g17.jpg" alt="gallery">
                    </div>
                </div>
            </div>
            <div class="load-more">
                <a href="#" class="custom-button"><span>Get Started Now</span></a>
            </div>
        </div>
    </div>
    <!-- ==========Gallery Section Ends Here========== -->


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