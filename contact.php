<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME | Bariwala</title>
    <?php include('common-meta.php'); ?>
    
</head>
<body>

    <?php include('components/nav.php'); ?>
    <!-- Contact form -->
    <div class="container mt-5 w-50">
        <h1>Contact Us</h1>
        <form action="cgi/submit_contact.php" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </form>
    </div>

     <?php include('components/footer.php'); ?>

 <!-- Include Bootstrap JS files at the end of the body -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>