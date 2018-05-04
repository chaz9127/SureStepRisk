<?php
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
		$department = 'Governance';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'risk':
		$department = 'Risk and Compliance';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'managed-services':
		$department = 'Managed Services';
		array_push($sendTo, $mikeEmail);
		break;
	case 'general':
		$department = 'General';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'hosting':
		$department = 'Hosting';
		array_push($sendTo, $mikeEmail, $warrieEmail);
		break;
	case 'data':
		$department = 'Data';
		array_push($sendTo, $warrieEmail);
		break;
	default:
		
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


// echo $response->statusCode();
// print_r($response->headers());
// echo $response->body();
 ?>
