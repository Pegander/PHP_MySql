<?php
session_start();
//Remove session variables
session_unset();
//Destroy session
session_destroy();

header("Location:/php_mysql/index.php");
exit;
?>