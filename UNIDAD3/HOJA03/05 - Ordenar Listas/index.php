<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function cargarPares()
    {
        $array = array();

        $array = range(2, 40, 2);
        shuffle($array);
        return $array;
    }

    function cargarImpares()
    {
        $array = array();

        $array = range(1, 39, 2);
        shuffle($array);
        return $array;
    }

    function ordenar($array)
    {
        sort($array);
        return $array;
    }

    function mezclar($pares, $impares)
    {
        return array_merge($pares, $impares);
    }

    function mostrar($array)
    {
        /* echo "[ ";
        for($i = 0; $i < count($array); $i++) {
            echo $array[$i] . ", ";
        }
        echo " ] <br/>"; */

        echo implode(", ", $array);
    }

    echo ("Crear Arrays: <br/>");
    $arrayPares = cargarPares();
    $arrayImpares = cargarImpares();

    mostrar($arrayPares);
    echo "<br/>";
    mostrar($arrayImpares);


    echo ("<br/> Ordenar arrays: <br/>");
    $arrayPares = ordenar($arrayPares);
    mostrar($arrayPares);
    echo "<br/>";

    $arrayImpares = ordenar($arrayImpares);
    mostrar($arrayImpares);
    echo "<br/>";

    echo ("<br/> Mezclar Arrays: <br/>");
    $fusionArays = mezclar($arrayPares, $arrayImpares);
    mostrar($fusionArays);
    echo "<br/>";
    ?>
</body>

</html>