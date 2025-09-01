<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $message = htmlspecialchars($_POST['message']);

    $to = "danlockgarageltd@gmail.com";
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name
Email: $email
Phone: $phone
Location: $location

Message:
$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    header("Location: index.html");
    exit;
}
?>
