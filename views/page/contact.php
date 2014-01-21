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

       <title>Contact</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>



        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Contact</h1>
          <p>
            Feel free to contact us at <b>(555) 555-5555</b> or email us at 
            <br>
            <a href = "#">info[at]nickalekhine.com</a>
          </p>
        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>