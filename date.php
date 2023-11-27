<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Fecha y hora del sistema

    echo date("Y"); // Año
    echo "<br>";
    echo date("d M y"); // dia mes y año (mes en letras)
    echo "<br>";
    echo date("d/m/Y"); // dia/mes/año (4 digitos)
    echo "<br>";
    echo date("d/m/Y h:i:s");   //dia/mes/año (4 digitos) y la hora (formato 12 horas)
    echo "<br>";
    echo date("H:i:s"); // Hora (formato 24 horas)
    echo "<br>";
    echo date("l"); // Dia de la semana en letras
    echo "<br>";
    echo date("l jS \of F Y h:i:s A");  /* dia de la semana en letras + dia de la semana en numero 
    + mes en letras + año con 4 digitos + la hora en formato 12 horas*/
    echo "<br>";

    ?>
</body>

</html>