

<?php
		/*$name = $_POST['name']; 
	$visitor_email = $_POST['email']; 
	$message = $_POST['message'];

	$email_from = 'contactinfo@kwdevel.dx.am'; 
	$email_subject = "Contact Kristian Willey"; 
	$email_body = "User Name: $name.\n".
				  "User Email: $visitor_email.\n".
					"User Message: $message.\n"; 
	$to = "kristianwilley@gmail.com"; 
	$headers = "From $email_from \r\n"; 
	$headers .= "Reply-To: $visitor_email \r\n"; 
	mail($to,$email_subject,$email_body,$headers); 
	header("Location: about.html"); 

?>*/ 
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$m = nl2br($_POST['m']);
	$to = "kristianwilley@gmail.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>
