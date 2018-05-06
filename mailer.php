<?php
require 'vendor/autoload.php';
use \Mailjet\Resources;
$mj = new \Mailjet\Client('beb156c65dff55e47538e0f95d559fdb', '0080d6e220dfe779a079afbfbcc34d97');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$departmentRaw = $_POST['department'];
$department = 'Unspecified';
$sendTo = ['Email' => 'info@suresteprisk.com'];
$sendTest = ['Email' => 'info@suresteprisk.com'];

$mikeEmail = ['Email' => 'mgibbs@suresteprisk.com'];
$warrieEmail = ['Email' => 'wlucas@suresteprisk.com'];

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

$contentString = "<strong>Who:</strong> {$name} <br><br> <strong>Email:</strong> {$email} <br><br> <strong>Phone:</strong> {$phone} <br><br> <strong>Department:</strong> {$department} <br><br> <strong>Message:</strong> {$message}";

$body = [
    'FromEmail' => "info@suresteprisk.com",
    'FromName' => "Web Contact Form",
    'Subject' => "Web Contact from: {$name}",
    'Text-part' => $contentString,
    'Html-part' => $contentString,
    'Recipients' => [$sendTest]
];

// var_dump($sendTo);
$response = $mj->post(Resources::$Email, ['body' => $body]);
echo $response->success();
$response->success() && var_dump($response->getData());
 ?>
