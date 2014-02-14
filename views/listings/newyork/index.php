<?php 
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 

  include_once($path . '/includes/sessionStarter.php');
?>

<!-- Declare DOCTYPE to be HTML5 -->
<!DOCTYPE html>

<html lang="en">
   <head>
        <!-- Base Head Elements -->
        <?php include_once($path . "/views/partials/baseHead.php") ?>

        <!-- Page Specific Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/listings.css">

       <title>New York</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">New York</h1>
          
          <div class = "imgContainer">
            <img src = "/assets/images/featuredNeighborhoods/newYorkSkyline.jpg"/>
          </div>
          
          <p>
            Aliquam erat volutpat. Curabitur convallis odio sem, id condimentum est sollicitudin eu. Donec justo lectus, dignissim eu sodales quis, eleifend sodales nulla. Sed a ultricies turpis. Suspendisse potenti. Sed pretium vestibulum blandit. Sed feugiat erat eget lectus adipiscing, eget cursus turpis malesuada. Sed laoreet purus sed odio porta, imperdiet accumsan est scelerisque. Vivamus adipiscing nisl quis tortor volutpat, ut tempor erat euismod.
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