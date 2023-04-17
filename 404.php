<!DOCTYPE html>
<html lang="en">
<head>
    <title>404 Error - Page Not Found</title>
    <?php include('common-meta.php'); ?>

    <!-- Include LottieFiles library -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.3/lottie.min.js"></script> -->

    
</head>
<body>

    <?php include('components/nav.php'); ?>

    <div class="d-flex justify-content-center">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_cr9slsdh.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
    </div>
    

     <?php include('components/footer.php'); ?>

 <!-- Include Bootstrap JS files at the end of the body -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>