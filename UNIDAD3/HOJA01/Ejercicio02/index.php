<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $diaActual = (int) date("d");

    for($i = 1; $i <= $diaActual; $i++) {
        echo $i . "<br/>";   
    }
    ?>
</body>
</html>