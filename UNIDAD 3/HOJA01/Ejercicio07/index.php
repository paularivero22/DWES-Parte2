<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $productos = [
        "Manzana" => 5,
        "Platano" => 3,
        "Naranja" => 4,
        "Kiwi" => 6
    ];

    $kilosManzanas = 2;
    $kilosPlatanos = 1.5;
    $kilosNaranjas = 5;
    $kilosKiwis = 0;

    $resultado = 0;
    foreach ($productos as $producto => $precio) {
        if ($producto == "Manzana") {
            $resultado += $precio * $kilosManzanas;
        }

        if ($producto == "Platano") {
            $resultado += $precio * $kilosPlatanos;
        }

        if ($producto == "Naranja") {
            $resultado += $precio * $kilosNaranjas;
        }
        
        if ($producto == "Kiwi") {
            $resultado += $precio * $kilosKiwis;
        }
    }

    echo "Total: " . $resultado;
    ?>
</body>

</html>