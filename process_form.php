<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can add validation and sanitization here before sending the email.

    $to = "contact@jessmac.me"; // Replace with your email address
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect the user to a thank you page after sending the email
    header("Location: thank_you.html");
} else {
    // Handle the case where the form wasn't submitted properly
    echo "Oops! Something went wrong.";
}
?>
