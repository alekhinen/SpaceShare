<?php 
// Fix for linking files with paths
$path = $_SERVER['DOCUMENT_ROOT']; 





///////////////////////////////////////////////////////////////////////////////
// Includes ///////////////////////////////////////////////////////////////////
include_once($path . '/includes/sessionStarter.php');
include_once($path . '/includes/functions.php');
include_once($path . '/includes/db_connect.php');

echo "b";
if (isset($_POST['street'], 
          $_POST['city'], 
          $_POST['state'], 
          $_POST['zip'], 
          $_POST['rate'],
          $_POST['footage'],
          $_POST['description'],
          $_POST['creator_id'])) {

    echo "c";
    
    // Test for errors
    if(mysqli_connect_errno()){
        echo mysqli_connect_error();
    }

    echo "d";

    // Sanitizing the POST data.
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

    echo "e";

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
                                                                       timestamp)
                                                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {

                echo "f";
                // Bind parameters to insert_stmt
                $insert_stmt->bind_param('sssssssssi', $creator_id, $street, $city, 
                                                      $state, $zip, $rate, $footage, $description, $amenities, time());
                // Execute the prepared query
                $insert_stmt->execute();

                echo "g";


                // Query for the row that was just made
                $query = "SELECT id FROM listings ORDER BY id DESC LIMIT 1";
                $result = $mysqli->query($query);
                if ($result) {
                    echo "h";
                    while($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        header('Location: show.php?id=$id');
                    }
                }
                else {
                    header("../../index.php");
                }
            }
        }

    }
    else {
        header("../../");
    }

}
else {
    echo "a";
}

?>