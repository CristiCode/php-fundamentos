<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Funciones

    $numero1 = 5;
    $numero2 = 10;

    // Funcion sin parametros
    function sumar()
    {
        echo "Soy una función para sumar";
    }

    sumar();

    echo "<br>";

    // Funcion con parametros
    function sumarNumeros($num1, $num2)
    {
        echo $num1 + $num2;
    }

    sumarNumeros($numero1, 1);

    echo "<br>";

    function sumerNumerosRetorno($num1, $num2)
    {
        return $num1 + $num2;
    }

    $resultado = sumerNumerosRetorno($numero1, $numero2);
    echo $resultado;
    ?>
</body>

</html>