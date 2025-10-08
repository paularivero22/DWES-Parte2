<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once 'funciones.php';

    $cadena1 = "Buenas tardes";
    $cadena2 = "buenas Tardes";
    $cadena3 = "Buenas tardes";

    if(cadenasIguales($cadena1, $cadena2) === 0) {
        echo "Las cadenas son iguales";
    } else {
        echo "No son iguales";
    }
    ?>
</body>
</html>