<!--Erstelle eine Variable $uhrzeit und setze sie auf die aktuelle Stunde (date(‘H’)).
    Schreibe eine if-Bedingung, die je nach Uhrzeit ausgibt:

    “Guten Morgen” wenn die Uhrzeit zwischen 5 und 12 liegt.
    “Guten Tag” wenn die Uhrzeit zwischen 12 und 18 liegt.
    “Guten Abend” wenn die Uhrzeit nach 18 ist-->


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    $uhrzeit = date('H');

    if ($uhrzeit >= 5 && $uhrzeit < 12) {
        echo "Guten Morgen!";
    } elseif ($uhrzeit >= 12 && $uhrzeit < 18) {
        echo "Guten Tag!";
    } else {
        echo "Guten Abend!";
    }

    ?>

</body>

</html>