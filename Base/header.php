<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- Change href for upload of page (remove /php_mysql)-->
    <meta charset="utf-8" />
    <title>PHP Databas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/php_mysql/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/php_mysql/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="/PHP_MySql/index.php">Frosta Multisport</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        
        <?php
        if(isset($_SESSION["usertype"])) {
            echo 
            '<ul class="navbar-nav navbar-reverse">
            <li class="nav-item"><a class="nav-link" href="/php_mysql/Userhandlers/logout.php">Logga ut</a></li>
            </ul>';
        } else {
            echo
            '<ul class="navbar-nav navbar-reverse">
            <li class="nav-item"><a class="nav-link" href="/php_mysql/Userhandlers/loginprompt.php">Logga in</a></li>
            </ul>';
        }
      
        ?>
        
    </nav>