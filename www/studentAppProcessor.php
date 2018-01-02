
<?php
require '../vendor/autoload.php';

//validate form data
$studentFname = filter_var($_POST["studentFname"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentLname = filter_var($_POST["studentLname"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentEmail = filter_var($_POST["studentEmail"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentPhone = filter_var($_POST["studentPhone"], FILTER_SANITIZE_SPECIAL_CHARS);

$parentFname = filter_var($_POST["parentFname"], FILTER_SANITIZE_SPECIAL_CHARS);
$parentLname = filter_var($_POST["parentLname"], FILTER_SANITIZE_SPECIAL_CHARS);
$parentEmail = filter_var($_POST["parentEmail"], FILTER_SANITIZE_SPECIAL_CHARS);
$parentPhone = filter_var($_POST["parentPhone"], FILTER_SANITIZE_SPECIAL_CHARS);
$parentAdditional = filter_var($_POST["parentAdditional"], FILTER_SANITIZE_SPECIAL_CHARS);

$studentSchool = filter_var($_POST["studentSchool"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentGrade = filter_var($_POST["studentGrade"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentRobotics = filter_var($_POST["studentRobotics"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentCommitments = filter_var($_POST["studentCommitments"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentReference = filter_var($_POST["studentReference"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentRole = filter_var($_POST["studentRole"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentSkills = filter_var($_POST["studentSkills"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentExpectations = filter_var($_POST["studentExpectations"], FILTER_SANITIZE_SPECIAL_CHARS);
$studentInteresting = filter_var($_POST["studentInteresting"], FILTER_SANITIZE_SPECIAL_CHARS);


//if there is an issue, redirect
//pass back things entered.


//build the application message from the webform contents
$message = "";
$message .= "MetalCow,

The following application has been submitted via the website.
Please review and follow up with the student.\n\n";

$message .= "**** Student Contact Info ****\n";
$message .= "\tName: ".$studentFname." ".$studentLname."\n";
$message .= "\tEmail: ".$studentEmail."\n";
$message .= "\tPhone: ".$studentPhone."\n\n";

$message .= "**** Parent Contact Info ****\n";
$message .= "\tName: ".$parentFname." ".$parentLname."\n";
$message .= "\tEmail: ".$parentEmail."\n";
$message .= "\tPhone: ".$parentPhone."\n";
$message .= "\tOther: ".$parentAdditional."\n\n";

$message .= "**** Student Academic Background ****\n";
$message .= "\tSchool: ".$studentSchool."\n";
$message .= "\tGrade: ".$studentGrade."\n";
$message .= "\tRobotics Experience: ".$studentRobotics."\n";
$message .= "\tOther Commitments: ".$studentCommitments."\n\n";

$message .= "**** Student Team Related Info ****\n";
$message .= "\tHow did student find out about MetalCow Robotics: ".$studentReference."\n\n";
$message .= "\tStudent is applying for a role on: ".$studentRole."\n";
$message .= "\tStudent's Skills: ".$studentSkills."\n";
$message .= "\tStudent's Expectations: ".$studentExpectations."\n";
$message .= "\tSomething the student finds interesting about themself: ".$studentInteresting."\n\n";


//make a connection to google to get gmail to send email for us
$name = "MetalCow Robotics";
$email = "info@metalcowrobotics.com";
$from = new SendGrid\Email($name, $email);
$subject = "MetalCow Application: ".$studentFname." ".$studentLname;
$to = new SendGrid\Email("MetalCow Robotics", "info@metalcowrobotics.com");
$content = new SendGrid\Content("text/plain", $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

//Send email to info@metalcowrobotics.com with the application
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();





/**************************
Build up an email to the student
******************/
//send email to applicant with links to next available meeting times
//look up next available times on google calendar for times labeled 'interview'

//in the email let them select a time, if they select, update the one they picked with their info.

//do we need some type of one time key?  How could this be hacked?

//Build a second message to the student and parent

//go back to the homepage
header('Location: index.php');
?>
