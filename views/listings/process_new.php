<?php 
// Fix for linking files with paths
$path = $_SERVER['DOCUMENT_ROOT']; 





///////////////////////////////////////////////////////////////////////////////
// Includes ///////////////////////////////////////////////////////////////////
include_once($path . "/includes/db_connect.php");
include_once($path . "/includes/functions.php");




///////////////////////////////////////////////////////////////////////////////
// Inserting POST into listings ///////////////////////////////////////////////
if (isset($_POST['street'], 
          $_POST['city'], 
          $_POST['state'], 
          $_POST['zip'], 
          $_POST['rate'],
          $_POST['footage'],
          $_POST['description'],
          $_POST['creator_id'])) {


    ///////////////////////////////////////////////////////////////////////////
    // Test for errors ////////////////////////////////////////////////////////
    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
    }


    ///////////////////////////////////////////////////////////////////////////
    // Image Upload ///////////////////////////////////////////////////////////
    $allowedExts = array("gif", "jpeg", "jpg", "png"); // allowed extensions
    $temp = explode(".", $_FILES["image"]["name"]);
    $extension = end($temp); // get the extension
    $imgPath = "";
    if ((($_FILES["image"]["type"] == "image/gif")
        || ($_FILES["image"]["type"] == "image/jpeg")
        || ($_FILES["image"]["type"] == "image/jpg")
        || ($_FILES["image"]["type"] == "image/pjpeg")
        || ($_FILES["image"]["type"] == "image/x-png")
        || ($_FILES["image"]["type"] == "image/png"))
        && ($_FILES["image"]["size"] < 2000000)
        && in_array($extension, $allowedExts)) {
        
        // Check for errors with file upload
        if ($_FILES["image"]["error"] > 0) {
            echo "Error: " . $_FILES["image"]["error"] . "<br>";
        }
        // Else upload the file
        else {
            // Check if the file exists in the directory
            if (file_exists($path . "/public/images/" 
                            . $_FILES["image"]["name"])) {
                $imgPath = "/public/images/" . $_FILES["image"]["name"];
            }
            // Else upload the file into the directory
            else {
                move_uploaded_file($_FILES["image"]["tmp_name"], 
                                   $path . "/public/images/" 
                                   . $_FILES["image"]["name"]);
                $imgPath = "/public/images/" . $_FILES["image"]["name"];
            }
        }
    }
    else {
        echo "Invalid image file";
    }


    ///////////////////////////////////////////////////////////////////////////
    // Sanitizing the POST data. //////////////////////////////////////////////
    $creator_id = strip_tags($_POST['creator_id']);
    $street = strip_tags($_POST['street']);
    $city = strip_tags($_POST['city']);
    $state = strip_tags($_POST['state']);
    $zip = strip_tags($_POST['zip']);
    $rate = strip_tags($_POST['rate']);
    $footage = strip_tags($_POST['footage']);
    $description = strip_tags($_POST['description']);
    $amenities = "";
    if (isset($_POST['amenities'])) {
        $amenities = strip_tags($_POST['amenities']);
    }


    ///////////////////////////////////////////////////////////////////////////    
    // Storing POST data in LISTINGS //////////////////////////////////////////
    // Query the database for duplicate data.
    if($result = $mysqli->query("SELECT street 
                                 FROM listings 
                                 WHERE street = '$street' 
                                       AND city = '$city' 
                                       AND state = '$state' 
                                       AND zip = '$zip'")) {
        // Get row count.
        $row_count = $result->num_rows;
        // Check if there is any duplicate data
        if ($row_count == 0) {
            // Prepare statement to insert into DB
            if ($insert_stmt = $mysqli->prepare("INSERT INTO listings (creator_id, 
                                                                       street, 
                                                                       city, 
                                                                       state,
                                                                       zip,
                                                                       rate,
                                                                       square_footage,
                                                                       description,
                                                                       amenities,
                                                                       timestamp,
                                                                       image)
                                                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {

                // Bind parameters to insert_stmt
                $insert_stmt->bind_param('sssssssssis', $creator_id, $street, $city, 
                                                        $state, $zip, $rate, $footage, 
                                                        $description, $amenities, time(), 
                                                        $imgPath);
                // Execute the prepared query
                $insert_stmt->execute();



                // Query for the row that was just made
                $query = "SELECT id FROM listings ORDER BY id DESC LIMIT 1";
                $result = $mysqli->query($query);
                if ($result) {
                    while($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        header("Location: show.php?id=$id");
                        exit;
                    }
                }
                else {
                    header("Location: ../../index.php");
                    exit;
                }
            }
            else {
                echo "cannot submit to database.";
            }
        }
        else {
            echo "duplicate data entry";
            header("Location: new.php");
            exit;
        }
    }
    else {
        header("Location: ../../index.php");
    }
}
else {
    echo "a";
}

?>