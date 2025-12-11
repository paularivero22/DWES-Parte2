
<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use app\Clases\funcionesBD;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $procedencia = $_POST['procedencia'] ?? '';
    $altura = $_POST['altura'] ?? '';
    $peso = $_POST['peso'] ?? '';
    $posicion = $_POST['posicion'] ?? '';

    $equipo = $_POST['equipo'] ?? '';
    $jugador = $_POST['jugador'] ?? '';

    echo "Equipo seleccionado: " . $equipo . "<br/>";
    echo "Jugador seleccionado: " . $jugador;

    $funciones = new funcionesBD();
    
    $funciones->eliminarJugador($jugador);
    $funciones->añadirJugador($nombre, $procedencia, $altura, $peso, $posicion, $equipo);
}
?>