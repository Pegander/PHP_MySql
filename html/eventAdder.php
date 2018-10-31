<?php
// FIX - include dirname(__FILE__). "/Base/header.html";
include  "../Base/header.html";

?>
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
<?php
include "../Base/footer.html";

?>