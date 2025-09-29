<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 10;
    $num2 = 42;
    
    function Variables() {
        echo "Variable num1: " . $GLOBALS["num1"] . "<br/>"; 
        echo "Variable num2: " . $GLOBALS["num2"];
    }

    Variables();
    ?>
</body>
</html>