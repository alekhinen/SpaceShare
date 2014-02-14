<!-- Header -->
<div class = "header">
  <a href = "/" class = "logo">
    <img src = "/assets/icons/logo.svg" class = "logo"/>
  </a>

  <ul class = "nav">
    <li><a href = "/views/listings/">Listings</a></li>
    <li><a href = "/views/neighborhoods/">Neighborhoods</a></li>
  </ul>

  <ul class = "nav pull-right">
    <?php 
      if (isset($curuser)) {
        ?>
        <li><a><?php echo "$curuser" ?></a></li>
        <li><a href = "/views/user/logout.php">Logout</a></li>
        <?php
      }
      else {
    ?>
        <li><a href = "/views/user/signup.php">Sign Up</a></li>
        <li><a href = "/views/user/login.php">Log In</a></li>
    <?php 
      }
    ?>

    <li><a href = "#">List A Space</a></li>
  </ul>

  <div class = "clear"></div>

</div>