<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'Coche.php';

    $coche = new Coche("4141 LWS", 50);

    echo "Velocidad: " . $coche->__get("velocidad");
    echo "<br/>Acelero en 20km/h";
    $coche->acelera(20);
    echo "<br/>Velocidad: " . $coche->__get("velocidad") . "<br/>";
    echo $coche->mostrar();
    ?>
</body>
</html>