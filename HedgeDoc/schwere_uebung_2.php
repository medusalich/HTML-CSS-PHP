<!--Erstelle ein Array aufgaben, das einige Aufgaben enthält, z.B. “Einkaufen”, “Haus putzen”, “Programmieren üben”.
    Erstelle eine HTML-Seite, die jede Aufgabe in einer <ul>-Liste ausgibt.
    Füge eine Funktion hinzu, die eine neue Aufgabe zum Array hinzufügt. 
    Verwende dazu ein HTML-Formular, mit dem der Benutzer Aufgaben hinzufügen kann-->


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    session_start();

    if (!isset($_SESSION['aufgaben'])) {
        $_SESSION['aufgaben']  = array("Einkaufen", "Haus putzen", "Programmieren üben", "Essen", "Zocken");
    }

    function aussage(&$aufgaben, $anhang)
    {
        $aufgaben[] = $anhang;
    }

    if (isset($_POST["aufgaben"]) && !empty($_POST["anhang"])) {
        aussage($_SESSION['aufgaben'], $_POST["anhang"]);
    }

    echo "<ul>";

    foreach ($_SESSION['aufgaben'] as $aufgabe) {
        echo "<li>" . $aufgabe . "</li>";
    }
    echo "</ul>";

    ?>

    <form method="POST">
        Neue Aufgabe: <input type="text" name="anhang"><br>
        <input type="submit">
    </form>

</body>

</html>
