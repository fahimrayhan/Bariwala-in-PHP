<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Regular expression pattern for email validation
    $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
        // Redirect back to contact form with error message
        header("Location: contact.php?error=empty_fields");
        exit();
    } elseif (!preg_match($email_pattern, $email)) {
        // Redirect back to contact form with error message for invalid email
        header("Location: contact.php?error=invalid_email");
        exit();
    }

    // Perform necessary actions with the form data, such as sending an email, storing data in a database, etc.

    // After processing, redirect back to contact form with success message
    header("Location: contact.php?success=true");
    exit();
} else {
    // Redirect back to contact form if form is not submitted directly
    header("Location: contact.php");
    exit();
}
?>