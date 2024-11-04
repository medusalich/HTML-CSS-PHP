<!--Erstelle ein Array aufgaben, das einige Aufgaben enthält, z.B. “Einkaufen”, “Haus putzen”, “Programmieren üben”.
    Erstelle eine HTML-Seite, die jede Aufgabe in einer <ul>-Liste ausgibt.
    Füge eine Funktion hinzu, die eine neue Aufgabe zum Array hinzufügt. 
    Verwende dazu ein HTML-Formular, mit dem der Benutzer Aufgaben hinzufügen kann-->


<!DOCTYPE html>
<html lang="en">
    
<body>

<?php
session_start();

$aufgaben = array ("Einkaufen", "Haus putzen", "Programmieren üben", "Essen", "Zocken");
$aufgaben [] = "bla";

function aussage(&$aufgabe, $anhang) {
    $aufgabe [] = $anhang;

}

aussage ($aufgaben, "Kochen");

echo "<ul>";

foreach ($aufgaben as $aufgabe) {
    echo "<li>" . $aufgabe . "</li>";
}
echo "</ul>";

if (isset($_POST["aufgabe"])) {
    $_SESSION[aussage($aufgaben, "Kochen")] [] = $_POST["aufgabe"];
}

?>

<form method="POST">
Neue Aufgabe: <input type="text" name="anhang"><br>
<input type="submit">
</form>

</body>

</html>