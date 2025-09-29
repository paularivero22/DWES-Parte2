<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = (int)12;
    $b = (double)2.5;
    $c = (String)"hola";
    $d = (boolean)true;
    
    if(is_int($a) == 1) {
        echo "\$a es int <br/>";
    }

    if(is_double($b) == 1) {
        echo "\$b es double <br/>";
    }

    if(is_string($c) == 1) {
        echo "\$c es string <br/>";
    }

    if(is_bool($d) == 1) {
        echo "\$d es boolean <br/>";
    }

    ?>
</body>
</html>