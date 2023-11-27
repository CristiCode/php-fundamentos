<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Funciones para modificar arrys

    $frutas = array("naranja", "plátano", "manzana", "frambuesa");
    var_dump($frutas);
    echo "<br>";

    /* 
    $eliminado = array_shift($frutas);
    echo $eliminado;
    echo "<br>";
    var_dump($frutas);
    echo "<br>";

    array_unshift($frutas, "pera");
    echo "<br>";
    var_dump($frutas);
    echo "<br>"; */


    $eliminado = array_pop($frutas);
    var_dump($eliminado);
    echo "<br>";

    var_dump($frutas);
    echo "<br>";

    array_push($frutas, "pera");
    var_dump($frutas);
    echo "<br>";
    ?>
</body>

</html>