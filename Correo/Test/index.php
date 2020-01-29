<?php
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
require 'OAuth.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "sanck.one@gmail.com";
$mail->Password = "";
$mail->setFrom('sanck.one@gmail.com', 'sanckone');
$mail->addAddress('sanck.one@gmail.com', 'usuario de sanckone');
$mail->Subject = 'Asunto';
$mail->Body = "Contenido con o sin HTML<br><b>Dany</b>";
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
if (!$mail->send())
{
	echo "Error al enviar el E-Mail: ".$mail->ErrorInfo;
}
else
{
	echo "E-Mail enviado";
}
?>