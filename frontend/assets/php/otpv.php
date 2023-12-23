<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp1'] . $_POST['otp2'] . $_POST['otp3'] . $_POST['otp4'];


    if ($otp === $_SESSION['otp']) {

        unset($_SESSION['otp']);


        $type = $_SESSION['type'];


        unset($_SESSION['type']);


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inclusapce";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $cin = $_SESSION['cin'];
            $fname = $_SESSION['fname'];
            $surname = $_SESSION['surname'];
            $email = $_SESSION['email'];
            $address = $_SESSION['address'];
            $téléphone = $_SESSION['téléphone'];
            $password = $_SESSION['password'];
            $gender = $_SESSION['gender'];

            $sql_type = "INSERT INTO $type (cin, fname, surname, email, address, téléphone, password, conf_password, verification_status, type, otp, gender)
            VALUES (:cin, :fname, :prenom, :email, :address, :telephone, :password, :password, '1', :type, :otp, :gender)";

            $stmt_type = $conn->prepare($sql_type);
            $stmt_type->bindParam(':cin', $cin);
            $stmt_type->bindParam(':fname', $fname);
            $stmt_type->bindParam(':prenom', $surname);
            $stmt_type->bindParam(':email', $email);
            $stmt_type->bindParam(':address', $address);
            $stmt_type->bindParam(':telephone', $téléphone);
            $stmt_type->bindParam(':password', $password);
            $stmt_type->bindParam(':type', $type);
            $stmt_type->bindParam(':otp', $otp);
            $stmt_type->bindParam(':gender', $gender);

            if ($stmt_type->execute()) {

                $sql_user = "INSERT INTO user (email, password, type)
                VALUES (:email, :password, :type)";

                $stmt_user = $conn->prepare($sql_user);
                $stmt_user->bindParam(':email', $email);
                $stmt_user->bindParam(':password', $password);
                $stmt_user->bindParam(':type', $type); 

                if ($stmt_user->execute()) {

                    switch ($type) {
                        case 'Parent':
                            header("Location: http://127.0.0.1/incluspace/frontend/typemal.php");
                            break;

                        case 'Avs':
                            header("Location: http://127.0.0.1/incluspace/frontend/login.php");
                            break;

                        case 'Teacher':
                            header("Location: http://127.0.0.1/incluspace/frontend/specialitespid.php");
                            break;

                        case 'Doctor':
                            header("Location: http://127.0.0.1/incluspace/frontend/specialites.php");
                            break;

                        default:
                            $_SESSION['status'] = "Invalid user type.";
                            header("Location: http://127.0.0.1/incluspace/frontend/otp.php");
                            break;
                    }
                    exit;
                } else {
                    $_SESSION['status'] = "Error inserting into user table: " . $stmt_user->errorInfo()[2];
                    header("Location: http://127.0.0.1/incluspace/frontend/otp.php");
                }
            } else {
                $_SESSION['status'] = "Error inserting into $type table: " . $stmt_type->errorInfo()[2];
                header("Location: http://127.0.0.1/incluspace/frontend/otp.php");
            }
        } catch (PDOException $e) {
            $_SESSION['status'] = "Database Error: " . $e->getMessage();
            header("Location: http://127.0.0.1/incluspace/frontend/otp.php");
        }
    } else {
        $_SESSION['status'] = "Code de vérification non valide.";
        header("Location: http://127.0.0.1/incluspace/frontend/otp.php");
    }
}

?>
