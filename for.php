<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    //Estructura de control flujo for y foreach

    $num = 5;

    /*  for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo "<br>";
    } */

    /* for ($j = 10; $j >= 1; $j--) {
        echo $j;
        echo "<br>";
    } */

    /* for ($k = 2; $k <= 100; $k++) {
        if ($k % 2 == 0) {
            echo $k;
            echo "<br>";
        }
    } */

    for ($i = 1; $i <= 10; $i++) {
        echo $i . " x " . $num . " = " . $i + $num;
        echo "<br>";
    }
    ?>
</body>

</html>