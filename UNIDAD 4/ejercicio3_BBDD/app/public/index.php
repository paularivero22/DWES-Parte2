<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cajas {
            display: flex;
        }

        .caja {
            background-color: #fafafa;
            border: 1px solid #ddddddff;
            border-radius: 10px;
            margin: 15px;
            padding: 15px;
            width: 400px;
        }
    </style>
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
        <select name="equipo" required onchange="this.form.submit()">
            <?php
            foreach ($equipos as $equipo) {
                $nombreE = $equipo['nombre'];
                echo "<option value='$nombreE'>" . $nombreE . "</option>";
            }
            ?>
        </select>
    </form>

    <?php
    $equipoSelect = $_POST['equipo'] ?? '';

    if ($equipoSelect === '') {
        echo "selecciona un equipo";
        exit;
    }

    $jugadores = $funciones->getJugadores($equipoSelect);

    echo "<h1>Equipo: " . $equipoSelect . "</h1>";
    echo "<div class='cajas'>";

    echo "<div class='caja'>";
    echo "<h3>Jugador a dar de baja</h3><br/>";

    echo "<form method='post' action='procesa.php'>";
    echo "<label for='jugador'>Selecciona jugador</label>";
    echo "<select name='jugador' id='jugador'>";
    foreach ($jugadores as $jugador) {
        $nombreJ = $jugador['nombre'];
        echo "<option value='$nombreJ'>" . $nombreJ . "</option>";
    }
    echo "</select>";
    echo "</div>";
    ?>

    <div class='caja'>
        <h3>Alta de nuevo juegor</h3><br />

        <label>Nombre</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Procedencia</label><br>
        <input type="text" name="procedencia" required><br><br>

        <label>Altura (m) — formato 1.98</label><br>
        <input type="text" name="altura" required><br><br>

        <label>Peso (kg)</label><br>
        <input type="text" name="peso" required><br><br>

        <label>Posición</label><br>
        <input type="text" name="posicion" required><br><br>

        <input type="hidden" name="equipo" value="<?php echo $equipoSelect; ?>">

        <input type="submit" value="realizar baja+alta"></button>
        </form>
    </div>

    </div>
</body>

</html>