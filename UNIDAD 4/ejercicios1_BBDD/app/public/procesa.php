
<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use app\Funciones\funcionesBD;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $funciones = new funcionesBD();

    $accion = $_POST['accion'] ?? '';

    if ($accion === 'mostrarEquipos') {
        $equipos = $funciones->getEquipos();
        echo "<table border='1'>";

        foreach ($equipos as $equipo) {
            echo "<tr>";
            echo "<td>" . $equipo["nombre"] . "</td>";
            echo "<td>" . $equipo["ciudad"] . "</td>";
            echo "<td>" . $equipo["conferencia"] . "</td>";
            echo "<td>" . $equipo["division"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    if ($accion === 'agregar') {
        $nombre = $_POST['nombre'] ?? '';
        $ciudad = $_POST['ciudad'] ?? '';
        $conferencia = $_POST['conferencia'] ?? '';
        $division = $_POST['division'] ?? '';

        if ($nombre === '' || $ciudad === '' || $conferencia === '' || $division === '') {
            echo "completa todos los campos";
            exit;
        }

        $resultado = $funciones->añadirEquipo($nombre, $ciudad, $conferencia, $division);

        if ($resultado) {
            echo "<p style='color:green;'>¡Equipo '$nombre' añadido correctamente!</p>";
        } else {
            echo "<p style='color:red;'>Error al añadir el equipo</p>";
        }
    }
}

?>