<?php
//Include connection file
include "mysqli_connect.php";

//Get posts from addCar.php input form.
$brandpost = $_POST["brand"];
$modelpost = $_POST["model"];

//If anything is posted
if ($brandpost != "" && $modelpost != ""){
    //Prepare sql injection
    $sql = "INSERT INTO myCars(brand, make)
    VALUES('$brandpost', '$modelpost')";

    //Insert at last id
    if ($dbc->query($sql) === TRUE) {
        $last_id = $dbc->insert_id;
        echo "Succesfully added! <br />";
        echo "<a href='index.php'>Back to home</a>";
    } else {
        echo "Error: " . $dbc . "<br>" . $conn->error;
    }
}
//Close connection to database
$dbc->close();


?>