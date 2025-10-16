<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Monedero.php';

    $monedero1 = new Monedero(50.0);

    echo "<h2>Prueba de la clase Monedero</h2>";

    echo "<h3>Monedero 1</h3>";
    echo "<p>" . $monedero1->consultarDinero() . "</p>";

    $monedero1->meterDinero(25.50);
    echo "<p>Después de meter 25.50 € → " . $monedero1->consultarDinero() . "</p>";

    $monedero1->sacarDinero(60);
    echo "<p>Después de sacar 60 € → " . $monedero1->consultarDinero() . "</p>";
    ?>

</body>

</html>