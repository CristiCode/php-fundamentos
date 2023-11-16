<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php
    //Estructura de control flujo switch

    $dia = 8;

    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;

        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Día no válido";
    }

    $diaSemana = "MIERCOLES";
    switch ($diaSemana) {
        case "LUNES":
            echo 1;
            break;
        case "MARTES":
            echo 2;
            break;
        case "MIERCOLES":
            echo 3;
            break;
    }
    ?>
</body>

</html>