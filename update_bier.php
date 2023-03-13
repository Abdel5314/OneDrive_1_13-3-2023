<?php

echo "<h1>Update Bier</h1>";

echo "Data uit het vorige formulier:<br>";

echo "Biercode:" . $_GET['biercode'];

echo "<br>";


?>

<html>
    <body>
        Biercode:<input type="" name="biercode" value=""><br>
        Naam: <input type="" name="naam" value=""><br>
        Soort: <input type="" name="soort" value=""><br>
        Stijl: <input type="" name="stijl" value=""><br>
        Alcohol: <input type="" name="alcohol" value=""><br>
        Brouwcode: <input type="" name="brouwcode " value=""><br>
        <input type="submit" name="btn_wzg" value="Wijzigen"><br> 
    </body>
</html> 