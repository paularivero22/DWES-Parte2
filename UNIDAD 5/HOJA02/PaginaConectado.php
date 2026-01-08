<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Clases\ConexionBD;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$pdo = ConexionBD::getConexion();

$mensaje = '';
$claseMensaje = '';

session_start();

$usuario  = $_POST['usuario'] ?? '';
$password = $_POST['contrasenia'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
$stmt->execute(['usuario' => $usuario]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['usuario'] = $user['usuario'];
    header("Location: index.php");
    exit;
} else {
    $mensaje = 'Usuario o contrasenia incorrectos';
    $claseMensaje = 'error';
}
