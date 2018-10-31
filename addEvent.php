<?php
//Include connection file
include "mysqli_connect.php";

//Get posts from addCar.php input form.
$eventNamepost = $_POST["eventName"];
$eventInfopost = $_POST["eventInfo"];
$eventPlacepost = $_POST["eventPlace"];
$eventTimepost = $_POST["eventTime"];

//If anything is posted
if ($eventNamepost != "" && $eventInfopost != "" && $eventPlacepost != "" && $eventTimepost != "")
    {
    //Prepare sql injection
    $sql = "INSERT INTO upcomingEvents(eventName, eventInfo, eventPlace, eventTime)
    VALUES('$eventNamepost', '$eventInfopost', '$eventPlacepost', '$eventTimepost')";    
//Insert at last id

    if ($dbc->query($sql) === TRUE) {
        $last_id = $dbc->insert_id;
        echo "Succesfully added! <br />";
        echo "<a href='index.php'>Back to home</a>";
    } else {
        echo "Error: " . $dbc . "<br>" . $conn->error;
    };
} else {
    echo "Alla poster måste vara ifyllda!";
};
//Close connection to database
$dbc->close();
?>