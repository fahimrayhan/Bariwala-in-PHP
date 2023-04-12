<?php
require_once 'User.php';

// Create a new User object
$user = new User();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->register($username, $password)) {
        echo "Registration successful!";
    } else {
        echo "Error: Registration failed.";
    }
}

// Close database connection
$user->closeConnection();
?>

<!-- Registration form -->
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <h1>Registration</h1>

</body>
</html>