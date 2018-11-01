<?php
session_start();
include  "../Base/header.php";

if($_SESSION['usertype'] === "PL1" || $_SESSION['usertype'] === "PL2")
echo '
<div class="container-fluid">
    <form class="form-inline" action="../addEvent.php" method="POST">

        <div class="col-12 text-center">
            <label for="eventName">Event:</label>
            <input type="text" class="form-control" name="eventName">
        </div>

        <div class="col-12 text-center">
            <label for="eventInfo">Info om event:</label>
            <input type="text" class="form-control" name="eventInfo">
        </div>
        
        <div class="col-12 text-center">
            <label for="eventPlace">Plats för event:</label>
            <input type="text" class="form-control" name="eventPlace">
        </div>
        
        <div class="col-12 text-center">
            <label for="eventTime">Tid för event:</label>
            <input type="text" class="form-control" name="eventTime">
        </div>
        
        <div class="col-12 text-center">
            <input class="btn btn-primary" type="submit" value="Lägg till">
        </div>
    </form>
</div>
';
include "../Base/footer.html";

?>