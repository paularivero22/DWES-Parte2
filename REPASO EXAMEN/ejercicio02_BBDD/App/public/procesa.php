<?php
    require_once __DIR__ . '/../../vendor/autoload.php';
    use App\Clases\funcionesBD;

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $titulo = $_POST['titulo'] ?? '';
        $anio = $_POST['anio'] ?? '';
        $precio = $_POST['precio'] ?? '';
        $fecha = $_POST['fecha'] ?? '';

        if($titulo === '' || $anio === '' || $precio === '' || $fecha === '' ) {
            echo "Rellena todos los campos";
            exit;
        }

        if($precio <= 0) {
            echo "El precio no es valido";
            exit;
        }

        if($anio > 2026) {
            echo "La fecha no es valida";
            exit;
        }

        echo FuncionesBD::guardarLibro($titulo, $anio, $precio, $fecha);
    }
?>