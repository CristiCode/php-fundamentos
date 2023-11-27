<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    // Funcion getDate()

    $hoy = getDate();
    var_dump($hoy);

    echo "<br>";
    if ($hoy["month"] == "November") {
        echo "Noviembre";
    }

    ?>
</body>

</html>