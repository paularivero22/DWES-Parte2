<?php

namespace App;

require_once __DIR__ . '/../helper.php';
require_once __DIR__ . '/ConexionBD.php';

use PDO;

class Autenticarse
{
    public function inicializar()
    {
        iniciar_sesion();
    }

    public function configurar()
    {
        $pdo = ConexionBD::get();
        // Crear tabla si no existe
        $sql = "CREATE TABLE IF NOT EXISTS usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            correo VARCHAR(255) UNIQUE,
            password VARCHAR(255)
        )";
        $pdo->exec($sql);

        self::crearDatosUsuario();
    }

    private function crearDatosUsuario() {}

    public function autenticar() {}
}
