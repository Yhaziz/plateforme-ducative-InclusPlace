<?php
include_once('../controller/config.php');
$id = $_GET["id"];

$sql = "SELECT timetable.id AS tt_id, timetable.day AS tt_day, subject.id AS s_id, teacher.id AS t_id, disease.id AS d_id, timetable.start_time AS tt_stime, timetable.end_time AS tt_etime, timetable.classroom_id AS c_id
        FROM timetable
        INNER JOIN subject
        ON timetable.subject_id = subject.id 
        INNER JOIN teacher
        ON timetable.teacher_id = teacher.id
        INNER JOIN disease
        ON timetable.disease_id = disease.id
        WHERE timetable.id = $id";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$res = array($row['tt_id'], $row['tt_day'], $row['s_id'], $row['t_id'], $row['d_id'], $row['tt_stime'], $row['tt_etime'], $row['c_id']);
echo json_encode($res);
?>
