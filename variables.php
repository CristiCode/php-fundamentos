<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php
    
    // Variables
    $edad = 26;
    $estatura = 1.58;
    $nombre = "Cristina";
    $frase = "Cristi tiene $edad años";
    $frase2 = 'Cristi tiene $edad años';
    $profesor = false;

    echo $edad;
    echo "<br>";
    echo $estatura;
    echo "<br>";
    echo "Tu nombre es " . $nombre;
    echo "<br>";
    echo json_encode($profesor); // json_encode muestra el valor de una variable booleana del mismo modo que esta definida


    ?>
</body>

</html>