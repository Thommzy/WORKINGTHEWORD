<?php  
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];

	$email_from = 'info@workingtheword.org';

	$email_subject = "Subscribers For Today";

	$email_body =
					"User Email : $visitor_email \n";

	$to = "timothyobeisun@yahoo.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: thank_you.html");	

?>