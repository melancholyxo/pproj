<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'diya-a@ishelsinki.fi';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n" .
              "User Email: $email.\n" .
              "User Message: $message.\n";
$to = "diya-a@ishelsinki.fi";

$headers = "From: $email_from \r\n";

// Send email
mail($to, $email_subject, $email_body, $headers);
?>