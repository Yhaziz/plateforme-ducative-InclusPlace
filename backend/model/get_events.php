<?php
include_once('../controller/config.php');
$id = $_GET["event_id"];

$sql = "SELECT * FROM events WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$row1 = array(
    'id' => $row['id'],
    'title' => $row['title'],
    'note' => $row['note'],
    'color' => $row['color'],
    'category' => $row['category_id'],
    'classroom_id' => $row['classroom_id'],
    'create_by' => $row['create_by'],
    'creator_name' => $row['creator_name'],
    'location' => $row['location'],
    'creator_type' => $row['creator_type'],
    'date_creation' => $row['date_creation'],
    'start_date' => $row['start_date'],
    'end_date' => $row['end_date'], 
    'start_time' => $row['start_time'],
    'end_time' => $row['end_time']
);

echo json_encode($row1);
?>
