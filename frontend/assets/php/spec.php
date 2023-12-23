<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Spec"]) && isset($_SESSION["cin"])) {
        $Spec = $_POST["Spec"];
        $cin = $_SESSION["cin"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inclusapce";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "UPDATE doctor SET Spec = '$Spec' WHERE cin = '$cin'";

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

