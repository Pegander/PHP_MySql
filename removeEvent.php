<?php
include "./Base/header.php";
include "mysqli_connect.php";
session_start();
$idToRemove = $_POST["id"];
if ($_SESSION["usertype"] === "PL1"){
$sql = "DELETE FROM upcomingevents WHERE id = $idToRemove";
if($dbc->query($sql) === TRUE){
    echo 
    "Event borttaget!
    <a href='index.php'>Tillbaka till hem</a>";
    }
} else {
    echo "Permission denied";
}
$dbc->close();

?>