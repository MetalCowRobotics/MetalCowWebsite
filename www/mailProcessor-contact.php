<?php
require '../vendor/autoload.php';

//sanitize all inputs for security
$name = filter_var($_POST["myname"], FILTER_SANITIZE_ENCODED);
$message = filter_var($_POST["mymessage"], FILTER_SANITIZE_ENCODED);
$subject = filter_var($_POST["mysubject"], FILTER_SANITIZE_ENCODED);

if(filter_var($_POST["myemail"], FILTER_VALIDATE_EMAIL) ){
  $email = $_POST["myemail"];
}else{
  header('Location: index.php');
}

/////
//Send the customer's inquiry to MetalCow
/////

$from = new SendGrid\Email($name, $email);
$subject = "Website Inquiry: ".$subject;
$to = new SendGrid\Email("MetalCow Robotics", "info@metalcowrobotics.com");
$content = new SendGrid\Content("text/plain", $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();


//ToDo: Add a response ticket email to the customer to confirm we have recieved their question.
//Need to look up how to write this professionally.  What did JawBone do with your ticket?

//go back to the homepage
//header('Location: index.php');

?>
