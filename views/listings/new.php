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

       <title>Sign Up</title>
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

                <form name = "listing" id = "listing" method = "post" action = "process_new.php">
                  <h2>List A Space </h2>
                  <br>

                  <label for = "street">Street</label>
                  <input class = "input-control input-sm " type="text" name="street" placeholder = "205 Portland Street">
                  <div class = "clear"></div>
                  <br>

                  <label for = "city">City</label>
                  <input class = "input-control input-sm " type="text" name="city" placeholder = "Boston">
                  <div class = "clear"></div>
                  <br>

                  <label for = "State">State</label>
                  <input class = "input-control input-sm " type="text" name="state" placeholder = "Massachusetts">
                  <div class = "clear"></div>
                  <br>

                  <label for = "zip">Zip Code</label>
                  <input class = "input-control input-sm" type="text" name="zip" placeholder = "02130">
                  <div class = "clear"></div>
                  <br>

                  <label for = "password">Password</label>
                  <input class = "input-control input-sm " type="password" name="password" placeholder = "Must be longer than 5 characters">
                  <div class = "clear"></div>
                  <br>

                  <input type = "submit" value = "Login" class = "btn btn-primary" style = "width:263px;"/>
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
    $("#signup").validate({
      rules: {

        email: {
          required: true,
          email: true
        },

        firstName: "required",
        lastName: "required",

        phoneNumber: {
         required: true,
         phoneUS: true
        },
        
        password: {
          required: true,
          minlength: 5
        }  
      },
      
      messages: {

        email: "Please enter a valid email address",
        firstName: "Please provide a first name",
        lastName: "Please provide a last name",
        
        phoneNumber: {
         required: "Please provide a phone number",
         phoneUS: "Please enter a valid US phone number"
        },
        
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        }
        
        
      },

      errorPlacement: function(error, element) {
          $(element).after("<div class = 'clear'></div>", error);
        }
    });
  });
</script>
