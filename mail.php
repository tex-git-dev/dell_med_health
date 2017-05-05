<?php  
function SendMail($to,$ton,$sub,$msg){
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