<?php
session_start();
if (isset($_POST['reset'])) {
    $email = $_POST['email'];
} else {
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'C:/xampp/htdocs/incluspace/frontend/mail/vendor/phpmailer/phpmailer/src/Exception.php';

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yahyaouimohamed998@gmail.com';
    $mail->Password   = 'ekahodspbgezjdng';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;


    $mail->setFrom('your_email@gmail.com', 'Incluspace Reset Password');
    $mail->addAddress($email);

    $reste_token = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'), 0, 10);

    $mail->isHTML(true);
    

    $type = ""; 
    $types = ['avs', 'parent', 'teacher', 'doctor'];

    foreach ($types as $type) {
        $conn = new PDO("mysql:host=localhost;dbname=inclusapce", "root", "");

        $stmt = $conn->prepare("SELECT * FROM $type WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $type = $type;
            

            $stmt = $conn->prepare("UPDATE $type SET reste_token = :reste_token WHERE email = :email");
            $stmt->bindParam(':reste_token', $reste_token);
            $stmt->bindParam(':email', $email);
            $stmt->execute();


            $mail->Subject = 'Password Reset';
            $mail->Body = 'To reset your password click <a href="http://127.0.0.1/incluspace/frontend/change_password.php?code=' . $reste_token . '&type=' . $type . '">here</a>. Reset your password in 1 minute.';
            $mail->send();
            
            $_SESSION['status'] = 'Message has been sent, check your email';
            header("Location: http://127.0.0.1/incluspace/frontend/forgot_password.php");
            exit;
        }
    }


    $_SESSION['status'] = 'Email address not found.';
    header("Location: http://127.0.0.1/incluspace/frontend/forgot_password.php");
    exit;
} catch (Exception $e) {
    $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: http://127.0.0.1/incluspace/frontend/forgot_password.php");
    exit;
}
?>
