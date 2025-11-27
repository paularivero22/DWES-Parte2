<?php
require_once '../vendor/autoload.php';

use App\Clases\AdaptadorGeneradorPassword;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $mayusculas = isset($_POST['mayusculas']);
    $minusculas = isset($_POST['minusculas']);
    $numeros    = isset($_POST['numeros']);
    $simbolos   = isset($_POST['simbolos']);

    $longitud = isset($_POST['longitud']) ? (int) $_POST['longitud'] : 0;

    if ($longitud <= 0) {
        die("Longitud inválida.");
    }
    if (!$mayusculas && !$minusculas && !$numeros && !$simbolos) {
        die("Debes seleccionar al menos un tipo de carácter.");
    }

    $adaptador = new AdaptadorGeneradorPassword();
    $password = $adaptador->generar($mayusculas, $minusculas, $numeros, $simbolos, $longitud);

    echo "<h1>Contraseña generada</h1>";
    echo $password;
}
