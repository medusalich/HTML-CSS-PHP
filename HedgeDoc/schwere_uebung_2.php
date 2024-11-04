<!--Erstelle ein Array aufgaben, das einige Aufgaben enthält, z.B. “Einkaufen”, “Haus putzen”, “Programmieren üben”.
    Erstelle eine HTML-Seite, die jede Aufgabe in einer <ul>-Liste ausgibt.
    Füge eine Funktion hinzu, die eine neue Aufgabe zum Array hinzufügt. 
    Verwende dazu ein HTML-Formular, mit dem der Benutzer Aufgaben hinzufügen kann-->


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    session_start();

    if (!isset($_SESSION["aufgaben"])) {
        $_SESSION["aufgaben"]  = array("Einkaufen", "Haus putzen", "Programmieren üben", "Essen", "Zocken");
    }

    function aussage(&$aufgaben, $anhang) {
        $aufgaben[] = $anhang;
    }

    if (isset($_POST["anhang"]) && !empty($_POST["anhang"])) {
        aussage($_SESSION["aufgaben"], $_POST["anhang"]);
    }

    ?>

    <form method="POST">
        Neue Aufgabe: <br>
        <input type='text' name='anhang'>
        <input type="submit">
    </form>


    <?php

    echo "<ul>";

    foreach ($_SESSION["aufgaben"] as $aufgabe) {
        echo "<li>" . $aufgabe . "</li>";
    }
    echo "</ul>";

    ?>

</body>

</html>
