<?php
// Establish MySQL database connection
$mysqli = new mysqli('localhost', 'username', 'password', 'dbname');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Form validation
$errors = array();
if (empty($name)) {
    $errors[] = "Name is required.";
}
if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email is invalid.";
}
if (empty($message)) {
    $errors[] = "Message is required.";
}

if (empty($errors)) {
    // Insert form data into database
    $query = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sss", $name, $email, $message);
    if ($stmt->execute()) {
        $stmt->close();
        $mysqli->close();
        echo "Form submitted successfully.";
    } else {
        $stmt->close();
        $mysqli->close();
        echo "Error submitting form.";
    }
} else {
    // Display error messages
    foreach ($errors as $error) {
        echo "<p>Error: " . $error . "</p>";
    }
}
?>