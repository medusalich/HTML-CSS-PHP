<!--Erstelle ein einfaches HTML-Formular mit einer Texteingabe für den Namen und einem “Absenden”-Button.
    Verarbeite das Formular in PHP, indem du prüfst, ob ein Name eingegeben wurde, und diesen dann ausgibst.-->


<!DOCTYPE html>
<html lang="en">

<body>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="ASbsenden">
    </form>
    <br>

    <?php

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "Hallo, " . $name . "!";
    }

    ?>

</body>

</html>