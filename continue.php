<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    //Estructura de control flujo continue

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 3) {
            continue;
        }
        echo "valor de i: " .  $i;
        echo "<br>";
    }
    ?>
</body>

</html>