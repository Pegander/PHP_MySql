
<?php
include dirname(__FILE__). "/Base/header.html";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <a href="./html/eventAdder.php" class="btn btn-info" role="button">Lägg till event</a> 
            <br />
            <a href="viewEvents.php" class="btn btn-info" role="button">Visa event</a>
        </div>
    </div>
</div>


<?php
include "createDatabase.php";
include "Base/footer.html";
?>