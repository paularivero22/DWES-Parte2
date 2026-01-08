<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Clases\ConexionBD;

session_start();

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$pdo = ConexionBD::getConexion();

$mensaje = '';
$claseMensaje = '';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <style>
        :root {
            --bg: #f5f7fa;
            --primary: #2b7cff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: #fff;
            width: 100%;
            max-width: 420px;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 22px;
            text-align: center;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 14px;
        }

        label {
            font-size: 14px;
            margin-bottom: 4px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input:focus {
            outline: none;
            border-color: #2b7cff;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 16px;
        }

        button {
            background: #2b7cff;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
        }

        .actions a {
            color: #2b7cff;
            text-decoration: none;
            font-size: 14px;
        }

        .mensaje {
            margin-bottom: 12px;
            padding: 10px;
            border-radius: 4px;
            font-size: 14px;
        }

        .mensaje.error {
            background: #fff0f0;
            border: 1px solid #f2c2c2;
            color: #7a1b1b;
        }

        .mensaje.ok {
            background: #e9f7ef;
            border: 1px solid #c7eed4;
            color: #124825;
        }
    </style>
</head>

<body>

    <div class="card">
        <h1>Registro</h1>

        <?php if ($mensaje !== ''): ?>
            <div class="mensaje <?= $claseMensaje ?>">
                <?= htmlspecialchars($mensaje) ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>

            <div class="form-group">
                <label for="contrasenia">Contraseña</label>
                <input type="password" id="contrasenia" name="contrasenia" required>
            </div>

            <div class="form-group">
                <label for="confirmContrasenia">Repetir contraseña</label>
                <input type="password" id="confirmContrasenia" name="confirmContrasenia" required>
            </div>

            <div class="actions">
                <button type="submit">Registrar</button>
                <a href="login.php">Cancelar</a>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $usuario = trim($_POST['usuario'] ?? '');
        $password = $_POST['contrasenia'] ?? '';
        $confirmContrasenia = $_POST['confirmContrasenia'] ?? '';

        if ($usuario === '' || $password === '' || $confirmContrasenia === '') {
            $mensaje = 'Completa todos los campos';
            $claseMensaje = 'error';
        } elseif ($password !== $confirmContrasenia) {
            $mensaje = 'Las contraseñas no coinciden';
            $claseMensaje = 'error';
        } else {
            $stmt = $pdo->prepare(
                "SELECT COUNT(*) FROM usuarios WHERE usuario = :usuario"
            );
            $stmt->execute(['usuario' => $usuario]);

            if ($stmt->fetchColumn() > 0) {
                $mensaje = 'El usuario ya existe';
                $claseMensaje = 'error';
            } else {

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $pdo->prepare(
                    "INSERT INTO usuarios (usuario, password)
                 VALUES (:usuario, :password)"
                );

                if ($stmt->execute([
                    'usuario' => $usuario,
                    'password' => $passwordHash
                ])) {
                    $mensaje = 'Usuario registrado correctamente';
                    $claseMensaje = 'ok';
                } else {
                    $mensaje = 'Error al registrar el usuario';
                    $claseMensaje = 'error';
                }
            }
        }
    }
    ?>

</body>

</html>