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

       <title>Login</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <div class = "padder20"></div>
          <form name = "login" onsubmit="return validateForm()" action = "#" method = "post">
            <h2>Login</h2>
            <br>

            <h5>Email</h5>
            <input class = "input-control input-sm " type="text" name="email" placeholder = "john@example.com">
            <div class = "clear"></div>
            <br>

            <h5>Password</h5>
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
  /** Various functions for form validation */
  $(document).ready(function() {
    // Remove the error class when focusing on email input
    $("input[name='email']").focus(function() {
      $(this).removeClass("has-error");
    });

    // Remove the error class when focusing on password input
    $("input[name='password']").focus(function() {
      $(this).removeClass("has-error");
    });
  });


  /** 
   * To determine if every required input has been filled correctly.
   * 
   * @author Nick Alekhine
   * @version 2014-02-04
   * 
   */
  function validateForm() {
    var hasErrors = false;
    var email = document.forms["login"]["email"].value;
    var password = document.forms["login"]["password"].value;

    if (email == null || email == "") {
      $("input[name='email']").addClass("has-error");
      hasErrors = true;
    }
    if (password == null || password == "") {
      $("input[name='password']").addClass("has-error");
      hasErrors = true;
    }

    return !hasErrors;
  }
</script>



