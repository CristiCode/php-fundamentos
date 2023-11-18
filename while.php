<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    //Estructura de control flujo while

    $num = 0;
    $respuesta = "Oporto";
    $intentos = 1;

    while ($num <= 10) {
        echo $num;
        $num++;
        echo "<br>";
    }

    while ($respuesta != "Lisboa") {
        echo "Intento " . $intentos;
        if ($intentos == 3) {
            $respuesta = "Lisboa";
        }
        $intentos++;
        echo "<br>";
    }
    ?>
</body>

</html>