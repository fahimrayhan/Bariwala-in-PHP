<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME | Bariwala</title>
    <?php include('common-meta.php'); ?>
    
</head>
<body>

    <?php include('components/nav.php'); ?>
        <!-- Title Section -->
      <div class="mt-2 mb-5 d-flex flex-column justify-content-center align-items-center" style="background-image:url('assets/background/header_bg.jpg'); background-size:cover; height:500px;background-repeat:no-repeat; opacity:1; background-attachment:fixed">
        <div class="text-center">
          <div class="bg-white p-3 rounded">
            <h1>Let us Guide you
               <span class="fw-bolder">Home</span>
            </h1>
          </div>
          <div class="bg-white p-1 mt-2 mb-2 rounded">
            <p>Simplifying your home finding and manageing hassles</p>
          </div>
        </div>
       <?php include('components/header-search.php'); ?>
      </div>

     <?php include('components/footer.php'); ?>

 <!-- Include Bootstrap JS files at the end of the body -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>