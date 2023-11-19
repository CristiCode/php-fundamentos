<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    //Estructura de control flujo include

    echo "Soy el primer fichero";
    echo "<br>";
    include_once "include2.php"; // No incluye el siguiente fichero si es el mismo
    echo "<br>";
    include_once "include2.php";
    ?>
</body>

</html>