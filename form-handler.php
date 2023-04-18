<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://nova-expo.github.io/Nova/Nova_landingpagem.html'
$email_subject = 'New Submission'
$email_body = "User Name: $name. \n".
              "User Email: $visitor_email. \n".
              "Subject: $subject\n".
              "User Message: $message. \n".;

$to = 'ap.galefranchesca.agasino@apecschools.edu.ph'
$headers = "From: $email_from \r\n"
$headers . = "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);
header ("Location: Nova_about.html")
?>
