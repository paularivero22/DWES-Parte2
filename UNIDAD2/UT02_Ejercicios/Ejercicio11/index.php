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
    
    if(isset($a) == 1) {
        echo "\$a ha sido definida <br/>";
    }

    if(isset($b) == 1) {
        echo "\$b ha sido definida <br/>";
    }

    if(isset($c) == 1) {
        echo "\$c ha sido definida <br/>";
    }

    if(isset($d) == 1) {
        echo "\$d ha sido definida <br/>";
    }

    ?>
</body>
</html>