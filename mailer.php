<?php
 use PHPMailer\PHPMailer\PHPMailer
 require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$departmentRaw = $_POST['department'];
$sendTo = ['info@suresteprisk.com','wlucas@suresteprisk.com','mgibbs@suresteprisk.com'];

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

$mail = new PHPMailer;
$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'surestepTester@gmail.com';
$mail->Password = 'tester123!!';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($email);
$mail->addAddress('warrentblucas@gmail.com')
$mail->isHTML(true);

$mail->Subject = "Website Contact From {$name}";
$mail->Body    = "<strong>Who:</strong> {$name} <br><br> <strong>Phone:</strong> {$phone} <br><br> <strong>Department:</strong> {$department} <br><br> <strong>Message:</strong> {$message}";
 
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
 ?>