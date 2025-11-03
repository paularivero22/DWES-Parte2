<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "Producto.php";
    require_once "Alimentacion.php";
    require_once "Electronica.php";

    $cestaCompra = array();

    $producto1 = new Alimentacion("A001", 2.50, "Yogur natural", 12, 2025);
    $cestaCompra[] = $producto1;

    $producto2 = new Electronica("E100", 399.99, "Auriculares Bluetooth", 24);
    $cestaCompra[] = $producto2;

    $contador = 0;
    $numAlimentacion = 0;
    $numElectronica = 0;
    $importe = 0;

    foreach ($cestaCompra as $producto) {
        $contador++;
        echo "<h2>Producto $contador</h2>";
        echo $producto->mostrar();

        $importe += $producto->getPrecio();

        if ($producto instanceof Electronica) {
            $numElectronica++;
        } else if ($producto instanceof Alimentacion) {
            $numAlimentacion++;
        }
    }

    echo "<hr>";

    echo "<p>Productos de Electronica: $numElectronica</p>";
    echo "<p>Productos de Alimentacion: $numAlimentacion</p>";
    
    echo "<hr>";
    echo "Importe Total: $importe";
    ?>

</body>

</html>