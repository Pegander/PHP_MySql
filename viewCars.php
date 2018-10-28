<?php
include "mysqli_connect.php";

//Select all rows from myCars
$sql = "SELECT * FROM myCars";
$result = $dbc->query($sql);

//If number of results is more than 0
if($result->num_rows > 0) {
    //Cycle array made by fetch_assoc
    while($row = $result->fetch_assoc()){
        //Print info
        echo "<p>Brand: " .$row["brand"] . "  </p><p>Model: " . $row["make"] . "</p><br/>";
    } 
} else {
    echo "0 Results";
}

echo "<br/><a href='index.php'>Back to home</a>";

$dbc->close();
?>