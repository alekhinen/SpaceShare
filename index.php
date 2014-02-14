<?php 
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 

  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';
  sec_session_start();

  if(login_check($mysqli) == true) {
    if(isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {  
      $curuser = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
    }
  }
?>

<!-- Declare DOCTYPE to be HTML5 -->
<!DOCTYPE html>

<html lang="en">
   <head>
      <!-- Base Head Elements -->
      <?php include_once($path . "/views/partials/baseHead.php") ?>
      
      <!-- Stylesheet specific to page -->
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/imageCarousel.css">
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/index.css">

      <!-- Scripts specific to page -->
      <script language="javascript" type="text/javascript" src="/assets/javascripts/imageCarousel.js"></script>

      <title>SpaceShare</title>
   </head> 
   <body>
      <div class = "wrapper">

        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>
        

        <!-- Image Carousel -->
        <div class = "imageCarouselContainer">
          <!-- Buttons -->
          <div class = "buttonsContainer">
            <!-- Button Left -->
            <div class = "button" id = "btnLeft" style = "float:left;">
              <img src = "/assets/icons/arrow_left_white.svg" style = "margin-left: -35px;"/>
            </div>
            <!-- Button Right -->
            <div class = "button" id = "btnRight" style = "float:right;">
              <img src = "/assets/icons/arrow_right_white.svg" style = "margin-left: -40px;"/>
            </div>
          </div>

          <!-- Main Form -->
          <div class = "formContainer">
            <h1>Find your studio space today.</h1>
            <!--
            <p>
              Price Range [low - high]
              <br>
              Location [dropdown menu]
              <br>
              Square feet [low - high]
              <br>
              When to rent out
              <br>
              Search button
            </p>
            -->
          </div>

          <!-- Main section for content -->
          <div id = "imageCarousel">
            <!-- Content Slide 1 -->
            <div class = "contentContainer">
              <img src = "/assets/images/featuredNeighborhoods/sanFranciscoSkyline.jpg"/>
              <a class = "nothing" href = "/views/neighborhoods/index.php#sanfrancisco">
                <div class = "infoPane">
                  <h3>San Francisco</h3>
                </div>
              </a>
            </div>

            <!-- Content Slide 2 -->  
            <div class = "contentContainer">
              <img src = "/assets/images/warehouse.jpg" style = "margin-top: -360px;min-width:1400px"/>
              <a class = "nothing" href = "/views/listings/boston/show.php">
                <div class = "infoPane">
                  <h3>Boston Studio</h3>
                </div>
              </a>
            </div>  
          

            <!-- Content Slide 3 -->  
            <div class = "contentContainer">
              <img src = "/assets/images/featuredNeighborhoods/seattleSkyline.jpg"/>
                <a class = "nothing" href = "/views/neighborhoods/index.php#seattle">
                  <div class = "infoPane">
                    <h3>Seattle</h3>
                  </div>
                </a>
            </div>  
          </div>
          
          
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