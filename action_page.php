<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    
    // Set up the email
    $to = "arif26119@gmail.com"; // Your email address
    $subject = "New message from your website: $subject";
    $body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
    $headers = "From: $name <$email>";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: /your-form-page.html"); // Replace with the actual URL of your form page
    exit();
}
?>
