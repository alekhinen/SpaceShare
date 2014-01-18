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

       <title>Seattle</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Seattle</h1>
          
          <div class = "imgContainer">
            <img src = "/assets/images/featuredNeighborhoods/seattleSkyline.jpg"/>
          </div>
          
          <p>
            Sed condimentum tincidunt arcu non tincidunt. Etiam mattis id purus ut pulvinar. Aliquam vitae elementum erat. Phasellus vel iaculis sem. Pellentesque non bibendum erat. Donec purus diam, iaculis egestas dolor quis, adipiscing placerat enim. In hac habitasse platea dictumst. Duis sed odio vel est mattis hendrerit vel eu dolor. Integer aliquam eros ac neque porta, sed viverra sapien commodo. Nulla consectetur augue ac mi iaculis, in fermentum mi feugiat. Nunc eget interdum elit. Aliquam in libero vel sem laoreet imperdiet. Nam varius, velit eget consequat egestas, quam neque lobortis magna, id pulvinar ipsum est sed urna.
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