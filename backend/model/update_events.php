<?php
include_once('controller/config.php');

if (isset($_POST["do"]) && ($_POST["do"] == "update_events")) {
    $id = $_POST["event_id"];
    $my_type = $_POST["my_type"];
    $title = $_POST["title"];
    $creator_name = $_POST["creator_name"];
    $location = $_POST["location"];
    $category_id = $_POST["category"];
    $note = $_POST["note"];
    $color = $_POST["color"];
    $date_creation = $_POST["date_creation_range"];
    $start_date = $_POST["start_date_range"];
    $end_date = $_POST["end_date_range"];
    $start_time = $_POST["start_time_range"];
    $end_time = $_POST["end_time_range"];
    $date_range2 = "";
    $time_range2 = "";

    $sql = "SELECT * FROM events WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $s_date = $row['start_date'];
    $e_date = $row['end_date'];
    $date_range2 = $s_date . " - " . $e_date;

    $s_time = $row['start_time'];
    $e_time = $row['end_time'];
    $time_range2 = $s_time . " - " . $e_time;

    $prefix = "";
    $classroom_id = "";
    $msg = 0;

    if (isset($_POST["checkbox1"])) {
        for ($i = 0; $i < count($_POST["checkbox1"]); $i++) {
            $classroom = $_POST["checkbox1"][$i];
            $classroom_id .= $prefix . $classroom;
            $prefix = ',';
        }
    }

    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $file_name = $_FILES["fileToUpload"]["name"];
        $file_size = $_FILES["fileToUpload"]["size"];
        $file_temp = $_FILES["fileToUpload"]["tmp_name"];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $filename = date("Ymjhis");
        $image_path = $target_dir . $filename . "." . $file_type;

        $check = getimagesize($file_temp);
        if ($check !== false) {
            if ($file_size <= 5000000) {
                if ($file_type == "jpg" || $file_type == "jpeg" || $file_type == "png") {
                    if (move_uploaded_file($file_temp, $image_path)) {
                        // Image uploaded successfully

                        // Update the database with the new image path
                        $sql1 = "UPDATE events SET 
                            title='" . $title . "',
                            note='" . $note . "',
                            color='" . $color . "',
                            category_id='" . $category_id . "',
                            classroom_id='" . $classroom_id . "',
                            creator_name='" . $creator_name . "',
                            location='" . $location . "',
                            date_creation='" . $date_creation . "',
                            start_date='" . $start_date . "',
                            end_date='" . $end_date . "',
                            start_time='" . $start_time . "',
                            end_time='" . $end_time . "',
                            image_name='" . $image_path . "'
                            WHERE id='$id'";

                        if (mysqli_query($conn, $sql1)) {
                            $msg += 1;
                            // MSK-000143-U-3 The record has been successfully updated in the database
                        } else {
                            $msg += 2;
                            // MSK-000143-U-5 Connection problem
                        }
                    } else {
                        // Error in moving the uploaded image
                        $msg += 3;
                    }
                } else {
                    // Invalid image type
                    $msg += 4;
                }
            } else {
                // File size exceeds the limit
                $msg += 5;
            }
        } else {
            // Not a valid image file
            $msg += 6;
        }
    }


	$sql_select_creator_type = "SELECT creator_type FROM events WHERE id='$id'";
    $result_creator_type = mysqli_query($conn, $sql_select_creator_type);
    $row_creator_type = mysqli_fetch_assoc($result_creator_type);
    $creator_type = $row_creator_type['creator_type'];


    if($creator_type == "Admin"){
        header("Location: view/my_events.php?do=alert_from_update&msg=$msg"); // Redirect for Admin
    } elseif($creator_type == "Teacher"){
        header("Location: view/my_events2.php?do=alert_from_update&msg=$msg"); // Redirect for Teacher
    }


}
?>
