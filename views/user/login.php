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

       <title>Login</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <div class = "padder20"></div>
          <form name = "login" id = "login" action = "#" method = "post">
            <h2>Login</h2>
            <br>

            <label for = "email"><h5>Email</h5></label>
            <input class = "input-control input-sm " type="email" name="email" placeholder = "john@example.com">
            <div class = "clear"></div>
            <br>

            <label for = "password"><h5>Password</h5></label>
            <input class = "input-control input-sm " type="password" name="password">
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
    $("#login").validate({
      rules: {
        // email: "required",
        // password: "required",
      
        email: {
          required: true,
          email: true
        },
        
        password: {
          required: true,
          minlength: 5
        }  
      },
      
      messages: {
        //firstname: "Please enter your firstname",
        //lastname: "Please enter your lastname",
        
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        
        email: "Please enter a valid email address"
      },

      errorPlacement: function(error, element) {
          $(element).after("<div class = 'clear'></div>", error);
          // if (element.attr("name") == "fname" || element.attr("name") == "lname" ) {
          //   error.insertAfter("#lastname");
          // } else {
          //   error.insertAfter(element);
          // }
        }
    });
  });
</script>



