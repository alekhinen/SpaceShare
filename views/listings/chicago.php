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

        <!-- Page Specific Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/listings.css">

       <title>Chicago</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Chicago</h1>
          
          <div class = "imgContainer">
            <img src = "/assets/images/featuredNeighborhoods/chicagoSkyline.jpg"/>
          </div>
          
          <p>
            Nunc dapibus sed libero ac consectetur. Sed porttitor sed tellus eu gravida. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tellus lorem, sagittis eget magna dapibus, rhoncus posuere est. Sed viverra lacus ligula, sed dictum massa tristique quis. Vestibulum posuere dolor ut cursus ultricies. Ut volutpat enim at urna laoreet, nec ullamcorper tortor ultricies. Ut fringilla ante sit amet justo lobortis, vitae tempor sapien sodales. Vivamus sollicitudin, nunc et sodales viverra, turpis eros sollicitudin eros, vel congue enim lorem vitae tellus. Nunc justo leo, scelerisque ac sollicitudin eget, euismod a ipsum. Etiam placerat urna nec nisl gravida, consequat bibendum eros sodales. Donec elit nulla, suscipit eget tincidunt a, imperdiet vel est. Vestibulum volutpat ultricies semper.
          </p>

          <div class = "padder20"></div>

          <h1>Listings</h1>
          <div class = "studioListing">
            No listings available. :(
          </div>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>