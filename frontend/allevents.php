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
                <h1 class="title">Page Événements</h1>
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
        <ul class="filter">
            <li data-filter="*"><a href="allevents.php">Tous les événements</a></li>
            <li data-filter=".new-event"><a href="new_events.php">Nouvel évènement</a></li>
            <li data-filter=".old-event"><a href="old_events.php">Ancien événement</a></li>
        </ul>

        <div class="class-wrapper">
                    <?php
            $conn = new mysqli("localhost", "root", "", "inclusapce");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $today = date('Y-m-d'); // Get today's date in the format 'YYYY-MM-DD'

            $query = "SELECT id, date_creation, title, start_time, end_time, start_date, end_date, location, image_name, end_date 
                    FROM events
                    WHERE category_id = 1"; // Add the condition for category_id

            $result = mysqli_query($conn, $query);

            $eventsPerPage = 6; // Number of events to display per page
            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $startIndex = ($currentPage - 1) * $eventsPerPage;
            $eventCount = 0;

            while ($row = mysqli_fetch_assoc($result)) {
                $eventDate = date('Y-m-d', strtotime($row['date_creation']));
                $eventClass = ($eventDate < $today) ? 'old-event' : 'new-event';

                // Check if today is greater than the event's end date
                if ($today > $row['end_date']) {
                    $eventClass = 'old-event';
                }

                // Check if the event should be displayed on the current page
                if ($eventCount >= $startIndex && $eventCount < ($startIndex + $eventsPerPage)) {
                    ?>
                    <div class="class-inner <?php echo $eventClass; ?>">
                        <div class="event-item">
                            <div class="event-thumb">
                                <a href="events-single.php?id=<?php echo $row['id']; ?>">
                                    <img src="http://127.0.0.1/incluspace/backend/<?php echo $row['image_name']; ?>" alt="events">
                                </a>
                                <div class="date-tag">
                                    <h3 class="title"><?php echo date('d', strtotime($row['date_creation'])); ?></h3>
                                    <span class="mon"><?php echo date('M y', strtotime($row['date_creation'])); ?></span>
                                </div>
                            </div>
                            <div class="event-content">
                                <h5 class="title">
                                    <a href="events-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                                </h5>
                                <ul class="events-info">
                                    <li><i class="fas fa-clock"></i> <?php echo $row['start_time'] . ' À ' . $row['end_time']; ?></li>
                                    <li><i class="fas fa-calendar" style="color:#8dc63f;"></i> <?php echo date('d-m-Y', strtotime($row['start_date'])) . ' À ' . date('d-m-Y', strtotime($row['end_date'])); ?></li>
                                    <li><i class="fas fa-home"></i> <?php echo $row['location']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php
                }
                $eventCount++;
            }
            mysqli_close($conn);
            ?>
        </div>

        <!-- Pagination -->
        <ul class="default-pagination">
            <?php
            $totalPages = ceil($eventCount / $eventsPerPage);

            if ($currentPage > 1) {
                echo '<li><a href="?page=' . ($currentPage - 1) . '"><i class="fas fa-angle-left"></i></a></li>';
            }

            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<li><a href="?page=' . $i . '"';
                if ($i == $currentPage) {
                    echo ' class="active"';
                }
                echo '>' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</a></li>';
            }

            if ($currentPage < $totalPages) {
                echo '<li><a href="?page=' . ($currentPage + 1) . '"><i class="fas fa-angle-right"></i></a></li>';
            }
            ?>
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