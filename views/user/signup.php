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

       <title>Sign Up</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <form id = "login">
            <h2>Sign Up</h2>
            <br>

            <h5>Email</h5>
            <input class = "input-control input-sm " type="text" name="email" placeholder = "john@example.com">
            <div class = "clear"></div>
            <br>

            <h5>First Name</h5>
            <input class = "input-control input-sm " type="text" name="firstName" placeholder = "John">
            <div class = "clear"></div>
            <br>

            <h5>Last Name</h5>
            <input class = "input-control input-sm " type="text" name="lastName" placeholder = "Appleseed">
            <div class = "clear"></div>
            <br>

            <h5>Phone Number</h5>
            <input class = "input-control input-sm " type="text" name="lastName" placeholder = "555-555-5555">
            <div class = "clear"></div>
            <br>

            <h5>Password</h5>
            <input class = "input-control input-sm " type="password" name="password">
            <div class = "clear"></div>
            <br>

            <div id = "calculate" class = "btn btn-primary" style = "float:right;width:263px;">
              Submit
            </div>
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