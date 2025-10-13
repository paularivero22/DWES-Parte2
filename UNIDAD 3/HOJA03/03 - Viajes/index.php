<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $viajes = array(
        "Madrid" => array("Destino" => "Segovia", "Distancia" => 90201),
        "Madrid2" => array("Destino" => "A Coruña", "Distancia" => 596887),
        "Barcelona" => array("Destino" => "Cádiz", "Distancia" => 1152669),
        "Bilbao" => array("Destino" => "Valencia", "Distancia" => 622233),
        "Sevilla" => array("Destino" => "Santander", "Distancia" => 832067),
        "Oviedo" => array("Destino" => "Badajoz", "Distancia" => 682429),
    );

    echo ("
    <table border='1'> 
        <thead> 
            <tr> 
                <th>Origen</th> 
                <th>Destino</th> 
                <th>Distancia</th>
            </tr> 
        </thead>
        <tbody>"
    );

    $distancias = array();

    foreach ($viajes as $viaje => $datos) {
        echo "<tr>";
        echo "<td>" . $viaje . "</td>";

        foreach ($datos as $dato => $valor) {
            echo "<td>" . $valor . "</td>";

            if ($dato === "Distancia") {
                $distancias[] = $valor;
            }
        }
    }
    echo "</tbody></table>";
    echo "<br/>";

    echo "Distancia maxima: " . max($distancias) / 1000;
    ?>

</body>

</html>