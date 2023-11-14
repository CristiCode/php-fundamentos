<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php
    // Predefinidas

    $numero = 33;

    echo "Nombre del servidor " . $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo "Software del servidor " . $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
    echo "Nombre del servidor " . $_SERVER['SERVER_PORT'];
    echo "<br>";


    echo "La varibale número es " . $GLOBALS['numero'];

    ?>
</body>

</html>