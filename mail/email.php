<?php
//mail service start
	include("class.phpmailer.php");
include("class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com"; // specify main and backup server // Twinbrothers SMTP server Name "gains.lathalinuxcloud.com";
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "jhonruss78@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "Sk143743@#$"; // give your gmail password
$mail->SMTPDebug =0;
$mail->SMTPSecure = 'ssl';

$from1 = "nesaranishan@engineer.com"; // Reply to this email

//$dean_email='sidhartharoul@gmail.com';

//$rashmi_email='rashmi@cutm.ac.in';

$password='Sk143743@#$';// your password

//$to1=$dean_email; // Recipients email ID

//$to2=$rashmi_email;

$pass=$password;
//mail service end	
?>