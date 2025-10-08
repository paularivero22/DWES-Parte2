<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dniPrueba = 12345678;

    function calcularLetra(int $dni) {
        $letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

        if (strlen($dni) === 8 && is_int($dni)) {
            $posicion = $dni % 23;
            $letra = "La letra correspondiente es: " . $letras[$posicion];
            echo $letra;
        } else {
            echo ("El dni es incorrecto");
        }
    }

    calcularLetra($dniPrueba);
    ?>
</body>

</html>