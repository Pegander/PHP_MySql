<?php
include "mysqli_connect.php";

$sql = "SELECT * FROM myCars";
$result = $dbc->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "<h2>Brand:</h2> " .$row["brand"] . " <br /> <h2>Model:</h2> " . $row["make"];
    } 
} else {
    echo "0 Results";
}

$dbc->close();
?>