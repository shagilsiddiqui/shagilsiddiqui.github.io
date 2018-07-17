<?php

if(isset[$_POST['submit']){

$First_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$country = $_POST['country'];
$message = $_POST['message'];

$Subject = "Email from my website";
$to = "shagil.aryan@gmail.com";
$email_from= 'myserver@data.com';
$email_body= "firstname:$First_name \n"
			 "lastname:$last_name \n"
			 "message:$message \n"
			 "country:$country \n";

$header= "From:$email_from \r\n";
mail($to, $Subject, $email_body, $header);
header("Location: contact.html");
}
?>