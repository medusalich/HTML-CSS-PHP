<!--Erstelle ein Formular, das zwei Zahlen (zahl1 und zahl2) und einen Absenden-Button enthält.
    Verarbeite die Eingaben in PHP, indem du die beiden Zahlen addierst und das Ergebnis ausgibst.-->


<!DOCTYPE html>
<html lang="en">

<body>

    <form method="post">
        <label for="zahl1">Zahl 1: </label>
        <input type="number" id="zahl1" name="zahl1">
        <br>
        <label for="zahl2">Zahl 2: </label>
        <input type="number" id="zahl2" name="zahl2">
        <br>
        <input type="submit" value="Berechnen">
    </form>
    <br>

    <?php

    if (isset($_POST['zahl1'], $_POST['zahl2'])) {
        $zahl1 = $_POST['zahl1'];
        $zahl2 = $_POST['zahl2'];
        $summe = $zahl1 + $zahl2;
        echo "Die Summer beträgt: " . $summe;
    }

    ?>

</body>

</html>