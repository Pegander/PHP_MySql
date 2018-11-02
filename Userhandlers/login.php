<?php
session_start();

//Include connection file
include "../Databasehandlers/mysqli_connect.php";

//Get posts from loginprompt.php input form.
$inputName = $_POST["userName"];
$inputPassword = $_POST["userPassword"];
$krypt = hash("sha256", $inputPassword);

$sql  = "SELECT * FROM users";
$result = mysqli_query($dbc, $sql);
if($result->num_rows > 0) {
    //Cycle array made by fetch_assoc
    while($row = $result->fetch_assoc()){
        if ($inputName === $row["user"] && $krypt === $row["password"]){
           $_SESSION['usertype'] = $row["userType"];
        }
    }    
}
if ($_SESSION['usertype'] != NULL) {
    header("Location:/php_mysql/index.php");
    exit;
}
?>