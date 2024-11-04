<!--Erstelle eine Variable $alter und setze sie auf eine Zahl.
    Schreibe eine if-Bedingung, die überprüft, ob das Alter größer oder gleich 18 ist. 
    Gib den Satz “Du bist volljährig” oder “Du bist minderjährig” aus--> 


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    $alter = 17;
    
    if ($alter < 18) {
        echo "Du bist minderjährig";
    }
    else {
        echo "Du bist volljährig";
    }

    ?>

</body>

</html>