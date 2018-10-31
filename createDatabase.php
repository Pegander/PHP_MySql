<?php
//Create variables for user etc. In future change to define ();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fmsDB";

//make dbc into connection to be called later on to make changes to database
$dbc = new mysqli($dbhost, $dbuser, $dbpass);
if ($dbc ->connect_error) {
    //In future elaborate error message
    die("Error!!");
};

$sql = "CREATE DATABASE fmsDB";
$dbc->query($sql);

$dbc->close();

//Create variables for user etc. In future change to define ();


//make dbc into connection to be called later on to make changes to database
$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($dbc ->connect_error) {
    //In future elaborate error message
    die("Error!!");
};

$sql = "CREATE TABLE upcomingEvents (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    eventName VARCHAR(30) NOT NULL,
    eventInfo VARCHAR(100) NOT NULL,
    eventPlace VARCHAR(50) NOT NULL,
    eventTime VARCHAR(20) NOT NULL
    )";

$dbc->query($sql);
$dbc->close();
?>