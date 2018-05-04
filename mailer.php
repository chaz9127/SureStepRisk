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




require 'vendor/autoload.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$departmentRaw = $_POST['department'];
$department = 'Unspecified';
$sendTo = ['info@suresteprisk.com'];

$mikeEmail = 'mgibbs@suresteprisk.com';
$warrieEmail = 'wlucas@suresteprisk.com';

switch ($departmentRaw) {
	case 'governance':
		echo 'governance';
		$department = 'Governance';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'risk':
		echo 'risk';
		$department = 'Risk and Compliance';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'managed-services':
		echo 'managed-services';
		$department = 'Managed Services';
		array_push($sendTo, $mikeEmail);
		break;
	case 'general':
		echo 'general';
		$department = 'General';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'hosting':
		echo 'hosting';
		$department = 'Hosting';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'data':
		echo 'data';
		$department = 'Data';
		array_push($sendTo, $warrieEmail);
		break;
	default:
		echo $departmentRaw;
}

$from = new SendGrid\Email($name, "do_not_reply@sendgrid.com");
$subject = "Website contact from: {$name}";
$apiKey = 'SG.SmzzGMoLRFGb-mlOsZQoqA.7Jx_VGSR_-9W-bL1uV-gAUZFxYMGnn-wIRWA9quBA8s';
$contentString = "<strong>Who:</strong> {$name} <br><br> <strong>Email:</strong> {$email} <br><br> <strong>Phone:</strong> {$phone} <br><br> <strong>Department:</strong> {$department} <br><br> <strong>Message:</strong> {$message}";
$content = new SendGrid\Content("text/html", $contentString);


foreach ($sendTo as $emailAddress) {
    $to = new SendGrid\Email("SureStep", $emailAddress);
	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	$sg = new \SendGrid($apiKey);
	$response = $sg->client->mail()->send()->post($mail);
}


echo $response->statusCode();
print_r($response->headers());
echo $response->body();
 ?>