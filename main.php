<?php
//get data from form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = "jl435063@hotmail.com";
$subject = $_POST['subject'];
$txt = "Name = " . $first_name . $last_name . "\r\n  Email = " . $email . "\r\n  Phone # = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@jnjconstructionllc.net" . "\r\n" .
    "CC: somebodyelse@example.com";
if (isset($_POST['submit']) && $email != null) {
    mail($to, $subject, $txt, $headers);
    header("Location:index.html?mailsend");
}
