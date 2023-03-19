<?php


$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://spotless-sweepers.ahantyasharma.repl.co';

$email_subject = 'Contact Us Submission';

$email_body = "Name: $name.\n".
							"Contact Email: $visitor_email.\n".
							"Subject: $subject.\n".
							"Message: $message.\n";

$to = 'ahantyasharma57@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>