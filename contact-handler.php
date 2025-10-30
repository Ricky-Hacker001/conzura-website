<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $number = filter_var(trim($_POST["number"]), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);

    // Basic validation
    if (empty($name) || empty($number) || empty($message)) {
        // Redirect back with an error message
        header("Location: contact.php?status=error");
        exit;
    }

    // Email details
    $to = "your-email@example.com"; // <-- IMPORTANT: SET YOUR EMAIL ADDRESS HERE
    $subject = "New Contact Form Submission from " . $name;
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Here are the details:\n\n";
    $body .= "Name: $name\n";
    $body .= "Number: $number\n";
    $body .= "Message:\n$message\n";
    
    // It's good practice to set a "From" header
    $headers = "From: no-reply@conzurasoft.com" . "\r\n" .
               "Reply-To: " . $name; // This is a placeholder, a valid email from the form is better if you collect it

    // Send email using PHP's mail() function
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to the contact page with a success message
        header("Location: contact.php?status=success");
    } else {
        // Handle mail server error (less common, but possible)
        header("Location: contact.php?status=mailerror");
    }
    exit;
} else {
    // If not a POST request, redirect to the contact page
    header("Location: contact.php");
    exit;
}
?>