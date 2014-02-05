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

        <!-- Page Specific Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/user.css">

        <!-- JQuery Validation -->
        <script language="javascript" type="text/javascript" src="/assets/javascripts/validation/jquery.validate.min.js"></script>
        <script language="javascript" type="text/javascript" src="/assets/javascripts/validation/additional-methods.min.js"></script>

       <title>Sign Up</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <form name = "signup" id = "signup" method = "post" action = "#">
            <h2>Sign Up</h2>
            <br>

            <label for = "email">Email</label>
            <input class = "input-control input-sm " type="email" name="email" placeholder = "john@example.com">
            <div class = "clear"></div>
            <br>

            <label for = "firstName">First Name</label>
            <input class = "input-control input-sm " type="text" name="firstName" placeholder = "John">
            <div class = "clear"></div>
            <br>

            <label for = "lastName">Last Name</label>
            <input class = "input-control input-sm " type="text" name="lastName" placeholder = "Appleseed">
            <div class = "clear"></div>
            <br>

            <label for = "phoneNumber">Phone Number</label>
            <input class = "input-control input-sm" type="text" name="phoneNumber" placeholder = "555-555-5555">
            <div class = "clear"></div>
            <br>

            <label for = "password">Password</label>
            <input class = "input-control input-sm " type="password" name="password" placeholder = "Must be longer than 5 characters">
            <div class = "clear"></div>
            <br>

            <input type = "submit" value = "Login" class = "btn btn-primary" style = "width:263px;"/>
            <div class = "clear"></div>
          </form>
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
