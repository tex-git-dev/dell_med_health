<?php
 //require 'PHPMailer/PHPMailerAutoload.php';

     
function SendMail($to,$ton,$sub,$msg){
/*	$f ='dell.password@utx.edu';
	$fn = 'Dell Health';
	$mail = new PHPMailer;
	$mail->isSMTP();                                      
	$mail->Host = 'smtp.gmail.com';  
	$mail->SMTPAuth = true;                               
	$mail->Username = $f;                 
	$mail->Password = 'a6j7&Zq2';                          
	$mail->SMTPSecure = 'tls';                           
	$mail->Port = 465; 
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
	}*/
	
	    require_once './mail/class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPDebug = 1;
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'dell.password@utx.edu';// SMTP username
        $mail->Password = 'a6j7&Zq2';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->setFrom('dell.password@utx.edu', 'Dell Health');
        $mail->addAddress($to);     // Add a recipient
        $mail->isHTML(true);                                  // Set email format to HTML
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