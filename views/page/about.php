<?php 
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 
?>

<!-- Declare DOCTYPE to be HTML5 -->
<!DOCTYPE html>

<html lang="en">
   <head>
        <!-- Base Head Elements -->
        <?php include_once($path . "/views/partials/baseHead.php") ?>

       <title>About</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">About</h1>
          <p>
            SpaceShare is a space sharing application targeted for individuals who need to rent out studio or industrial space for their own projects/desires. The target demographic are artists and designers who do not have their own space to build their projects. The idea is to have sharable and rentable spaces across major metropolitan areas. The studios can be rented out for days or weeks. Users can find spaces themselves or search from a user-generated set of listings.
          </p>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>