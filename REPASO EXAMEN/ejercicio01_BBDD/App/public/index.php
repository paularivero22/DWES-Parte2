<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once __DIR__ . '/../../vendor/autoload.php';

    use App\Clases\funcionesBD;

    $funciones = new funcionesBD();

    $equipos = $funciones->getNombreEquipos();
    ?>

    <form action="#" method="post">
        <h1>Jugadores por equipos</h1>
        <label for="equipo">Equipo: </label>
        <select id="equipo" name="equipo">
            <?php
            foreach ($equipos as $equipo):
            ?>
                <option value="<?= $equipo['nombre'] ?>">
                    <?= $equipo['nombre'] ?>
                </option>
            <?php
            endforeach;
            ?>
        </select>
        <input type="submit" value="Enviar" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $equipoSeleccionado = $_POST['equipo'] ?? '';

        $jugadores = $funciones->obtenerJugadoresEquipo($equipoSeleccionado);
    }
    ?>
    <br /><br /><br />

    <form action="#" method="post">
        <label for="jugador">Jugador: </label>
        <select id="jugador" name="jugador">
            <option value="">-- Selecciona jugador --</option>

            <?php
            foreach ($jugadores as $jugador):
            ?>
                <option value="<?= $jugador['nombre'] ?>">
                    <?= $jugador['nombre'] ?>
                </option>

            <?php
            endforeach;
            ?>
        </select>

        <input type="submit" value="Enviar" />
    </form>
    <!-- <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Peso</td>
        </tr>

        <?php
        // foreach ($jugadores as $jugador) {
        //     echo "<tr>";
        //     echo "<td>" .  $jugador['nombre'] . "</td>";
        //     echo "<td>" .  $jugador['peso'] . "</td>";
        //     echo "</tr>";
        // }
        ?>
    </table> -->

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $jugadorSeleccionado = $_POST['jugador'] ?? 'vacio';

        echo $jugadorSeleccionado;
    }
    ?>
</body>

</html>