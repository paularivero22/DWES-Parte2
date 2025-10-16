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
    
    $cadena = "Hola que tal buenas tardes";
    $posicionInicial = 2;
    $longitud = 8;

    echo cortarCadena($cadena, $posicionInicial, $longitud);
    ?>
</body>
</html>