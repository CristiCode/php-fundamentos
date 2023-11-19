<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    //Estructura de control flujo require (es igual que el include, solo cambia que muestra un error fatal si no existe el fichero)

    echo "Soy el primer fichero";
    echo "<br>";
    require "requiress2.php";
    ?>
</body>

</html>