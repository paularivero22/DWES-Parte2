<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $paises = array(
        "EEUU" => array("Moneda" => "Dollar", "Cambio" => 1.1741),
        "UK" => array("Moneda" => "Libra esterlina", "Cambio" => 0.8734),
        "Japón" => array("Moneda" => "Yenes", "Cambio" => 173.76),
        "China" => array("Moneda" => "Yuanes", "Cambio" => 8.3591),
        "Argentina" => array("Moneda" => "Pesos Argentinos", "Cambio" => 1621.36),
        "Australia" => array("Moneda" => "Dollar AUS", "Cambio" => 1.776)
    );

    echo ("
    <table border='1'> 
        <thead> 
            <tr> 
                <th>Pais</th> 
                <th>Moneda</th> 
                <th>Cambio</th>
            </tr> 
        </thead>
        <tbody>"
    );

    $cambios = array();

    foreach ($paises as $pais => $caracteristicas) {
        echo (
            "<tr>" .
            "<td>" . $pais . "</td>"
        );

        foreach ($caracteristicas as $caracteristica => $valor) {
            echo ("<td>" .  $valor . "</td>");
            if ($caracteristica === "Cambio") {
                $cambios[] = $valor;
            }
        }
    }

    echo "</tbody></table>";
    echo "<br/>";

    $suma = 0;
    foreach($cambios as $cambio) {
        $suma += $cambio;
    }
    echo "Tipo Medio: " . $suma / count($cambios); 

    echo "<br/> Tipo mas bajo: " . min($cambios);

    echo "<br/> Tipo mas alto: " . max($cambios);
    ?>
</body>

</html>