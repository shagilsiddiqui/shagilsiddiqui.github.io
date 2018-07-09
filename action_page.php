<? php
$to = "shagil.aryan@gmail.com";
$Subject = "Email from my website";
$First_name= $_POST['firstname'];
$last_name= $_POST['lastname'];
$country= $_POST['country'];
$message= $_POST['message'];

$email_from= 'myserver@data.com'
$email_body= "firstname:$First_name \n"
			 "lastname:$last_name \n"
			 "User Email:$visitor_email \n"
			 "message:$message \n";
			 "country:$country \n";

$header= "From:$email_from \r\n";
$header= "Reply-To:$visitor_email \r\n";
mail ($to, $Subject, $email_body, $header);
echo "Email has been sent! Thank u $First_name";
?>