<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Estructura de control de flujo if

    $nota1 = 7;
    $nota2 = 8;
    $nota3 = 5;

    if ($nota1 >= 5) {
        echo "Nota 1 aprobada";
    }

    echo "<br>";
    if ($nota2 != 0) {
        echo "La nota 2 es distinta de cero";
    }

    echo "<br>";
    if ($nota3 == 5) {
        echo "Dentro del primer if";
        echo "<br>";
        if ($nota2 < 9) {
            echo "Dentro del segundo if";
            echo "<br>";
        }
    }

    if ($nota1 >= 5 && $nota2 >= 5) {
        echo "Curso aprobado";
    }
    ?>
</body>

</html>