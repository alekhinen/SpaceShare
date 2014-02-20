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
      $street = $row['street'];
      $city = $row['city'];
      $state = $row['state'];
      $zip = $row['zip'];
    }
    // Free result set
    $result->free();

    include 'views/_show.php';

  }
  else {
    echo "can't find it";
    // header('Location: ../../index.php');
  }

?>