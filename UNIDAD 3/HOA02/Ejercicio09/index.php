<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'funciones.php';

    $cadena = "Hola que tal";
    $palabra = "Hola";

    if (combrobarCadena($cadena, $palabra)) {
        echo "La cadena " . "<b>" . $cadena . "</b>" . " empieza con " . "<b>" . $palabra . "</b>";
    } else {
        echo "La cadena " . "<b>" . $cadena . "</b>" . " NO empieza con " . "<b>" . $palabra . "</b>";
    }
    ?>
</body>

</html>