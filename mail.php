<?php
 require 'PHPMailer/PHPMailerAutoload.php';

     
function SendMail($to,$ton,$sub,$msg){
	$f ='deepak.sharma@Luminad.com';
	$fn = 'Deepak Sharma';
	$mail = new PHPMailer;
	$mail->isSMTP();                                      
	$mail->Host = 'mail.luminad.com';  
	$mail->SMTPAuth = true;                               
	$mail->Username = $f;                 
	$mail->Password = 'BMz59Hrc';                          
	$mail->SMTPSecure = 'tls';                           
	$mail->Port = 587; 
	$mail->setFrom($f, $fn);
	$mail->addAddress($to, $ton); 
	$mail->isHTML(true); 
	$mail->Subject = $sub;
	$mail->Body    = $msg;
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	   echo 1;
	}
}                                  


?>