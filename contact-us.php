<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';
require 'assets/PHPMailer/src/SMTP.php';

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/path/to/your/php-error.log');
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['modal-email'], FILTER_SANITIZE_EMAIL);
    $comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'akshat@cnbtek.com'; // Your Gmail address
            $mail->Password = ''; // Your Gmail password or App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('landing-page@cnbtek.com', 'Mailer');
            $mail->addAddress('akshat@cnbtek.com'); // Add a recipient

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Message From cnbtek.com';
            $mail->Body    = "Name: $name<br>Email: $email<br>Comments: $comments";
            $mail->AltBody = "Name: $name\nEmail: $email\nComments: $comments";

            $mail->send();
            echo 'Thank you! Our team will be in touch with you shortly.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
} else {
    echo "Invalid request method.";
}
?>
