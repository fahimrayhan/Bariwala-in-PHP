

<!-- Login form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | BARIWALA</title>
    <?php include('common-meta.php'); ?>
</head>

<body>
    <?php include('components/nav.php'); ?>
    <div class="container">
        <main class="m-auto w-50">
            <h1 class='text-center'>Login</h1>
            <form method="post" action="login.php">
                <label for='username'>Username</label>
                <input type="text" name="username" class='form-control' required>
                <br>
                <label for='password'>Password</label>
                <input type="password" name="password" class='form-control' required>
                <br>
                <input type="submit" class='w-100 btn btn-lg btn-primary' value="Login">
            </form>
        </main>
     <!-- Include Bootstrap JS files at the end of the body -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </div>
     <?php include('components/footer.php'); ?>
</body>

</html>


<?php
// require_once 'User.php';

// Create a new User object
// $user = new User();

// Check if form is submitted
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     if ($user->login($username, $password)) {
//         echo "Login successful!";
//     } else {
//         echo "Invalid username or password.";
//     }
// }

// Close database connection
// $user->closeConnection();
// ?>