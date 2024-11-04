<!--Schreibe eine for-Schleife in PHP, die die Zahlen von 1 bis 10 ausgibt. 
    Nutze Tags, um jede Zahl in einem neuen Absatz darzustellen.
    Schreibe eine while-Schleife, die bei 5 beginnt und solange läuft, bis sie 0 erreicht. 
    Gib jede Zahl in einem neuen Absatz aus.-->


<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<p>";
    }
    
    $counter = 5;
    while ($counter >= 0) {
        echo "Counter " . $counter . "<br>";
        $counter--;
    }

    ?>

</body>

</html>