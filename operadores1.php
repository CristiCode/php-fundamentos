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
    $num2 = 2;

    // Suma con operador aritmetico
    $total = $num1 + $num2;
    echo $total;

    // Resto de una division
    echo "<br>";
    $resultado = $num2 % $num1;
    echo $resultado;

    // Exponencial de un numero
    echo "<br>";
    $potencia = $num1 ** $num2;
    echo $potencia;
    ?>
</body>

</html>