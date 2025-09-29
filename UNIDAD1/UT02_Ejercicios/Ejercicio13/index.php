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
    $fecha = getdate();

    echo "Hoy es " . $fecha['weekday'] . ", " . $fecha['mday'] . " de " .
        $fecha['month'] . " de " . $fecha['year'];
    ?>
</body>

</html>