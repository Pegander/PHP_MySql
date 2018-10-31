<?php
include "mysqli_connect.php";

//Select all rows from myCars
$sql = "SELECT * FROM upcomingEvents";
$result = $dbc->query($sql);

//If number of results is more than 0
if($result->num_rows > 0) {
    //Cycle array made by fetch_assoc
    while($row = $result->fetch_assoc()){
        //Check if eventtime > this time (if eventtime is expired)
        $eventtime = $row["eventTime"];
        $eventdate = strtotime($eventtime);
        if (date("Y-m-d", $eventdate) > date("Y-m-d")){
            //Print out only if event has not happened
            echo "<p>Event: " .$row["eventName"] . "  </p><p>Info om event: " . $row["eventInfo"] . "</p></p><p>Plats: " . $row["eventPlace"] . "</p></p><p>När är eventet: " . $row["eventTime"] . "</p><br/>";
        }    
    } 
  
} else {
    echo "Inga event för tillfället";
}

echo "<br/><a href='index.php'>Back to home</a>";

$dbc->close();
?>