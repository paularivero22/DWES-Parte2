<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Modelos</title>
</head>

<body>

    <?php
    $coches = [
        "seat" => ["ibiza", "leon", "arona"],
        "renault" => ["19", "Megane", "Twingo"],
        "toyota" => ["corolla", "yaris", "rav4"]
    ];
    ?>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="marca">Marca: </label>
        <select id="marca" name="marca">
            <option value="seat" <?= ($_POST['marca'] ?? '') == "seat" ? "selected" : "" ?>>Seat</option>
            <option value="renault" <?= ($_POST['marca'] ?? '') == "renault" ? "selected" : "" ?>>Renault</option>
            <option value="toyota" <?= ($_POST['marca'] ?? '') == "toyota" ? "selected" : "" ?>>Toyota</option>
        </select>

        <input type="submit" name="mostrar" value="Mostrar" />

        <?php
        if (isset($_POST['marca'])) {
            $marca = $_POST['marca'];
            $originales = $coches[$marca];

            echo "<table border='1'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Modelo (editable)</th>
                </tr>
            </thead>";

            foreach ($originales as $i => $modelo) {
                echo "<tr>";
                echo "<td>" . ($i + 1) . "</td>";
                echo "<td><input type='text' name='modelos[]' value='$modelo'></td>";
                echo "</tr>";
            }

            echo "</table><br>";
            echo "<input type='submit' name='actualizar' value='Actualizar'><br><br>";

            if (isset($_POST['actualizar'])) {
                $modelos = $_POST['modelos'];
                $modificados = [];

                foreach ($originales as $i => $modelo) {
                    if ($modelo !== $modelos[$i]) {
                        $modificados[] = "Modelo original '$modelo' cambiado a '{$modelos[$i]}'";
                    }
                }

                if (!empty($modificados)) {
                    echo "<strong>Modelos modificados:</strong><br>";
                    echo "<ul>";
                    foreach ($modificados as $msg) {
                        echo "<li>$msg</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<strong>No se modificaron modelos.</strong>";
                }
            }
        }
        ?>
    </form>

</body>

</html>