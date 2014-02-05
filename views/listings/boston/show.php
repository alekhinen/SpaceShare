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

        <!-- JQuery Validation -->
        <script language="javascript" type="text/javascript" src="/assets/javascripts/validation/jquery.validate.min.js"></script>
        <script language="javascript" type="text/javascript" src="/assets/javascripts/validation/additional-methods.min.js"></script>

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
            <!-- Placeholder for when image navigation gets added here. -->
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Quisque vitae leo vel lectus vehicula venenatis a sit amet enim. 
                    Aliquam vel iaculis lacus, quis dapibus arcu. In posuere, magna et 
                    aliquam accumsan, mauris nibh euismod dolor, eu hendrerit nunc nisl 
                    quis purus. Ut sit amet aliquet mi. Phasellus vestibulum rutrum tortor, 
                    luctus adipiscing odio consequat sed. Etiam placerat dui vitae lacus 
                    blandit faucibus. Aliquam congue turpis ac dignissim rhoncus. Maecenas 
                    non mi in nunc pretium posuere sed eu eros. Fusce quis ultricies leo, 
                    a vulputate risus. Donec quis tellus quis felis consectetur condimentum 
                    sed porttitor massa. Praesent vel mauris quis dui pellentesque venenatis 
                    in ut nunc. Sed eget nisl at dui luctus facilisis. Cras ut pharetra elit. 
                    Aenean eleifend dolor sed neque varius fringilla. In quam nulla, malesuada 
                    et elit et, accumsan fringilla est.
                </p>
            </div>
          </div>
          <div class = "clear"></div>

          <form id = "costCalculator" style = "float:left;">
            <h2>Calculate Your Total Cost</h2>
            <br>
            <label for = "cost">Rental Rate</label>
            <p class = "cost">$19 / day</p>
            <div class = "clear"></div>

            <label for = "moveIn">Move-In Date</label>
            <input class = "input-control input-sm " type="date" name="moveIn" placeholder = "MM/DD/YYYY">
            <div class = "clear"></div>
            <br>

            <label for = "moveOut">Move-Out Date</label>
            <input class = "input-control input-sm " type="date" name="moveOut" placeholder = "MM/DD/YYYY">
            <div class = "clear"></div>
            <br>

            <div id = "calculate" class = "btn btn-primary" style = "float:right;width:263px;">
              Calculate!
            </div>
            <div class = "clear"></div>

            <div id = "computedCost">
                
            </div>
          </form>

          <form id = "requestSpace" name = "requestSpace" style = "float:right;width:420px">
            <h2>Request This Space</h2>
            <br>
            <label for = "email">Email</label>
            <input class = "input-control input-sm " type="text" name="email" placeholder = "john@example.com">
            <div class = "clear"></div>
            <br>

            <label for = "name">Name</label>
            <input class = "input-control input-sm " type="text" name="name" placeholder = "John Appleseed">
            <div class = "clear"></div>
            <br>

            <label for = "phoneNumber">Phone Number</label>
            <input class = "input-control input-sm " type="text" name="phoneNumber" placeholder = "555-555-5555">
            <div class = "clear"></div>
            <br>

            <label for = "message">Message</label>
            <textarea class = "input-control input-sm" name="message" rows = "6">Hello, I am interested in your studio listing for 205 Portland Street. 
            </textarea>
            <div class = "clear"></div>
            <br>

            <input type = "submit" id = "calculate" class = "btn btn-primary" style = "float:right;width:263px;"/>
            <div class = "clear"></div>

            <div id = "computedCost">
                
            </div>
          </form>
          <div class = "clear"></div>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- 
      NOTICE:
      This script (and associated CSS which can be found in /assets/stylesheets/layout.css) will be separated
      out into a JS file and a CSS file for modularities sake. I will not perform the move until I start 
      creating the back-end in PHP and MySQL. 
       -->
      <script>
        $(document).ready(function() {

            /** 
             * To calculate the difference between the two given date arrays.
             * @param moveIn int[] - Array of a date broken up into Year, Month, Day
             * @param moveOut int[] - Array of a date broken up into Year, Month, Day
             * @return int - represents difference between two dates in days
             *
             * @version 2014-01-26
             * @author Nick Alekhine
             */
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

            /** 
             * Displays the cost of the rental. 
             */
            $("#calculate").click(function() {
                // pull data from the form
                var moveIn = $('input[name="moveIn"]').val();
                moveIn = moveIn.split("-");
                var moveOut = $('input[name="moveOut"]').val();
                moveOut = moveOut.split("-")

                // calculate the cost
                var totalDays = daysBetween(moveIn, moveOut);
                var dailyRate = 19;
                var result = totalDays * dailyRate;

                // clears the div
                $("#computedCost").empty();
                // append the calculated cost to the div
                $("<p>Your total cost is: $" + result + " </p>").appendTo("#computedCost");
            }); 
        });
      </script>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>


<script type="text/javascript">
  $(document).ready(function() {
    $("#requestSpace").validate({
      rules: {

        email: {
          required: true,
          email: true
        },

        name: {
          required: true
        },

        phoneNumber: {
         required: true,
         phoneUS: true
        },
        
        message: {
          required: true,
          minlength: 5
        }  
      },
      
      messages: {

        email: "Please enter a valid email address",
        name: "Please provide a first and last name",
        
        phoneNumber: {
         required: "Please provide a phone number",
         phoneUS: "Please enter a valid US phone number"
        },
        
        message: {
          required: "Please provide a message to the owner"
        }
        
        
      },

      errorPlacement: function(error, element) {
          $(element).after("<div class = 'clear'></div>", error);
        }
    });
  });
</script>