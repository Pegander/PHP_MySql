<?php
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "phptest";

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($dbc ->connect_error) {
    die("Error!!");
};


?>