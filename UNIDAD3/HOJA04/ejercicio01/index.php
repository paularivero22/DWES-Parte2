<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'Circulo.php';

    $circulo = new Circulo(2);

    echo "Radio: " . $circulo->__get("radio");
    echo "<br/>Cambio el radio...";
    $circulo->__set("radio", 4);
    echo "<br/>Nuevo radio: " . $circulo->__get("radio");
    ?>
</body>
</html>