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
          <h1 class = "big"><?php echo "$street, $city, $state" ?></h1>
          <div class = "imgContainer">
            <img src = "<?php echo "$image" ?>"/>
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
                    <li><?php echo "$footage" ?> sq. ft.</li>
                    <li><?php echo "$amenities" ?></li>
                    <li><?php echo "$phone_number" ?><br><?php echo "$email" ?></li>
                </ul>
                <div class = "clear"></div>
            </div>
            <div class = "description">
                <h3>Description</h3>
                <p>
                    <?php echo "$description" ?>
                </p>
            </div>
          </div>
          <div class = "clear"></div>

          <form id = "costCalculator" style = "float:left;">
            <h2>Calculate Your Total Cost</h2>
            <br>
            <label for = "cost">Rental Rate</label>
            <p class = "cost">$<?php echo "$rate" ?> / day</p>
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

          <form id = "requestSpace" name = "requestSpace" action = "processRequestSpace.php" style = "float:right;width:420px">
            <div class = "formData">
              <h2>Request This Space</h2>
              <br>
              <?php 
              if (isset($curuser)) {
                $email = $_SESSION['email'];
                $name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
              ?>
                <label for = "email">Email</label>
                <input class = "input-control input-sm " type="text" name="email" value = "<?php echo "$email"; ?>">
                <div class = "clear"></div>
                <br>

                <label for = "name">Name</label>
                <input class = "input-control input-sm " type="text" name="name" value = "<?php echo "$name"; ?>">
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
              <?php 
              }
              else {
              ?>
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
              <?php
              }
              ?>

              <input type = "submit" id = "calculate" class = "btn btn-primary" style = "float:right;width:263px;"/>
              <div class = "clear"></div>
            </div>

            <div id = "success" class = "success">
                <h1>Message sent!</h1>
                <p>Your message has been sent to the listing owner. </p>
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

                var moveInDate = new Date(moveIn[0], moveIn[1] - 1, moveIn[2]);
                var moveOutDate = new Date(moveOut[0], moveOut[1] - 1, moveOut[2]);


                // Convert both dates to milliseconds
                var moveInDate_ms = moveInDate.getTime();
                var moveOutDate_ms = moveOutDate.getTime();


                // Calculate the difference in milliseconds
                var difference_ms = moveOutDate_ms - moveInDate_ms;
                
                //take out milliseconds
                difference_ms = difference_ms/1000;
                var seconds = Math.floor(difference_ms % 60);
                
                // take out seconds
                difference_ms = difference_ms/60; 
                var minutes = Math.floor(difference_ms % 60);
                
                // take out minutes
                difference_ms = difference_ms/60; 
                var hours = Math.floor(difference_ms % 24);  
                var days = Math.floor(difference_ms/24);

                return days;
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
                var dailyRate = <?php echo "$rate"?>;
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
    ///////////////////////////////////////////////////////////////////////////
    // Validation /////////////////////////////////////////////////////////////
    
    $("#requestSpace").validate({
      
      // Rules ////////////////////////////////////////////////////////////////
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
      

      // Error Messages ///////////////////////////////////////////////////////
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


      // Error Message Placement //////////////////////////////////////////////
      errorPlacement: function(error, element) {
        $(element).after("<div class = 'clear'></div>", error);
      },


      // AJAX Submission Handler //////////////////////////////////////////////
      submitHandler: function(form) {
        // setup some local variables
        var $form = $(form);
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /form.php
        request = $.ajax({
            url: "processRequestSpace.php",
            type: "post",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
            // log a message to the console
            console.log("Hooray, it worked!");
            $(".formData").slideToggle(1000);
            $("#success").slideToggle(1000);
        });

        // callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // log the error to the console
            console.error(
                "The following error occured: "+
                textStatus, errorThrown
            );
        });

        // callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // reenable the inputs
            $inputs.prop("disabled", false);
        });

        // prevent default posting of form
        event.preventDefault();
      }
    });

  });
</script>