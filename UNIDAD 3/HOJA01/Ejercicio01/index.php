<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "<br/> Con For: <br/>";
    for($i = 1; $i <= 10; $i++) {
        $resultado = 2 * $i;
        echo "2 x " . $i . " = " . $resultado . "<br/>";
    }
    
    echo "<br/> Con While: <br/>";
    $j = 1;
    while($j <= 10) {
        $resultado = 2 * $j;
        echo "2 x " . $j . " = " . $resultado . "<br/>";
        $j++;
    }

    echo "<br/> Con Do While: <br/>";
    $k = 1;
    do {
        $resultado = 2 * $k;
        echo "2 x " . $k. " = " . $resultado . "<br/>";
        $k++;
    }while($k <= 10)
    ?>
</body>
</html>