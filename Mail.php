<?php
include("Mail.php");
/* mail setup recipients, subject etc */
$recipients = "lawson.kurtz@gmail.com";
$headers["From"] = "lawson@nujigroup.com";
$headers["To"] = "lawson.kurtz@gmail.com";
$headers["Subject"] = "Test Email";
$mailmsg = "Hello, This is a test.";
/* SMTP server name, port, user/passwd */
$smtpinfo["host"] = "smtp.nujigroup.com";
$smtpinfo["port"] = "25";
$smtpinfo["auth"] = true;
$smtpinfo["username"] = "nujigroupcom";
$smtpinfo["password"] = "tng5678.$";
/* Create the mail object using the Mail::factory method */
$mail_object =& Mail::factory("smtp", $smtpinfo);
/* Ok send mail */
$mail_object->send($recipients, $headers, $mailmsg);
?>