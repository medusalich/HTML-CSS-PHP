<!--Erstelle eine leere Variable multiplikationsTabelle, die ein zweidimensionales Array werden soll.
    Verwende zwei geschachtelte for-Schleifen, um das Array zu füllen. 
    Dabei soll die Tabelle die Werte von 1 bis 10 multiplizieren (z.B. 1*1, 1*2, … 10*10).
    Gib das Array aus und verwende eine HTML-Tabelle (<table>), um die Werte als Multiplikationstabelle darzustellen.-->


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    $multiplikationsTabelle = [];

    for ($i = 1; $i <= 10; $i++) {
        $multiplikationsTabelle[$i] = [];
        for ($x = 1; $x <= 10; $x++) {
            $produkt = $i * $x; // 1 * 1 = 1    $i . " * " . $x . " = " . 
            $multiplikationsTabelle[$i][$x] = $produkt;
        }
    }
    echo "<table border='1'>";
    echo "<tr><th> x </th>";

    for ($x = 1; $x <= 10; $x++) {
        echo "<th> $x </th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th> $i </th>";
        for ($x = 1; $x <= 10; $x++) {
            echo "<td>" . $multiplikationsTabelle[$i][$x] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>"

    ?>

</body>

</html>