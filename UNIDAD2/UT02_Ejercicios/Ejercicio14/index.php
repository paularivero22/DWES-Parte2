<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('Europe/Madrid');
    $formato = "Y-m-d H:i:s";

    $fechaActual = new DateTime(); //tipo fecha
    $cumpleaños = new DateTime("2004-12-02");
    
    $fecha1 = strtotime($fechaActual->format("Y-m-d H:i:s")); //lo convierte a segundos pasados desde 1 de enero de 1970
    $fecha2 = strtotime($cumpleaños->format("Y-m-d H:i:s"));

    //si los segundos pasados desde 1/1/1970 a una fecha son menos que a otra fecha
    //significa que la priemra fecha es anterior
    
    if($fecha2 > $fecha1) {
        echo $fecha2 - $fecha1;
    } else {
        echo $fecha1 - $fecha2;
    }
    ?>
</body>
</html>