<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = 20;
    $par = false;

    if($numero % 2 == 0) {
        $par = true;    
    }

    echo $par ? "El numero es par": "El numero es impar";
    ?>
</body>

</html>