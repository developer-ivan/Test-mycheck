<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "ivandguerrar@gmail.com"; // email address
    $subject = "New message from contact form";
    $message_body = "Name: $full_name\nEmail: $email\nPhone: $phone\nMessage: $message";

    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending the message. Please try again.";
    }
}
?>
