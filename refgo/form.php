<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

$mail = new PHPMailer();

$mail->CharSet = 'utf-8';

$mail->isSMTP();
$mail->Host = 'smtp.timeweb.ru';
$mail->Port = 465;
$mail->Username = 'mailer@refgo.ru';
$mail->Password = 'hTc4cMce';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';                            
$mail->setFrom('mailer@refgo.ru', 'refgo.ru');
$mail->addAddress('hello@refgo.ru');

$mail->isHTML(true);
 

// Письмо
$mail->Subject = 'Заявка с сайта refgo.ru'; // Заголовок письма

$variables = '';
$i = 0;

foreach ( $_POST as $key => $value ) {

	if( $i % 2 ) $color = "#eeeeee";
	else $color = "#e2e2e2";
	$i++;

	$variables .= "
		<tr bgcolor='$color' height='30px' style='padding-left: 10px'>
			<td>$key: $value</td>
		</tr>
	";
}

$body = "
		<table cellspacing='0' width='100%'>
			$variables
		</table>
	";


$mail->msgHTML($body);


// Результат
if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'ok';
}

// $mail->SmtpClose();
?>