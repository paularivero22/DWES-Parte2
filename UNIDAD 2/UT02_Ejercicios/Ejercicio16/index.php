<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fechaActual = time(); 
    $cumpleaños = strtotime('2004-12-02');

    $diferenciaSegundos = $fechaActual - $cumpleaños;
    
    $diferenciaAños = floor($diferenciaSegundos /  (60 * 60 * 24 * 365));

    echo "Tienes" . $diferenciaAños . " años";
    ?>
</body>
</html>