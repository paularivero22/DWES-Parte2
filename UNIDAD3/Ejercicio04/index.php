<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $posicion = rand(1, 2);

    switch ($posicion) {
        case 1:
            echo "dentro";
            break;

        case 2:
            echo "fuera";
            break;

        default:
            echo "?";
    }

    ?>
</body>

</html>