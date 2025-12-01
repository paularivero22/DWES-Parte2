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

    use app\Clases\funcionesBD;

    $funciones = new funcionesBD();

    $equipos = $funciones->getNombreEquipos();
    ?>
    <h1>Jugadores por equipo</h1>

    <form action="#" method="post">
        <select name="equipo">
            <?php
            foreach ($equipos as $equipo) {
                $nombreE = $equipo['nombre'];
                echo "<option value='$nombreE'>" . $nombreE . "</option>";
            }
            ?>
        </select>

        <input type="submit" value="Mostrar Jugadores" />
    </form>



    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $equipoSelect = $_POST['equipo'] ?? '';

        if ($equipoSelect === '') {
            echo "selecciona un equipo";
            exit;
        }

        $jugadores = $funciones->getJugadores($equipoSelect);

        echo "<h1>Equipo: " . $equipoSelect . "</h1>";

        echo "<div>";
        echo "<h3>Jugador a dar de baja/h3>";
        echo "<select>";

        
        echo "</div>";
    }
    ?>
</body>

</html>