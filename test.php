<?php 
  
  require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;
   $mail = new PHPMailer;
   $mail->isSMTP();
   //$mail->SMTPDebug = 2;
   $mail->Host = 'smtp.hostinger.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'contact@mbbsatgeorgia.com';
   $mail->Password = 'Test@200223';
   $mail->setFrom('contact@mbbsatgeorgia.com');
  // $mail->addReplyTo('mymail@myawesomedomain.tld', 'Your Name');
   $mail->addAddress('anandhalagappa@gmail.com', 'Receiver Name');
   $mail->Subject = 'Checking if PHPMailer works';
  // $mail->msgHTML(file_get_contents('message.html'), _DIR_);
   $mail->Body = 'This is just a plain text message body';
   //$mail->addAttachment('attachment.txt');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
?>