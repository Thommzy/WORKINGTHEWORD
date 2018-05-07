<?php  
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];

	$email_from = 'info@workingtheword.org';

	$email_subject = "Workingtheword Form Submission";

	$email_body = "User Name : $name \n".
					"User Email : $visitor_email \n".
						"User message : $message \n".
						"User Phone Number : $phone \n";

	$to = "timothyobeisun@yahoo.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact.html");	

?>