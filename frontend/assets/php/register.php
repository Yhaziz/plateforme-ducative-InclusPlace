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

// Include PHPMailer
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cin = $_POST["cin"];
    $fname = $_POST["fname"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $téléphone = $_POST["téléphone"];
    $password = $_POST["password"];
    $conf_password = $_POST["conf_password"];
    $type = $_POST["type"];
    $gender = $_POST["gender"];

    $valid = true;

    if (empty($cin) || empty($fname) || empty($surname) || empty($email) || empty($address) || empty($téléphone) || empty($password) || empty($conf_password) || empty($type) || empty($gender)) {
        $valid = false;
        $_SESSION['status'] = "All fields are required.";
        header("Location: http://127.0.0.1/incluspace/frontend/registration.php");
    }


    if ($valid) {

        $stmt = $conn->prepare("SELECT * FROM $type WHERE cin=:cin");
        $stmt->bindParam(':cin', $cin);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $_SESSION['status'] = "Le cin existe déjà dans la base.";
            header("Location: http://127.0.0.1/incluspace/frontend/registration.php");
            exit;
        } else {
            $stmt = $conn->prepare("SELECT * FROM $type WHERE email=:email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $_SESSION['status'] = "L'email existe déjà dans la base.";
                header("Location: http://127.0.0.1/incluspace/frontend/registration.php");
                exit;
                
        } else {

           
            $otp = str_pad(mt_rand(1000, 9999), 4, '0', STR_PAD_LEFT);

              
                $_SESSION['otp'] = $otp;
                $_SESSION['type'] = $type;

                
                $_SESSION['cin'] = $cin;
                $_SESSION['fname'] = $fname;
                $_SESSION['surname'] = $surname;
                $_SESSION['email'] = $email;
                $_SESSION['address'] = $address;
                $_SESSION['téléphone'] = $téléphone;
                $_SESSION['password'] = $password;
                $_SESSION['gender'] = $gender;
                

            if ($stmt->execute()) {
              
                $mailer = new PHPMailer\PHPMailer\PHPMailer();

                $mailer->isSMTP();
                $mailer->Host = 'smtp.gmail.com'; // Replace with your SMTP server
                $mailer->SMTPAuth = true;
                $mailer->Username = 'yahyaouimohamed998@gmail.com'; 
                $mailer->Password = 'ekahodspbgezjdng';
                $mailer->Port = 587; 

               
                $mailer->setFrom('noreply@example.com', 'Incluspace');
                $mailer->addAddress($email, $surname . ' ' . $fname);
                $mailer->Subject = 'Verification Code for Your Account';
                $mailer->Body = 'Your verification code is: ' . $otp;

               
                if ($mailer->send()) {
                   
                    header("Location: http://127.0.0.1/incluspace/frontend/otp.php");
                    exit;
                } else {
                    $_SESSION['status'] = 'Failed to send verification email.';
                    header("Location: http://127.0.0.1/incluspace/frontend/registration.php");
                }
            } else {
                $_SESSION['status'] = "Error: " . $stmt->errorInfo()[2];
                header("Location: http://127.0.0.1/incluspace/frontend/registration.php");
            }
        }
    }
}
}
?>


