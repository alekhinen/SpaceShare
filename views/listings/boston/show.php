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

          <form id = "costCalculator">
            <h2>Calculate Your Total Cost</h2>
            <br>
            <h5>Move-In Date</h5>
            <input class = "input-control input-sm " type="date" name="moveIn" placeholder = "MM/DD/YYYY">
            <div class = "clear"></div>
            <br>

            <h5>Move-Out Date</h5>
            <input class = "input-control input-sm " type="date" name="moveOut" placeholder = "MM/DD/YYYY">
            <div class = "clear"></div>
            <br>

            <div id = "calculate" class = "btn btn-primary" style = "float:right;width:263px;">
              Calculate!
            </div>
            <div class = "clear"></div>
          </form>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <script>
        $(document).ready(function() {

            var daysBetween = function(moveIn, moveOut) {
                var result = 0;

                // separate moveIn date
                var moveInYear = moveIn[0];
                var moveInMonth = moveIn[1];
                var moveInDay = moveIn[2];

                // separate moveOut date
                var moveOutYear = moveOut[0];
                var moveOutMonth = moveOut[1];
                var moveOutDay = moveOut[2];

                // calculate the amount of days inbetween moveOut and moveIn
                result += moveOutDay - moveInDay;
                result += (moveOutMonth - moveInMonth) * 30; // 30 is a rough estimate.
                result += (moveOutYear - moveInYear) * 365;

                return result;
            }

            $("#calculate").click(function() {
                var moveIn = $('input[name="moveIn"]').val();
                moveIn = moveIn.split("-");
                var moveOut = $('input[name="moveOut"]').val();
                moveOut = moveOut.split("-")

                var result = daysBetween(moveIn, moveOut);

                alert(moveIn[0] + " " + moveOut + " " + result);
            }); 
        });
      </script>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>