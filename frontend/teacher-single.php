<!-- ==========Head========== -->
<?php include('include/head.php')?>
<!-- ==========Head========== -->
</head>

<body>


    <!-- ==========Header Section Starts Here========== -->
   <!-- ==========BAR========== -->
   <?php include('include/bar.php')?>
    <!-- ==========BAR========== -->

         <!-- ==========Header========== -->
         <?php include('include/header.php')?>
     <!-- ==========Header========== -->

    <!-- ==========Header Section Ends Here========== -->



   

    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="./assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Détails de l'enseignant</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Accueil</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                    Enseignant
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Teacher Single Section Starts Here========== -->
    <?php
// Create a database connection
$conn = new mysqli("localhost", "root", "", "inclusapce");

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    $teacherID = $_GET['id'];
    
    // Fetch teacher details based on the provided ID
    $query = "SELECT image_name, CONCAT(fname, ' ', surname) AS full_name, spec, address, email, téléphone, facebook, instagram, linkedin FROM teacher WHERE id = $teacherID";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $imagePath = 'http://127.0.0.1/incluspace/backend/' . $row['image_name'];
        $fullName = $row['full_name'];
        $spec = $row['spec'];
        $address = $row['address'];
        $email = $row['email'];
        $phone = $row['téléphone'];

        $facebookLink = $row['facebook'];
        $instagramLink = $row['instagram'];
        $linkedinLink = $row['linkedin'];
    } else {
        // Handle the case where no teacher is found with the provided ID
        echo "Teacher not found.";
    }
} else {
    // Handle the case where 'id' parameter is not provided in the URL
    echo "Teacher ID not specified.";
}
?>


<section class="speaker-single-section padding-top padding-bottom">
    <div class="container">
        <div class="teacher-wrapper">
            <div class="teacher-single-top">
                <div class="teacher-single-item d-flex flex-wrap justify-content-between">
                    <div class="teacher-single-thumb">
                        <img src="<?php echo $imagePath; ?>" alt="teacher">
                    </div>
                    <div class="teacher-single-content">
                        <h4 class="title"><?php echo $fullName; ?></h4>
                        <p><?php echo $spec; ?></p>
                        <br><br><br>
                        <ul>
                            <li class="d-flex flex-wrap justify-content-start">
                                <span class="list-name">Address</span>
                                <span class="list-attr"><?php echo $address; ?></span>
                            </li>
                            <li class="d-flex flex-wrap justify-content-start">
                                <span class="list-name">Email</span>
                                <span class="list-attr"><?php echo $email; ?></span>
                            </li>
                            <li class="d-flex flex-wrap justify-content-start">
                                <span class="list-name">Phone</span>
                                <span class="list-attr"><?php echo $phone; ?></span>
                            </li>
                            <li class="d-flex flex-wrap justify-content-start">
                                <span class="list-name">Follow Us</span>
                                <ul class="list-attr d-flex flex-wrap justify-content-start">
                                    <li>
                                        <a class="facebook" href="<?php echo $facebookLink; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="<?php echo $instagramLink; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="<?php echo $linkedinLink; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$conn->close();
?>

    <!-- ==========Teacher Single Section Ends Here========== -->


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