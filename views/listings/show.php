<?php
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 

  include_once($path . "/includes/db_connect.php");
  include_once($path . "/includes/functions.php");
  include_once($path . '/includes/sessionStarter.php');

  // Test for errors
  if(mysqli_connect_errno()){
    echo mysqli_connect_error();
  }

  /////////////////////////////////////////////////////////////////////////////
  // Get the ID ///////////////////////////////////////////////////////////////
  $id = strip_tags($_GET[id]);
  $query = "SELECT * FROM listings WHERE id = '$id'";
  $result = $mysqli->query($query);

  if ($result) {
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
    }
    // Free result set
    $result->free();

    $query = "SELECT phone_number, email, first_name, last_name FROM users WHERE id = '$creator_id'";
    $result = $mysqli->query($query);

    if ($result) {
      while ($row = $result->fetch_assoc()) {
        $phone_number = $row['phone_number'];
        $email = $row['email'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
      }
    }

    $result->free();

    include '_show.php';

  }
  else {
    echo "can't find it";
    header('Location: ../../index.php');
  }

?>