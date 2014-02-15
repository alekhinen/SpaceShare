<?php

 require_once "/home/modata5/php/Mail.php";
 
 $email = $_POST['email'];
 $name = $_POST['name'];

 $from = "SpaceShare <admin@spaceshare.nickalekhine.com>";
 $to = "$name" . " " . "<$email>";
 $subject = "Confirming your request.";
 $body = "Hey $name,\n\nWe have received your email and are sending it off to the listing owner.";
 
 $host = "ssl://secure28.webhostinghub.com";
 $port = "465";
 $username = "admin@spaceshare.nickalekhine.com";
 $password = "Wy66qbBs^ZT;";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>