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

    $cadena = "Las funciones en PHP facilitan la reutilización de código";
    $cadena2 = "Hola";

    echo capitalizar($cadena);
    echo capitalizar($cadena2);
    ?>
</body>
</html>