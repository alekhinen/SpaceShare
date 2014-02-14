<?php 
// Fix for linking files with paths
$path = $_SERVER['DOCUMENT_ROOT']; 





///////////////////////////////////////////////////////////////////////////////
// Includes ///////////////////////////////////////////////////////////////////
include_once($path . "/includes/db_connect.php");
 




$error_msg = "";
 
if (isset($_POST['email'], 
          $_POST['first_name'], 
          $_POST['last_name'], 
          $_POST['phone_number'], 
          $_POST['password'])) {
    
    // Test for errors
    if(mysqli_connect_errno()){
        echo mysqli_connect_error();
    }

    // Sanitizing the POST data.
    $email = strip_tags($_POST['email']);
    $first_name = strip_tags($_POST['first_name']);
    $last_name = strip_tags($_POST['last_name']);
    $phone_number = strip_tags($_POST['phone_number']);
    // strips out dashes, parentheses, and spaces
    $phone_number = preg_replace('/\D+/', '', $phone_number);
    $password = strip_tags($_POST['password']);
    




    ///////////////////////////////////////////////////////////////////////////    
    // salting + hashing the password /////////////////////////////////////////
    // A higher "cost" is more secure but consumes more processing power
    $cost = 10;
    // Create a random salt
    $salt = strtr(base64_encode(mcrypt_create_iv(16, 
                                                 MCRYPT_DEV_URANDOM)), 
                                                 '+', 
                                                 '.');
    
    // Prefix information about the hash so PHP knows how to verify it later.
    // "$2a$" Means we're using the Blowfish algorithm. 
    // The following two digits are the cost parameter.
    $salt = sprintf("$2a$%02d$", $cost) . $salt;

    // Hash the password with the salt
    $hash = crypt($password, $salt);



    

    ///////////////////////////////////////////////////////////////////////////    
    // Storing POST data in USERS /////////////////////////////////////////////
    if ($stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?")) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($db_email);
        $stmt->fetch();

        // if the email has not been used, add the POST data into USERS
        if ($stmt->num_rows == 0) {
            if ($insert_stmt = $mysqli->prepare("INSERT INTO users (email, 
                                                                    first_name, 
                                                                    last_name, 
                                                                    phone_number,
                                                                    password,
                                                                    timestamp)
                                                VALUES (?, ?, ?, ?, ?, ?)")) {
                $insert_stmt->bind_param('sssssi', $email, $first_name, 
                                         $last_name, $phone_number, $hash, 
                                         time());
                $insert_stmt->execute();
                header('Location: ../../index.php');
            }
            else {
                echo "failed to add user.";
            }
        }
        else {
            echo "that username/email has been used already.";
        }
    }
    else {
        header('Location: ../../');
    }

}

?>