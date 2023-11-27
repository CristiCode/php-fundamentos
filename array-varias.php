<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Funciones variadas de arrays

    $frutas = array("naranja", "plátano", "manzana", "frambuesa");

    // Cuenta los elementos de un array
    $elementos = count($frutas);
    echo $elementos;
    echo "<br>";

    // Apunta al elemento actual
    $actual = current($frutas);
    echo $actual;
    echo "<br>";

    // Apunta al final del array
    end($frutas);
    $actual = current($frutas);
    echo $actual;
    echo "<br>";

    // Reinicia el puntero
    reset($frutas);

    $meses = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril");
    $clave = array_search("Febrero", $meses);

    if ($clave) {
        echo $clave . " " . $meses[$clave];
    } else {
        echo "Elemento no encontrado";
    }
    ?>
</body>

</html>