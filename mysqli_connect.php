<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fmsDB";

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($dbc ->connect_error) {
    //In future elaborate error message
    die("Error!!");
};
?>