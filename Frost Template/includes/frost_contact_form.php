<?php	
	if (empty($_POST['name_input']) && strlen($_POST['name_input']) == 0 || empty($_POST['email_input']) && strlen($_POST['email_input']) == 0)
	{
		return false;
	}
	
	$name_input = $_POST['name_input'];
	$email_input = $_POST['email_input'];
	$phone_input = $_POST['phone_input'];
	$address_input = $_POST['address_input'];
	$company_input = $_POST['company_input'];
	$comments_input = $_POST['comments_input'];
	
	$to = 'webdesign@isiahjohnson.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Frost Template website.";
	$email_body = "You have received a new message from your Frost Template. \n\n".
				  "Name_Input: $name_input \nEmail_Input: $email_input \nPhone_Input: $phone_input \nAddress_Input: $address_input \nCompany_Input: $company_input \nComments_Input: $comments_input \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: webmaster@isiahjohnson.com\n";
	$headers .= "Reply-To: $email_input";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>