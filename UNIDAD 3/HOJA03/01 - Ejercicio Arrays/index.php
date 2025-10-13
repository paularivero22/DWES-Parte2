<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $comunidades = array(
        "Andalucía" => 593.6,
        "Aragón" => 600.3,
        "Asturias" => 582.9,
        "Baleares" => 489.7,
        "Canarias" => 573.2,
        "Cantabria" => 551.5,
        "Castilla y León" => 645.3,
        "Castilla la Mancha" => 555.8,
        "Cataluña" => 568.3,
        "Comunidad Valenciana" => 561.1,
        "Extremadura" => 584.3,
        "Galicia" => 600.1,
        "Madrid" => 613.3,
        "Murcia" => 564.7,
        "Navarra" => 638.1,
        "País Vasco" => 637.5,
        "La Rioja" => 562.4,
        "Ceuta" => 539.7,
        "Melilla" => 569.8
    );
    echo ("
    <table border='1'> 
        <thead> 
            <tr> 
                <th>Nombre</th> 
                <th>Escolarizacion</th> 
            </tr> 
        </thead>
        <tbody>");

    foreach ($comunidades as $nombre => $escolarizacion) {
        echo (
            "<tr>" . 
                "<td>" . $nombre . "</td>" .
                "<td>" .  $escolarizacion . "</td>"
        );
    }

    echo "</tbody> </table>";
    ?>
</body>

</html>