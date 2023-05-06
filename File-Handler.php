<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$email_from = 'info@pugc.com';-

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
              "User Name: $visitor_email.\n".
              "User Name: $subject.\n".
              "User Name: $message.\n";

$to = 'mano03106235656@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email   \r\n" ;
mail($to,$email_subject,$email_body , $headers);

header("Location: Contact.html");

?>