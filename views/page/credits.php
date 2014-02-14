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

       <title>Credits</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Credits</h1>
          <p>
            <b>Technologies Used:</b>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>Javascript</li>
              <li>JQuery</li>
              <li>MAMP</li>
            </ul>
            <br>
            <b>Sources Used:</b>
            <ul>
              <li><a href = "https://github.com/designmodo/Flat-UI">Flat UI</a> (used for buttons and inputs)</li>
              <li><a href = "http://www.tripadvisor.com/">Trip Advisor</a> (for photos)</li>
              <li><a href = "http://iconmonstr.com/">Icon Monstr</a> (for icon in logo)</li>
            </ul>
          </p>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>