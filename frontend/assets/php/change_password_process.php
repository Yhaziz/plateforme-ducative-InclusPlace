<?php
if(isset($_GET['code']))  {
    $reste_token = $_GET['code'];
    $conn = new mysqli('localhost', 'root', '', 'inclusapce');
    if($conn->connect_error) {
        die('Could not connect to the database');
    }

    $type = ""; 
    if ($_GET['type'] === 'parent') {
        $type = 'parent';
    } elseif ($_GET['type'] === 'avs') {
        $type = 'avs';
    } elseif ($_GET['type'] === 'teacher') {
        $type = 'teacher';
    } elseif ($_GET['type'] === 'doctor') {
        $type = 'doctor';
    }
    
    if (!empty($type)) {
        $verifyQuery = $conn->query("SELECT * FROM $type WHERE reste_token = '$reste_token' AND updated_time >= NOW() - INTERVAL 1 MINUTE");
        if($verifyQuery->num_rows == 0) {
            header("Location: index.php");
            exit();
        }
        
        if(isset($_POST['change'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];
            

            $changeQuery = $conn->query("UPDATE $type SET password = '$password', conf_password = '$conf_password' WHERE email = '$email' AND reste_token = '$reste_token' AND updated_time >= NOW() - INTERVAL 1 MINUTE");

            if($changeQuery) {
                header("Location: success.php");
            }
        }
    }
    
    $conn->close();
}
else {
    header("Location: index.php");
    exit();
}
?>
