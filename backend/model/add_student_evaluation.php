<?php
include_once("../controller/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $date_evaluate = date("Y-m-d H:i:s");


    $humeur = isset($_POST["checkbox_humeur"]) ? implode(",", $_POST["checkbox_humeur"]) : "";
    $participation = isset($_POST["checkbox_participation"]) ? implode(",", $_POST["checkbox_participation"]) : "";
    $communication = isset($_POST["checkbox_communication"]) ? implode(",", $_POST["checkbox_communication"]) : "";
    $gouter = isset($_POST["checkbox_gouter"]) ? implode(",", $_POST["checkbox_gouter"]) : "";
    $proprete = isset($_POST["checkbox_proprete"]) ? implode(",", $_POST["checkbox_proprete"]) : "";


    $comments = isset($_POST["comments"]) ? mysqli_real_escape_string($conn, $_POST["comments"]) : "";


    $sql = "INSERT INTO student_evaluation (humeur, participation, communication, gouter, proprete, comments, date_evaluate) 
            VALUES ('$humeur', '$participation', '$communication', '$gouter', '$proprete', '$comments', '$date_evaluate')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Data inserted successfully!"); window.location.href = "../view/evaluation_day.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
