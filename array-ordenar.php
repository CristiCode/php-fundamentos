<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Arrays y ordenacion

    $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    //var_dump($dias);
    //echo "<br>";

    //asort($dias);
    //rsort($dias);
    //var_dump($dias);
    //echo "<br>";

    $numeros = array(10, 11, 8, 103, 99, 54);
    var_dump($numeros);
    echo "<br>";

    ksort($numeros);
    var_dump($numeros);
    echo "<br>";

    /* $arrayNombres = array("Javier" => "29", "Patricia" => "18", "Emilio" => "26");
    var_dump($arrayNombres);
    echo "<br>";

    ksort($arrayNombres);
    var_dump($arrayNombres);
    echo "<br>"; */

    shuffle($numeros);
    var_dump($numeros);
    echo "<br>";
    ?>
</body>

</html>