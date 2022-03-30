<?php	
	if (empty($_POST['name_input_4144']) && strlen($_POST['name_input_4144']) == 0 || empty($_POST['email_input_4144']) && strlen($_POST['email_input_4144']) == 0)
	{
		return false;
	}
	
	$name_input_4144 = $_POST['name_input_4144'];
	$email_input_4144 = $_POST['email_input_4144'];
	$phone_input_4144 = $_POST['phone_input_4144'];
	$address_input_4144 = $_POST['address_input_4144'];
	$company_input_4144 = $_POST['company_input_4144'];
	$comments_input_4144 = $_POST['comments_input_4144'];
	
	$to = 'powertimebusiness@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Frost Template website.";
	$email_body = "You have received a new message from your Frost Template. \n\n".
				  "Name_Input_4144: $name_input_4144 \nEmail_Input_4144: $email_input_4144 \nPhone_Input_4144: $phone_input_4144 \nAddress_Input_4144: $address_input_4144 \nCompany_Input_4144: $company_input_4144 \nComments_Input_4144: $comments_input_4144 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: powertimebusiness@gmail.com\n";
	$headers .= "Reply-To: $email_input_4144";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>