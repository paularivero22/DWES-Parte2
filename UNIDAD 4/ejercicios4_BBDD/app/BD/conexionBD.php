<?php
namespace app\BD;

use PDO;
use PDOException;

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class conexionBD
{
    private static ?PDO $connection = null;

    final private function __construct() {}

    public static function getConexion(): ?PDO
    {
        try {
            if (!self::$connection) {
                $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                self::$connection = new PDO(
                    dsn: $_ENV['DB_DSN'],
                    username: $_ENV['DB_USERNAME'],
                    password: $_ENV['DB_PASSWORD'],
                    options: $opciones
                );
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo match ($e->getCode()) {
                1049 => 'Base de datos no encontrada<br/><br/>',
                1045 => 'Acceso denegado<br/><br/>',
                2002 => 'Conexión rechazada<br/><br/>',
                default => 'Error desconocido<br/><br/>',
            };
        }
        return self::$connection;
    }
   
}
$connection = conexionBD::getConexion();

