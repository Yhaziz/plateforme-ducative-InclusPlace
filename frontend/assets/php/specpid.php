<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["spec"]) && isset($_SESSION["cin"])) {
        $spec = $_POST["spec"];
        $cin = $_SESSION["cin"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inclusapce";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "UPDATE teacher SET spec = '$spec' WHERE cin = '$cin'";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("Location: http://127.0.0.1/incluspace/frontend/login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid POST request.";
    }
}

?>

