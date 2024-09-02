<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'ijadunolaabdulmujeeb@@gmail.com'; // Your email address
    $mail->Password = 'your_email_password'; // Your email password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('your_email_address', 'Your Name');
    $mail->addAddress('ijadunolaabdulmujeeb@gmail.com', 'Ijadunola Abdulmujeeb');
    $mail->Subject = 'New Startup Application';
    $mail->Body = 'Name: ' . $name . '\n';
    $mail->Body .= 'Email: ' . $email . '\n';
    $mail->Body .= 'Phone: ' . $phone . '\n';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>