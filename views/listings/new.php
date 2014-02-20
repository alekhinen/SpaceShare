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

        <!-- JQuery Validation -->
        <script language="javascript" type="text/javascript" src="/assets/javascripts/validation/jquery.validate.min.js"></script>
        <script language="javascript" type="text/javascript" src="/assets/javascripts/validation/additional-methods.min.js"></script>

       <title>List A Space</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>

        <div class = "meat">
          <?php 
            if (!isset($curuser)) { 
              ?>
              
              <h1>Please log in.</h1>
              
              <?php
            }
            else {
              ?>

                <form name = "listing" id = "listing" method = "post" action = "process_new.php" enctype="multipart/form-data">
                  <h2>List A Space </h2>
                  <br>

                  <label for = "street">Street*</label>
                  <input class = "input-control input-sm " type="text" name="street" placeholder = "205 Portland Street">
                  <div class = "clear"></div>
                  <br>

                  <label for = "city">City*</label>
                  <input class = "input-control input-sm " type="text" name="city" placeholder = "Boston">
                  <div class = "clear"></div>
                  <br>

                  <label for = "State">State*</label>
                  <input class = "input-control input-sm " type="text" name="state" placeholder = "Massachusetts">
                  <div class = "clear"></div>
                  <br>

                  <label for = "zip">Zip Code*</label>
                  <input class = "input-control input-sm" type="text" name="zip" placeholder = "02130">
                  <div class = "clear"></div>
                  <br>

                  <label for = "rate">Daily Rate*</label>
                  <input class = "input-control input-sm" type="text" name="rate" placeholder = "$19 (do not enter the $ sign)">
                  <div class = "clear"></div>
                  <br>

                  <label for = "footage">Square Footage*</label>
                  <input class = "input-control input-sm" type="text" name="footage" placeholder = "1500">
                  <div class = "clear"></div>
                  <br>

                  <label for = "amenities">Amenities</label>
                  <textarea class = "input-control input-sm" name="amenities" rows = "6" placeholder = "e.g. Wi-Fi, 2 Bathrooms"></textarea>
                  <div class = "clear"></div>
                  <br>

                  <label for = "description">Description*</label>
                  <textarea class = "input-control input-sm" name="description" rows = "6" placeholder = "A short description of the space"></textarea>
                  <div class = "clear"></div>
                  <br>

                  <label for="image">Image:</label>
                  <input class = "btn btn-primary" type="file" name="image" id="image"><br>
                  <div class = "clear"></div>
                  <br>

                  <input type="hidden" name="creator_id" value = "<?php echo "$user_id"; ?>">

                  <input type = "submit" value = "Submit" class = "btn btn-primary" style = "width:263px;"/>
                  <div class = "clear"></div>
                </form>

              <?php
            }
          ?>
        </div>


        <!-- Meat -->
        <div class = "meat">
          
        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
   </body>
</html>





<script type="text/javascript">
  $(document).ready(function() {
    $("#listing").validate({
      rules: {

        street: "required",
        city: "required",
        state: "required",
        zip: {
          required: true,
          minlength: 5,
          maxlength: 5,
          number: true
        },
        rate: {
          required: true,
          number: true
        },
        footage: {
          required: true,
          number: true
        },
        description: "required",
        image: "required"
      },
      
      messages: {

        street: "Please enter a valid street address",
        city: "Please enter a valid city",
        state: "Please enter a valid US state",
        zip: {
          required: "Please provide a zip code",
          minlength: "Please provide a valid zip code",
          maxlength: "Please provide a valid zip code",
          number: "Please provide a valid zip code"
        },
        rate: {
          required: "Please enter a valid rate",
          number: "Please enter just the number value (no $)."
        },
        footage: {
          required: "Please enter valid square footage",
          number: "Enter a number value for square footage"
        },
        description: "Please enter a valid description",
        image: "Please upload a jpeg, gif, or png."
        
      },

      errorPlacement: function(error, element) {
          $(element).after("<div class = 'clear'></div>", error);
        }
    });
  });
</script>
