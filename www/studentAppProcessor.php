
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


//setup timezone
date_default_timezone_set('America/Chicago');

//build the application message from the webform contents
$message = "MetalCow,

The following application has been submitted via the website on ".date('m/d/Y h:i:s a', time())."
Please review and follow up with the student.

++++ Student Contact Info ++++
Name: ".$studentFname." ".$studentLname."
Email: ".$studentEmail."
Phone: ".$studentPhone."

++++ Parent Contact Info ++++
Name: ".$parentFname." ".$parentLname."
Email: ".$parentEmail."
Phone: ".$parentPhone."

++++ Student Academics ++++
School: ".$studentSchool."
Grade: ".$studentGrade."
How did student find out about MetalCow Robotics: ".$studentReference."
Robotics Experience:
".$studentRobotics."

Other Commitments:
".$studentCommitments."

++++ Student Team Related Info ++++

Student is applying for a role on: ".$studentRole."
Student's Skills:
".$studentSkills."

Student's Expectations:
".$studentExpectations."

Something the student finds interesting about themself:
".$studentInteresting."


----- End of Application: www.MetalCowRobotics.com --------";


//make a connection to google to get gmail to send email for us
$name = "MetalCow Robotics";
$email = "info@metalcowrobotics.com";
$from = new SendGrid\Email($name, $email);
$subject = "MetalCow Application: ".$studentFname." ".$studentLname;
$to = new SendGrid\Email("MetalCow Robotics", "info@metalcowrobotics.com");
$content = new SendGrid\Content("text/html", $message);
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
//header('Location: index.php');
echo $message;
?>
