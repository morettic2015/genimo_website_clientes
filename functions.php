<?php
// Send Email
$send;
if( isset( $_POST['email_address'] ) ){
	$send="Your inquiry submitted successfully. we will contact you very soon. ";
	send_message_to_agent( $_POST['full_name'], $_POST['phone_number'], $_POST['email_address'], $_POST['message'] );
} else {
	$send="fail";	
}

function send_message_to_agent( $full_name, $phone_number, $email_address, $visiter_message ){
	
	$to      = 'fortunecreations@outlook.com';
	$subject = 'House Visit';
	
	$message = '<p>Name : '.$full_name.'</p>';
	$message .= '<p>Phone Number : '.$phone_number.'</p>';
	$message .= '<p>Email Address : '.$email_address.'</p>';
	$message .= '<p>Message : '.$visiter_message.'</p>';
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail($to, $subject, $message, $headers);
}

echo $send;
//die;
?>
