<?php
//get data from form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = "jl435063@hotmail.com";
$headers = "From: " . $email . "\r\n Subject: " . $subject;
$txt = "Name = " . $first_name . $last_name . "\r\n  Phone # = " . $phone . "\r\n Message =" . $message;

mail($to, $subject, $txt, $headers) or die("Error!");

echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>J&J Construction, LLC.</title>
    </head>
<body>
    <h1>Thankyou</h1>
</body>
</html>
';
