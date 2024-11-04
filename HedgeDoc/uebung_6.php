<!--Erstelle ein einfaches Array wochentage, das die Namen der Wochentage enthält.
Verwende eine foreach-Schleife, um die Namen der Wochentage auszugeben, 
wobei jeder Tag in einem neuen Absatz () angezeigt wird.-->


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    $wochentag = array("Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag", "Sonntag");

    foreach ($wochentag as $tag) {
        echo $tag . "<p>";
    }

    ?>

</body>

</html>