<!--Erstelle ein Array hobbys mit einigen deiner Hobbys.
    Erstelle eine HTML-Liste (<ul>) und verwende eine foreach-Schleife, um jedes Hobby als <li>-Element <anzuzeigen-->


<!DOCTYPE html>
<html land="en">

<body>

    <?php

    $hobbys = array("Manga lesen", "Anime schauen", "Sport", "Haussanierung");

    echo "<ul>";
    foreach ($hobbys as $hobby) {
        echo "<li>" . $hobby;
    }

    ?>

</body>

</html>