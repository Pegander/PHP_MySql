<?php
include "mysqli_connect.php";

$brandpost = $_POST["brand"];
$modelpost = $_POST["model"];
if ($brandpost != "" && $modelpost != ""){
    $sql = "INSERT INTO myCars(brand, make)
    VALUES('$brandpost', '$modelpost')";

    if ($dbc->query($sql) === TRUE) {
        $last_id = $dbc->insert_id;
    } else {
        echo "Error: " . $dbc . "<br>" . $conn->error;
    }
}
$dbc->close();


?>