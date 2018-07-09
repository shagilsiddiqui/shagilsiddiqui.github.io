<?php
$First_name= $_POST['firstname'];
$last_name= $_POST['lastname'];
$country= $_POST['country'];
$message=$_POST['message'];

$email_from='myserver@data.com'
$email_subject="naya mal aaya hai kuch";
$email_body="firstname:$First_name \n"
			 "lastname:$last_name \n"
			 "User Email:$visitor_email \n"
			 "message:$message \n";
			 "country:$country \n";

$to="shagil.aryan@gmail.com";
$header="From:$email_from \r\n";
$header= "Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$header);
header("Location:contact.html");
?>