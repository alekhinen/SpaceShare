<?php 
  while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $creator_id = $row['creator_id'];
    $street = $row['street'];
    $city = $row['city'];
    $state = $row['state'];
    $zip = $row['zip'];
    $rate = $row['rate'];
    $footage = $row['square_footage'];
    $description = $row['description'];
    $amenities = $row['amenities'];
    $image = $row['image'];
    ?>

    <div class = "studioListing">
      <h2><?php echo "$street, $city, $state" ?></h2>
      <h2 class = "price">$<?php echo "$rate" ?> / day</h2>
      <div class = "smallImage">
        <div style = "width:100%;height:100%;overflow:hidden">
          <img src = "<?php echo "$image" ?>" style = "margin-top:-200px"/>
        </div>
      </div>
      <div class = "textContent">
        <div class = "features">
            <h3>Features</h3>
            <ul style = "float:left;width:100px;">
                <li>Floor Space</li>
                <li>Amenities</li>
            </ul>
            <ul style = "float:left">
                <li><?php echo "$footage" ?></li>
                <li><?php echo "$amenities" ?></li>
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

      <center>
        <div class = "btn btn-primary">
          <a href = "/views/listings/show.php?id=<?php echo "$id" ?>" class = "nothing">View Listing</a>
        </div>
        <br>
        <div class = "btn btn-secondary">
          <a href = "/views/listings/show.php?id=<?php echo "$id" ?>#requestSpace" class = "nothing">Request This Space</a>
        </div>
      </center>

    </div>

    <?php
  }
  // Free result set
  $result->free();
?>
