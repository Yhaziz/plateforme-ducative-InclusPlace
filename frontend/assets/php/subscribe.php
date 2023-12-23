<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inclusapce";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST["emailab"];

        $stmt_check = $conn->prepare("SELECT COUNT(*) FROM subscriber WHERE email = :email");
        $stmt_check->bindParam(':email', $email);
        $stmt_check->execute();

        $count = $stmt_check->fetchColumn();

        if ($count > 0) {
            // Alert if the email is already subscribed
            echo '<script>alert("It\'s already subscribed.");</script>';
        } else {
            $stmt_insert = $conn->prepare("INSERT INTO subscriber (email) VALUES (:email)");
            $stmt_insert->bindParam(':email', $email);
            $stmt_insert->execute();

            // Alert on successful subscription
            echo '<script>alert("Success!");</script>';
        }
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>