<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php
    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $valor1 = "5";

    // Operadores de comparacion
    if ($num1 != $num2) {
        echo "Num1 y num2 son iguales";
        echo "<br>";
    }

    if ($num1 !== $valor1) {
        echo "Los valores num1 y valor1 no son idénticos";
    }
    ?>
</body>

</html>