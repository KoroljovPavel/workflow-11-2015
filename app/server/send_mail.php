<?php
	require '../lib/PHPMailer/PHPMailerAutoload.php';

	$data = array();
	$email = "afgmeister@gmail.com";
	$name = "Administrator";
	

	$message = $_POST['name']." || ".$_POST['email']."||".$_POST['message'];
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = 'smtp.mail.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'workloftdemo@mail.ru';
	$mail->Password = "zxchvqwp150688";
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	$mail->CharSet = 'UTF-8';
	$mail->From = $mail->Username;
	$mail->FromName = $name;
	$mail->AddAddress($email, $email);
	$mail->WordWrap = 80;
	$mail->Subject = 'проверка';
	$mail->Body    = $message;
	if($mail->send()){
		header('Location: ../contact.php');
		$data['status'] = "true";

	} else {
		$data['status'] = "false";
	}