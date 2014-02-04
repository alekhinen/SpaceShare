<?php

define("HOST", "localhost"); // The host you want to connect to.
define("USER", "admin"); // The database username.
define("PASSWORD", "H5c9WLWMaD5x6CTR"); // The database password. 
define("DATABASE", "space_share"); // The database name.
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket 
// remember to add the port number as a parameter.