<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'ashish007raj@gmail.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		
		$res['message'] = 'My Robots Just Delivered Your Message To Me :-)';
    }
	else{
		$res['message'] = 'Shame, My Robots Failed :-( Please Mail Me @ ashish007raj@gmail';
	}
	
	
	echo json_encode($res);
}

?>