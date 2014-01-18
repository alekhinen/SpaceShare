<?php 
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 
?>

<!-- Declare DOCTYPE to be HTML5 -->
<!DOCTYPE html>

<html lang="en">
   <head>
      <!-- Base Head Elements -->
      <?php include_once($path . "/views/partials/baseCSS.php") ?>

      <!-- Stylesheet specific to page -->
      <link rel="stylesheet" type="text/css" href="/assets/stylesheets/neighborhoods.css">

      <title>Neighborhoods</title>
   </head> 
   <body>
      <div class = "wrapper">
        <!-- Header -->
        <?php include_once($path . '/views/partials/header.php'); ?>


        <!-- Meat -->
        <div class = "meat">
          <h1 class = "big">Neighborhoods</h1>


          <!-- Boston -->
          <div class = "featuredNeighborhood" id = "boston">
            <div class = "imgContainer">
              <img src = "/assets/images/featuredNeighborhoods/bostonSkyline.jpg"/>
            </div>
            <h1>Boston</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur orci ut lacus aliquet eleifend. Donec facilisis porttitor mi, vel rhoncus tortor tincidunt quis. Pellentesque eleifend bibendum malesuada. Ut sagittis dictum dolor cursus commodo. Sed suscipit varius consequat. Morbi placerat mauris condimentum, tincidunt est ac, dignissim neque. Nullam congue elit purus, eget condimentum orci consectetur et. Vestibulum vehicula metus sit amet euismod eleifend. Donec fermentum erat ac volutpat viverra. Ut a nisi facilisis dolor commodo interdum quis sed libero. Cras ac sem posuere, venenatis turpis sed, tincidunt nisl.
            </p>
            <center>
              <a href = "/views/listings/boston.php">View Listings For Boston</a>
            </center>
          </div>


          <!-- New York -->
          <div class = "featuredNeighborhood" id = "newyork">
            <div class = "imgContainer">
              <img src = "/assets/images/featuredNeighborhoods/newYorkSkyline.jpg"/>
            </div>
            <h1>New York</h1>
            <p>
              Aliquam erat volutpat. Curabitur convallis odio sem, id condimentum est sollicitudin eu. Donec justo lectus, dignissim eu sodales quis, eleifend sodales nulla. Sed a ultricies turpis. Suspendisse potenti. Sed pretium vestibulum blandit. Sed feugiat erat eget lectus adipiscing, eget cursus turpis malesuada. Sed laoreet purus sed odio porta, imperdiet accumsan est scelerisque. Vivamus adipiscing nisl quis tortor volutpat, ut tempor erat euismod.
            </p>
            <center>
              <a href = "/views/listings/newyork.php">View Listings For New York</a>
            </center>
          </div>


          <!-- Seattle -->
          <div class = "featuredNeighborhood" id = "seattle">
            <div class = "imgContainer">
              <img src = "/assets/images/featuredNeighborhoods/seattleSkyline.jpg"/>
            </div>
            <h1>Seattle</h1>
            <p>
              Sed condimentum tincidunt arcu non tincidunt. Etiam mattis id purus ut pulvinar. Aliquam vitae elementum erat. Phasellus vel iaculis sem. Pellentesque non bibendum erat. Donec purus diam, iaculis egestas dolor quis, adipiscing placerat enim. In hac habitasse platea dictumst. Duis sed odio vel est mattis hendrerit vel eu dolor. Integer aliquam eros ac neque porta, sed viverra sapien commodo. Nulla consectetur augue ac mi iaculis, in fermentum mi feugiat. Nunc eget interdum elit. Aliquam in libero vel sem laoreet imperdiet. Nam varius, velit eget consequat egestas, quam neque lobortis magna, id pulvinar ipsum est sed urna.
            </p>
            <center>
              <a href = "/views/listings/seattle.php">View Listings For Seattle</a>
            </center>
          </div>


          <!-- Portland -->
          <div class = "featuredNeighborhood" id = "portland">
            <div class = "imgContainer">
              <img src = "/assets/images/featuredNeighborhoods/portlandSkyline.jpg"/>
            </div>
            <h1>Portland</h1>
            <p>
              Nunc dapibus sed libero ac consectetur. Sed porttitor sed tellus eu gravida. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tellus lorem, sagittis eget magna dapibus, rhoncus posuere est. Sed viverra lacus ligula, sed dictum massa tristique quis. Vestibulum posuere dolor ut cursus ultricies. Ut volutpat enim at urna laoreet, nec ullamcorper tortor ultricies. Ut fringilla ante sit amet justo lobortis, vitae tempor sapien sodales. Vivamus sollicitudin, nunc et sodales viverra, turpis eros sollicitudin eros, vel congue enim lorem vitae tellus. Nunc justo leo, scelerisque ac sollicitudin eget, euismod a ipsum. Etiam placerat urna nec nisl gravida, consequat bibendum eros sodales. Donec elit nulla, suscipit eget tincidunt a, imperdiet vel est. Vestibulum volutpat ultricies semper.
            </p>
            <center>
              <a href = "/views/listings/portland.php">View Listings For Portland</a>
            </center>
          </div>


          <!-- San Francisco -->
          <div class = "featuredNeighborhood" id = "sanfrancisco">
            <div class = "imgContainer">
              <img src = "/assets/images/featuredNeighborhoods/sanFranciscoSkyline.jpg"/>
            </div>
            <h1>San Francisco</h1>
            <p>
              Donec et augue urna. Aenean ultrices viverra lorem, id ullamcorper est convallis a. Quisque sagittis, eros vel convallis imperdiet, odio erat accumsan sem, quis sodales sapien erat quis magna. Sed vel ante iaculis, congue enim sit amet, commodo diam. Nullam et erat euismod, tincidunt metus at, aliquet purus. Donec tincidunt pulvinar mauris id iaculis. Sed sollicitudin bibendum interdum. Sed porta auctor metus, at semper urna blandit sit amet. Aenean dapibus molestie fermentum. Suspendisse sagittis, risus nec sollicitudin luctus, sapien enim eleifend lacus, eu ultrices erat orci sit amet neque. Nunc vestibulum odio tellus, sed auctor massa pretium porta.
            </p>
            <center>
              <a href = "/views/listings/sanfrancisco.php">View Listings For San Francisco</a>
            </center>
          </div>


          <!-- Chicago -->
          <div class = "featuredNeighborhood" id = "chicago">
            <div class = "imgContainer">
              <img src = "/assets/images/featuredNeighborhoods/chicagoSkyline.jpg"/>
            </div>
            <h1>Chicago</h1>
            <p>
              Nunc dapibus sed libero ac consectetur. Sed porttitor sed tellus eu gravida. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tellus lorem, sagittis eget magna dapibus, rhoncus posuere est. Sed viverra lacus ligula, sed dictum massa tristique quis. Vestibulum posuere dolor ut cursus ultricies. Ut volutpat enim at urna laoreet, nec ullamcorper tortor ultricies. Ut fringilla ante sit amet justo lobortis, vitae tempor sapien sodales. Vivamus sollicitudin, nunc et sodales viverra, turpis eros sollicitudin eros, vel congue enim lorem vitae tellus. Nunc justo leo, scelerisque ac sollicitudin eget, euismod a ipsum. Etiam placerat urna nec nisl gravida, consequat bibendum eros sodales. Donec elit nulla, suscipit eget tincidunt a, imperdiet vel est. Vestibulum volutpat ultricies semper.
            </p>
            <center>
              <a href = "/views/listings/chicago.php">View Listings For Chicago</a>
            </center>
          </div>

        </div>
        <div class = "padder20"></div>
        <div class = "push"></div>
      </div>

      <!-- Footer -->
      <?php include_once($path . '/views/partials/footer.php'); ?>
      
   </body>
</html>