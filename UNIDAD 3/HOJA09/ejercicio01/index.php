<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Conversor de monedas</h1>

    <form method="post" action="$_SERVER['PHP_SELF']">
        <label for="cantidad">Cantidad:* </label>
        <input type="number" id="cantidad" name="cantidad" /><br/><br/>

        <label for="origen">Origen:* </label>
        <select id="origen" name="origen">
            <option value="euros">euros</option>
            <option value="dolares">dolares</option>
            <option value="libras">libras</option>
        </select> <br/><br/>

        <label for="destino">Destino:* </label>
        <select id="destino" name="destino">
            <option value="euros">euros</option>
            <option value="dolares">dolares</option>
            <option value="libras">libras</option>
        </select><br/><br/>

        <input type="submit" value="Convertir" />
    </form>


    <?php
    $tipos_cambio = [
        "euros" => 1,
        "dolares" => 1.08,
        "libras" => 0.85
    ];

    $resultados = [];

    if (isset($_POST['cantidad']) && isset($_POST['origen']) && isset($_POST['destino']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $cantidad = $_POST['cantidad'];
        $origen = $_POST['origen'];
        $destino = $_POST['destino'];

        $cantidad = str_replace(',', '.', $cantidad);

        $resultado = 0;

        if ($cantidad > 0) {
            $resultado = ($cantidad / $tipos_cambio[$origen]) * $tipos_cambio[$destino];
            echo $resultado;
        }
    }
    ?>
</body>

</html>