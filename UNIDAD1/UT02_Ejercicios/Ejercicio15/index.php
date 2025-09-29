<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fechaActual = getdate();

    echo "Dia de la semana actual: " . $fechaActual['weekday'];
    ?>
</body>
</html>