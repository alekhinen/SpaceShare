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

        <!-- Page Specific Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/listings.css">

       <title>Boston</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Boston</h1>
          
          <div class = "imgContainer">
            <img src = "/assets/images/featuredNeighborhoods/bostonSkyline.jpg"/>
          </div>
          
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur orci ut lacus aliquet eleifend. Donec facilisis porttitor mi, vel rhoncus tortor tincidunt quis. Pellentesque eleifend bibendum malesuada. Ut sagittis dictum dolor cursus commodo. Sed suscipit varius consequat. Morbi placerat mauris condimentum, tincidunt est ac, dignissim neque. Nullam congue elit purus, eget condimentum orci consectetur et. Vestibulum vehicula metus sit amet euismod eleifend. Donec fermentum erat ac volutpat viverra. Ut a nisi facilisis dolor commodo interdum quis sed libero. Cras ac sem posuere, venenatis turpis sed, tincidunt nisl.
          </p>

          <div class = "padder20"></div>

          <!-- The listings table -->
          <?php include_once($path . '/views/listings/boston/_table.php') ?>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>