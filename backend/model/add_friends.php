<?php
include_once('../controller/config.php');

if(isset($_GET["do"]) && ($_GET["do"] == "add_friends")) {
    $my_type = $_GET['my_type'];
    $my_index = $_GET['my_index'];
    $friend_type = $_GET['friend_type'];
    $friend_index = $_GET['friend_index'];

    $msg = 0;
    $success = true;

    
    mysqli_autocommit($conn, false);

    $sql1 = "INSERT INTO my_friends(my_index, friend_index, _status, my_type, friend_type) 
             VALUES ('$my_index', '$friend_index', 'Friend_Request_Sent', '$my_type', '$friend_type')";

    if(!mysqli_query($conn, $sql1)) {
        $success = false;
    }

    $sql2 = "INSERT INTO my_friends(my_index, friend_index, _status, my_type, friend_type) 
             VALUES ('$friend_index', '$my_index', 'Pending', '$friend_type', '$my_type')";

    if(!mysqli_query($conn, $sql2)) {
        $success = false;
    }

    if($success) {
        
        mysqli_commit($conn);
        $msg = 1;
    } else {
        
        mysqli_rollback($conn);
        $msg = 2;
    }

    mysqli_autocommit($conn, true);

    $res = array($msg);
    echo json_encode($res);
}
?>
