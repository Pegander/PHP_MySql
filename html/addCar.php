<?php
// FIX - include dirname(__FILE__). "/Base/header.html";
?>
<form class="form-inline" action="../addCar.php" method="POST">
    <label for="brand">Brand:</label>
    <input type="text" class="form-control" name="brand">
    <label for="model">Model:</label>
    <input type="text" class="form-control" name="model">
    <input type="submit" value="Lägg till">
</form>