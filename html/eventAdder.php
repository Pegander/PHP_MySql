<?php
// FIX - include dirname(__FILE__). "/Base/header.html";
include  "../Base/header.html";

?>
<form class="form-inline" action="../addEvent.php" method="POST">
    <label for="eventName">Event:</label>
    <input type="text" class="form-control" name="eventName">
    <label for="eventInfo">Info om event:</label>
    <input type="text" class="form-control" name="eventInfo">
    <label for="eventPlace">Plats för event:</label>
    <input type="text" class="form-control" name="eventPlace">
    <label for="eventTime">Tid för event:</label>
    <input type="text" class="form-control" name="eventTime">
    <input type="submit" value="Lägg till">
</form>
<?php
include "../Base/footer.html";

?>