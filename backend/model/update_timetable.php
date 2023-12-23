<?php
include_once('controller/config.php');

if (isset($_POST["do"]) && ($_POST["do"] == "update_timetable")) {
    $id = $_POST["id"];
    $classroom = $_POST["classroom"];
    $day = $_POST["day"];
    $subject_id = $_POST["subject_id"];
    $teacher_id = $_POST["teacher_id"];
    $disease_id = $_POST["disease_id"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];

    $msg = 0; // Default message

    // Check if the combination of day, disease_id, and start_time already exists in the timetable
    $sql = "SELECT * FROM timetable WHERE day='$day' AND disease_id=$disease_id AND start_time='$start_time'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $existing_id = $row['id'];
        $existing_subject_id = $row['subject_id'];
        $existing_teacher_id = $row['teacher_id'];
        $existing_end_time = $row['end_time'];

        if ($id == $existing_id) {
            if ($end_time == $existing_end_time) {
                if ($subject_id != $existing_subject_id || $teacher_id != $existing_teacher_id) {
                    $sql = "UPDATE timetable SET subject_id='$subject_id', teacher_id='$teacher_id' WHERE id='$id'";
                    if (mysqli_query($conn, $sql)) {
                        $msg = 1; // Updated successfully
                    } else {
                        $msg = 2; // Connection problem
                    }
                } else {
                    $msg = 3; // No changes made
                }
            } else {
                // Check if there is no overlap in timing
                $sql = "SELECT * FROM timetable WHERE day='$day' AND disease_id=$disease_id AND end_time > '$start_time' AND (start_time <= '$start_time' OR start_time < '$end_time') AND id != '$id'";
                $overlap_result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($overlap_result) == 0) {
                    $sql = "UPDATE timetable SET subject_id='$subject_id', teacher_id='$teacher_id', end_time='$end_time' WHERE id='$id'";
                    if (mysqli_query($conn, $sql)) {
                        $msg = 1; // Updated successfully
                    } else {
                        $msg = 2; // Connection problem
                    }
                } else {
                    $msg = 4; // Class overlap
                }
            }
        } else {
            $msg = 4; // Class overlap
        }
    } else {
        $sql = "UPDATE timetable SET day='$day', subject_id='$subject_id', teacher_id='$teacher_id', disease_id='$disease_id', start_time='$start_time', end_time='$end_time' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            $msg = 1; // Updated successfully
        } else {
            $msg = 2; // Connection problem
        }
    }

    // Perform redirection based on the form submitted
    if (isset($_POST["do1"]) && ($_POST["do1"] == "update_timetable1")) {
        header("Location: view/timetable.php?do=alert_from_update&msg=$msg&classroom=$classroom");
    } elseif (isset($_POST["do2"]) && ($_POST["do2"] == "update_timetable2")) {
        header("Location: view/my_timetable2.php?do=alert_from_update&msg=$msg");
    }
}
?>
