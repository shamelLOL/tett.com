<?php	
	if (empty($_POST['name_input_12491']) && strlen($_POST['name_input_12491']) == 0 || empty($_POST['email_input_12491']) && strlen($_POST['email_input_12491']) == 0)
	{
		return false;
	}
	
	$name_input_12491 = $_POST['name_input_12491'];
	$email_input_12491 = $_POST['email_input_12491'];
	$phone_input_12491 = $_POST['phone_input_12491'];
	$address_input_12491 = $_POST['address_input_12491'];
	$company_input_12491 = $_POST['company_input_12491'];
	$comments_input_12491 = $_POST['comments_input_12491'];
	
	$to = 'webdesign@isiahjohnson.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Frost Template website.";
	$email_body = "You have received a new message from your Frost Template. \n\n".
				  "Name_Input_12491: $name_input_12491 \nEmail_Input_12491: $email_input_12491 \nPhone_Input_12491: $phone_input_12491 \nAddress_Input_12491: $address_input_12491 \nCompany_Input_12491: $company_input_12491 \nComments_Input_12491: $comments_input_12491 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: webmaster@isiahjohnson.com\n";
	$headers .= "Reply-To: $email_input_12491";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>