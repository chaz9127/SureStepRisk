<?php
echo 'trace0'
 require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$mail = new PHPMailer;
echo 'trace1'
$mail->isSMTP();
$mail->isHTML(true);
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'chasanid@gmail.com';
$mail->Password = getenv('gmail_password');
$mail->Username = 'personal.portfolio.cj@gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
 
$mail->setFrom('from@example.com', 'Mailer');
$mail->setFrom($email, $name);
$mail->addAddress('chasanid@gmail.com');
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->Subject = "Portfolio Contact - {$name}";
$mail->Body    = "<strong>Who:</strong> {$name} <br><br> <strong>Phone:</strong> {$phone} <br><br> <strong>Message:</strong> {$message}";

// $mail->send()
 
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
header('Location: /');
 ?>