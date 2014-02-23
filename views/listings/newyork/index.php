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
  $query = "SELECT * FROM listings WHERE (city = 'New York' or city = 'new york') ORDER BY timestamp DESC LIMIT 10";
  $result = $mysqli->query($query);

  if ($result) {
    include '_index.php';
  }
  else {
    echo "can't find it";
    header('Location: ../../index.php');
  }

?>