<?php  
  // Fix for linking files with paths
  $path = $_SERVER['DOCUMENT_ROOT']; 
  
  include_once($path . "/includes/db_connect.php");
  include_once($path . "/includes/functions.php");
  sec_session_start();

  if(login_check($mysqli) == true) {
    if(isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {  
      $curuser = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
      $user_id = $_SESSION['user_id'];
    }
  }