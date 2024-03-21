<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'aniwurakehinde@gmail.com';
    $subject = 'New message from your portfolio website';
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Your message has been sent successfully. Thank you!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
} else {
    echo '<p>Access denied.</p>';
}
?>
