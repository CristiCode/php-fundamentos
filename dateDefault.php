<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Obtener y modificar la zona horaria

    echo "Zona horaria: " . date_default_timezone_get();
    echo "<br>";

    date_default_timezone_set("America/Los_Angeles");
    echo "Zona horaria: " . date_default_timezone_get();
    echo "<br>";
    ?>
</body>

</html>