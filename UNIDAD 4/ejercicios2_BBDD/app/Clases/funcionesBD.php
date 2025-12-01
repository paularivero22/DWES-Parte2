<?php

namespace app\Clases;

use app\BD\conexionBD;
use PDO;
use PDOException;

class funcionesBD
{

    public function __construct() {}

    public function mostrarTabla() {}


    public function getNombreEquipos(): array
    {
        try {
            // conexion a la base de datos
            $pdo = conexionBD::getConexion();

            // ejecutar la consulta
            $stmt = $pdo->query("SELECT nombre FROM equipos");

            // obtener todos los resultados como array asociativo
            $equipos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $equipos;
        } catch (\PDOException $e) {
            // en caso de error se puede loguear y devolver un array vacío
            error_log("Error al obtener equipos: " . $e->getMessage());
            return [];
        }
    }

    public function getJugadores($equipo): array
    {
        try {
            // conexion a la base de datos
            $pdo = conexionBD::getConexion();

            // ejecutar la consulta
            $sql = "SELECT * FROM jugadores WHERE nombre_equipo = :equipo";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':equipo' => $equipo]);

            $jugadores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $jugadores;
        } catch (\PDOException $e) {
            // en caso de error se puede loguear y devolver un array vacío
            error_log("Error al obtener los jugadores: " . $e->getMessage());
            return [];
        }
    }

    // public function añadirEquipo($nombre, $ciudad, $conferencia, $division): bool
    // {
    //     try {
    //         $pdo = conexionBD::getConexion();

    //         if (!$pdo) {
    //             throw new \Exception("No se pudo conectar a la base de datos");
    //         }

    //         $sql = "INSERT INTO equipos (nombre, ciudad, conferencia, division) 
    //             VALUES (:nombre, :ciudad, :conferencia, :division)";
    //         $stmt = $pdo->prepare($sql);

    //         $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    //         $stmt->bindParam(':ciudad', $ciudad, PDO::PARAM_STR);
    //         $stmt->bindParam(':conferencia', $conferencia, PDO::PARAM_STR);
    //         $stmt->bindParam(':division', $division, PDO::PARAM_STR);

    //         return $stmt->execute();
    //     } catch (\PDOException $e) {
    //         error_log("Error al añadir equipo: " . $e->getMessage());
    //         return false;
    //     } catch (\Exception $e) {
    //         error_log("Error: " . $e->getMessage());
    //         return false;
    //     }
    // }
}
