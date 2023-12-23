<?php
include_once('controller/config.php');

if (isset($_POST["do"]) && ($_POST["do"] == "update_exam_timetable")) {
    $id = $_POST["id"];
    $classroom = $_POST["classroom"];
    $exam = $_POST["exam"];
    $day = $_POST["day"];
    $subject_id = $_POST["subject_id"];
    $disease_id = $_POST["disease_id"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];

    $msg = 0;

    
    $sql = "SELECT * FROM exam_timetable WHERE day=? AND disease_id=? AND ((start_time <= ? AND end_time >= ?) OR (start_time <= ? AND end_time >= ?) OR (start_time >= ? AND end_time <= ?)) AND id != ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sississii", $day, $disease_id, $start_time, $start_time, $end_time, $end_time, $start_time, $end_time, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        $msg = 4; 
    } else {
        $sql = "UPDATE exam_timetable SET day=?, subject_id=?, disease_id=?, start_time=?, end_time=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sissii", $day, $subject_id, $disease_id, $start_time, $end_time, $id);

        if (mysqli_stmt_execute($stmt)) {
            $msg = 1; 
        } else {
            $msg = 2; 
        }
    }

    if (isset($_POST["create_by"]) && ($_POST["create_by"] == "Admin")) {
        header("Location: view/exam_timetable.php?do=alert_from_update&msg=$msg&classroom=$classroom&exam=$exam");
    }
}
?>
