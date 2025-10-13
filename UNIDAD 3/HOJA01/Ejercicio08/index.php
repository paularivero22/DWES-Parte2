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

    $compra = [
        "Manzana" => 2,
        "Platano" => 1.5,
        "Naranja" => 5
    ];


    $resultado = 0;
    foreach ($productos as $producto => $precio) {
        if ($producto == "Manzana" && isset($compra["Manzana"])) {
            $resultado += $precio * $compra["Manzana"];
        }

        if ($producto == "Platano" && isset($compra["Platano"])) {
            $resultado += $precio * $compra["Platano"];
        }

        if ($producto == "Naranja" && isset($compra["Naranja"])) {
            $resultado += $precio * $compra["Naranja"];
        }

        if ($producto == "Kiwi" && isset($compra["Kiwi"])) {
            $resultado += $precio * $compra["Kiwi"];
        }
    }

    echo "Total: " . $resultado;
    ?>
</body>

</html>