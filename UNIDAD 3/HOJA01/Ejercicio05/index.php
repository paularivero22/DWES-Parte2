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

    match ($posicion) {
        1 => print "dentro",
        2 => print "fuera",
        default => print "?"
    }

    ?>
</body>

</html>