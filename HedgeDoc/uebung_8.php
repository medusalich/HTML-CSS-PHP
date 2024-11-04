<!--Erstelle eine HTML-Tabelle mit 2 Spalten: Produkt und Preis.
    Erstelle ein Array produkte mit den Namen von 3 Produkten und ihren Preisen (z.B. “Apfel” => 0.5).
    Nutze PHP, um die Tabelle dynamisch zu erstellen, 
    wobei jedes Produkt und sein Preis in einer Tabellenzeile ausgegeben wird.-->


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    $produkte = [
        "Müsli" => 2.50,
        "Schoki" => 0.5,
        "Kartoffeln" => 10.50,
    ];

    echo "<table border='1'>";
    echo "<tr><th>Produkt</th><th>Preis</th><tr>";
    foreach ($produkte as $produkt => $preis) {
        echo "<tr><th>$produkt</th><th>$preis</th><tr>";
    }
    echo "</table>";

    ?>

</body>

</html>