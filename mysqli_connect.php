<?php
//Create variables for user etc. In future change to define ();
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "phptest";

//make dbc into connection to be called later on to make changes to database
$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($dbc ->connect_error) {
    //In future elaborate error message
    die("Error!!");
};


?>