<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = rand(1, 5);

    echo "<br/> Con If: <br/>";
    if($numero == 1) {
        echo "uno";
    } else if($numero == 2) {
        echo "dos";
    } else if($numero == 3) {
        echo "tres";
    } else if($numero == 4) {
        echo "cuatro";
    } else if($numero == 5) {
        echo "cinco";
    } else {
        echo "?";
    }

    echo "<br/> <br/>  Con Switch: <br/>";
    switch ($numero) {
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
        case 4:
            echo "cuatro";
            break;
        case 5:
            echo "cinco";
            break;
        default:
        echo "?";
    }

    echo "<br/> <br/>  Con Match: <br/>";
    match ($numero) {
        1 => print "uno",
        2 => print "dos",
        3 => print "tres",
        4 => print "cuatro",
        5 => print "cinco",
        default => print "?"
    };
    ?>
</body>
</html>