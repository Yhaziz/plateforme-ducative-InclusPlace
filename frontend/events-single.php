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
    
    <!-- ==========BAR========== -->
    <?php include('include/bar.php')?>
    <!-- ==========BAR========== -->


    
     <!-- ==========Header========== -->
     <?php include('include/header.php')?>
     <!-- ==========Header========== -->
    
    <!-- ==========Header Section Starts Here========== -->
    <header>
        
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

    

    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Événements</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="allevents.php">Événements</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Events Single Section Starts Here========== -->
    <div class="events-single-section padding-top padding-bottom">
    <div class="container">
        <div class="row mb--50">
            <div class="col-lg-8 mb-50">
                <?php
                $conn = new mysqli("localhost", "root", "", "inclusapce");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Replace 'your_event_id' with the actual event ID or get it from the URL
                $eventID = isset($_GET['id']) ? (int)$_GET['id'] : 1;


                // Query to retrieve event details from the 'events' table
                $query = "SELECT date_creation, image_name, note FROM events WHERE id = $eventID";

                $result = mysqli_query($conn, $query);

                if ($row = mysqli_fetch_assoc($result)) {

                $eventDate = date('M d, Y', strtotime($row['date_creation']));

;
                $eventImage = "http://127.0.0.1/incluspace/backend/" . $row['image_name'];
                $eventDetails = $row['note'];

                ?>
                    <div class="class-single-item">
                        <div class="class-single-inner">
                            <div class="event-thumb">
                                <img src="http://127.0.0.1/incluspace/backend/<?php echo $row['image_name']; ?>" alt="events">
                                <div class="date-tag">
                                    <h3 class="title"><?php echo date('d', strtotime($row['date_creation'])); ?></h3>
                                    <span class="mon"><?php echo date('M y', strtotime($row['date_creation'])); ?></span>
                                </div>
                            </div>
                            <div class="class-single-content">
                                <h4 class="counts-title">Description :</h4>
                                <br>
                               <td id="note" ><?php echo $row['note']; ?></td>
                            </div>
                        </div>
                    </div>
                <?php
                }
                mysqli_close($conn);
                ?>
            </div>
            <div class="col-lg-4 mb-50">
                <aside>
                    <div class="widget widget-feature">
                        <div class="widget-header">
                            <h5 class="title">Détails De L'événement</h5>
                        </div>
                        <div class="widget-body">
                            <?php
                            $conn = new mysqli("localhost", "root", "", "inclusapce");

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Query to retrieve Détails De L'événement  from the 'events' table
                            $query = "SELECT start_date, start_time, end_date, end_time, location, creator_name FROM events WHERE id = $eventID";

                            $result = mysqli_query($conn, $query);

                            if ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <ul>
                                    <li>
                                        <div class="ques cl-i-one"><i class="fas fa-calendar"></i>Start Date</div>
                                        <div class="ans"><?php echo date('d/m/Y', strtotime($row['start_date'])); ?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-two"><i class="fas fa-clock"></i>Start Time</div>
                                        <div class="ans"><?php echo $row['start_time']; ?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-three"><i class="fas fa-calendar"></i>End Date</div>
                                        <div class="ans"><?php echo date('d/m/Y', strtotime($row['end_date'])); ?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-four"><i class="fas fa-clock"></i>End Time</div>
                                        <div class="ans"><?php echo $row['end_time']; ?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-five"><i class="fas fa-home"></i>Location</div>
                                        <div class="ans"><?php echo $row['location']; ?></div>
                                    </li>
                                    <li>
                                        <div class="ques cl-i-six"><i class="fas fa-user"></i>Event Organizer</div>
                                        <div class="ans"><?php echo $row['creator_name']; ?></div>
                                    </li>
                                </ul>
                            <?php
                            }
                            mysqli_close($conn);
                            ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

    <!-- ==========Events Single Section Ends Here========== -->


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