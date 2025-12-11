<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use app\clases\funcionesBD;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $anio = $_POST['anio'] ?? '';
    $precio = $_POST['precio'] ?? '';
    $fecha = $_POST['fecha'] ?? '';
    
    if($titulo === '' || $anio === '' || $precio === '' || $fecha === '') {
        echo "Rellena todos los campos";
        exit;
    }

    $funciones = new funcionesBD();
    $funciones->insertarLibro($titulo, $anio, $precio, $fecha);

    echo "<br/> <br/> <a href='index.php'>Volver</a>";

}
