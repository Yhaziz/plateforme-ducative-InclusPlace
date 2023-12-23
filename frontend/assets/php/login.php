<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inclusapce";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];


    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password AND verification_status='1'");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $type = $user['type'];


        echo "Welcome, $email! You are logged in as $type.";
    } else {

        echo "This account does not exist or is not verified.";
    }
}
?>
