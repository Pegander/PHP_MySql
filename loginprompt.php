<?php
include "./Base/header.php";
?>
<div class="container-fluid">
    <form class="form-inline" action="/php_mysql/login.php" method="POST">

        <div class="col-12 text-center">
            <label for="eventName">Användarnamn:</label>
            <input type="text" class="form-control" name="userName">
        </div>

        <div class="col-12 text-center">
            <label for="eventInfo">Lösenord:</label>
            <input type="password" class="form-control" name="userPassword">
        </div>

        <div class="col-12 text-center">
            <input class="btn btn-primary" type="submit" value="Lägg till">
        </div>
    </form>
</div>