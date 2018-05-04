<?php

//  require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];
// $departmentRaw = $_POST['department'];
// $department = 'Unspecified';
// $sendTo = ['info@suresteprisk.com'];

// $mikeEmail = 'mgibbs@suresteprisk.com';
// $mikeEmail = '';
// $warrieEmail = 'wlucas@suresteprisk.com';
// $warrieEmail = '';

// switch ($departmentRaw) {
// 	case 'governance':
// 		echo 'governance';
// 		$department = 'Governance';
// 		// array_push($sendTo, $mikeEmail, $warrieEmail);

// 		break;
// 	case 'risk':
// 		echo 'risk';
// 		$department = 'Risk and Compliance';
// 		array_push($sendTo, $mikeEmail, $warrieEmail);
// 		break;
// 	case 'managed-services':
// 		echo 'managed-services';
// 		$department = 'Managed Services';
// 		array_push($sendTo, $mikeEmail);
// 		break;
// 	case 'general':
// 		echo 'general';
// 		$department = 'General';
// 		array_push($sendTo, $mikeEmail, $warrieEmail);
// 		break;
// 	case 'hosting':
// 		echo 'hosting';
// 		$department = 'Hosting';
// 		array_push($sendTo, $mikeEmail, $warrieEmail);
// 		break;
// 	case 'data':
// 		echo 'data';
// 		$department = 'Data';
// 		array_push($sendTo, $warrieEmail);
// 		break;
// 	default:
// 		echo $departmentRaw;
// }

// $mail = new PHPMailer;

// $mail->isSMTP();
// $mail->isHTML(true);
// $mail->Host = 'relay-hosting.secureserver.net';
// $mail->SMTPAuth = false;
// $mail->SMTPSecure = false;
// $mail->Port = 25;
// $mail->SMTPDebug  = 3;
// $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};
// $mail->setFrom('info@suresteprisk.com', $name);
// foreach ($sendTo as $emailAddress) {
//     $mail->addAddress($emailAddress);
// }
// $mail->Subject = "Website Contact From {$name}";
// $mail->Body    = "<strong>Who:</strong> {$name} <br><br> <strong>Phone:</strong> {$phone} <br><br> <strong>Department:</strong> {$department} <br><br> <strong>Message:</strong> {$message}";
 
// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }



<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require 'vendor/autoload.php';
// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("Example User", "test@example.com");
$subject = "Sending with SendGrid is Fun";
$to = new SendGrid\Email("Example User", "test@example.com");
$content = new SendGrid\Content("text/plain", "and easy to do anywhere, even with PHP");
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();
 ?>