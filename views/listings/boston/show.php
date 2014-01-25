<?php 
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 
?>

<!-- Declare DOCTYPE to be HTML5 -->
<!DOCTYPE html>

<!-- This is the view for a specific listing in boston -->
<html lang="en">
   <head>
        <!-- Base Head Elements -->
        <?php include_once($path . "/views/partials/baseHead.php") ?>

        <!-- Page Specific Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/listings.css">

       <title>205 Portland Street</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">205 Portland Street, Boston, MA</h1>
          <div class = "imgContainer">
            <img src = "/assets/images/warehouse.jpg"/>
          </div>
          <div class = "imgNavigation">
              ...
          </div>

          <div class = "textContent">
            <div class = "features">
                <h3>Features</h3>
                <ul style = "float:left;width:100px;">
                    <li>Floor Space</li>
                    <li>Amenities</li>
                    <li>Contact Info</li>
                </ul>
                <ul style = "float:left">
                    <li>1500 sq. ft.</li>
                    <li>Wi-Fi, Bathrooms</li>
                    <li>(555) 555-5555 <br> test@example.com</li>
                    lol
                </ul>
                <div class = "clear"></div>
            </div>
            <div class = "description">
                <h3>Description</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae leo vel lectus vehicula venenatis a sit amet enim. Aliquam vel iaculis lacus, quis dapibus arcu. In posuere, magna et aliquam accumsan, mauris nibh euismod dolor, eu hendrerit nunc nisl quis purus. Ut sit amet aliquet mi. Phasellus vestibulum rutrum tortor, luctus adipiscing odio consequat sed. Etiam placerat dui vitae lacus blandit faucibus. Aliquam congue turpis ac dignissim rhoncus. Maecenas non mi in nunc pretium posuere sed eu eros. Fusce quis ultricies leo, a vulputate risus. Donec quis tellus quis felis consectetur condimentum sed porttitor massa. Praesent vel mauris quis dui pellentesque venenatis in ut nunc. Sed eget nisl at dui luctus facilisis. Cras ut pharetra elit. Aenean eleifend dolor sed neque varius fringilla. In quam nulla, malesuada et elit et, accumsan fringilla est.
                </p>
            </div>
          </div>
          <div class = "clear"></div>
          

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>