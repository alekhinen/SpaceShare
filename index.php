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
      
      <!-- Stylesheet specific to page -->
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/imageCarousel.css">
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/index.css">

      <title>SpaceShare</title>
   </head> 
   <body>
      <div class = "wrapper">

        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>
        

        <!-- Image Carousel -->
        <div class = "imageCarouselContainer">
          <div class = "contentContainer">
            <h1>Find your studio space today.</h1>
          </div>
          <img src = "/assets/images/warehouse.jpg" style = "width: 100%;margin-top: -360px;min-width:1400px"/>
        </div>
        

        <!-- Meat -->
        <div class = "meat">
          <h1>Neighborhoods</h1>
          <p>Not sure where to go? Here's a selection of popular locations to rent a studio.</p>

          <div class = "padder20"></div>

          <div class = "neighborhoodContainer">
            <a href = "/views/neighborhoods/index.php#boston">
              <div class = "infoContainer">
                <h2>Boston</h2>
              </div>
            </a>
            <img src = "/assets/images/boston.jpg"/>
          </div>

          <div class = "neighborhoodContainer">
            <a href = "/views/neighborhoods/index.php#newyork">
              <div class = "infoContainer">
                <h2>New York</h2>
              </div>
            </a>
            <img src = "/assets/images/newYorkCity.jpg"/>
          </div>

          <div class = "neighborhoodContainer last">
            <a href = "/views/neighborhoods/index.php#seattle">
              <div class = "infoContainer">
                <h2>Seattle</h2>
              </div>
            </a>
            <img src = "/assets/images/seattle.jpg"/>
          </div>

          <div class = "clear"></div>

          <div class = "neighborhoodContainer">
            <a href = "/views/neighborhoods/index.php#portland">
              <div class = "infoContainer">
                <h2>Portland</h2>
              </div>
            </a>
            <img src = "/assets/images/portland.jpg"/>
          </div>

          <div class = "neighborhoodContainer">
            <a href = "/views/neighborhoods/index.php#sanfrancisco">
              <div class = "infoContainer">
                <h2>San Francisco</h2>
              </div>
            </a>
            <img src = "/assets/images/sanFrancisco.jpg"/>
          </div>

          <div class = "neighborhoodContainer last">
            <a href = "/views/neighborhoods/index.php#chicago">
              <div class = "infoContainer">
                <h2>Chicago</h2>
              </div>
            </a>
            <img src = "/assets/images/chicago.jpg"/>
          </div>
          
          <div class = "clear"></div>

          <center>
            <a href = "/views/neighborhoods/">View All Neighborhoods</a>
          </center>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
      
   </body>
</html>