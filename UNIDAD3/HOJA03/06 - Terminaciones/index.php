<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $verbos = ["hablar", "comer", "dormir"];
    $terminaciones = array(
        "ar" => array(
            "yo" => "o",
            "tu" => "as",
            "El/Ella" => "a",
            "Nosotros" => "amos",
            "Vosotros" => "ais",
            "Ellos/as" => "an"
        ),

        "er" => array(
            "yo" => "o",
            "tu" => "es",
            "El/Ella" => "e",
            "Nosotros" => "emos",
            "Vosotros" => "eis",
            "Ellos/as" => "en"
        ),

        "ir" => array(
            "yo" => "o",
            "tu" => "es",
            "El/Ella" => "e",
            "Nosotros" => "imos",
            "Vosotros" => "is",
            "Ellos/as" => "en"
        )
    );

    function mostrarConjugacion($terminacion, $raiz) {
        switch ($terminacion) {
            
        }
    }

    function conjugar($verbos){

        foreach ($verbos as $verbo) {
            $terminacion = substr($verbo, -2);
            $longitud = strlen($verbo);
            $raiz = substr($verbo, 0, $longitud - 2);
        }
    }

    ?>
</body>

</html>