<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Estructura de control de flujo elseif

    $valor1 = 2;
    $valor2 = 2;
    $dia = 2;

    if ($valor1 > $valor2) {
        echo "valor1 es mayor que valor2";
        echo "<br>";
    } elseif ($valor1 == $valor2) {
        echo "el valor1 es igual al valor2";
        echo "<br>";
    } else {
        echo "valor1 es menor que valor2";
    }

    if ($dia == 1) {
        echo "Lunes";
    } elseif ($dia == 2) {
        echo "Martes";
    } elseif ($dia == 3) {
        echo "Miércoles";
    }
    ?>
</body>

</html>