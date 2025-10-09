<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'Producto.php';

        $producto = new Producto("Aguacate", "123456", "0.20");
        echo ($producto->__toString());

        echo "<br/> Get Codigo: " . $producto->__get("codigo");
        
        echo "<br/> Cambio el codigo..";
        $producto->__set("codigo", 654321);
        
        echo "<br/> Nuevo Codigo: " . $producto->__get("codigo");

        echo "<<br/> Numero (constante): " . $producto::NUMERO;
    ?>
</body>
</html>