<!-- Declare DOCTYPE to be HTML5 -->
<!DOCTYPE html>

<html lang="en">
   <head>
      <!-- Base Head Elements -->
      <?php include_once($path . "/views/partials/baseHead.php") ?>

      <!-- Page Specific Stylesheets -->
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/listings.css">

      <title>Studio Listings</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Studio Listings</h1>
          <?php include_once "_table.php"; ?>
        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>