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
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $téléphone = $_POST["téléphone"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];


    $stmt = $conn->prepare("SELECT * FROM contact_me WHERE fname=:fname");
    $stmt->bindParam(':fname', $fname);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "user existe";
    } else {
        
        $sql = "INSERT INTO contact_me (fname, email, téléphone, sujet, message)
                VALUES (:fname, :email, :telephone, :sujet, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $téléphone);
        $stmt->bindParam(':sujet', $sujet);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            $_SESSION['status'] = "Message sent with success";
            header("Location: http://127.0.0.1/incluspace/frontend/contact.php");
            exit;
        } else {
            echo "<script>alert('Erreur: " . $stmt->errorInfo()[2] . "');</script>";
        }
    }
}
