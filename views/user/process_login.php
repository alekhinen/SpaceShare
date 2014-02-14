<?php
// Fix for linking files with paths
$path = $_SERVER['DOCUMENT_ROOT']; 





///////////////////////////////////////////////////////////////////////////////
// Includes ///////////////////////////////////////////////////////////////////
include_once($path . "/includes/db_connect.php");
include_once($path . "/includes/functions.php");




 // Starting a PHP session.
sec_session_start(); 
 
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header('Location: ../../');
    } 
    else {
        // Login failed 
        header('Location: login.php?error=1');
    }
} 
else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}