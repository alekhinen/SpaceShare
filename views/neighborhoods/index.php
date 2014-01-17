<?php 
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 
?>

<!-- Declare DOCTYPE to be HTML5 -->
<!DOCTYPE html>

<html lang="en">
   <head>
      <!-- Base Head Elements -->
      <?php include_once($path . "/views/partials/baseCSS.php") ?>

      <!-- Page specific stylesheets -->
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/neighborhoods.css">

      <title>Neighborhoods</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>

        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Neighborhoods</h1>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>