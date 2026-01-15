<?php

namespace App\Clases;

use App\BD\conexionBD;
use PDO;
use PDOException;

class funcionesBD
{

    function getEquipos()
    {
        try {
            $pdo =  ConexionBD::getConnection();

            $sql = "SELECT * FROM equipos";
            $stmt = $pdo->query($sql);

            $equipos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $equipos;
        } catch (PDOException $e) {
            error_log("Error al obtener equipos: " . $e->getMessage());
            return [];
        }
    }

    function getNombreEquipos()
    {
        try {
            $pdo =  ConexionBD::getConnection();

            $sql = "SELECT nombre FROM equipos";
            $stmt = $pdo->query($sql);

            $equipos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $equipos;
        } catch (PDOException $e) {
            error_log("Error al obtener equipos: " . $e->getMessage());
            return [];
        }
    }

    function obtenerJugadoresEquipo($equipo)
    {
        try {
            $pdo =  ConexionBD::getConnection();

            $sql = "SELECT nombre, peso FROM jugadores WHERE nombre_equipo = :equipo";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':equipo' => $equipo,
            ]);

            $equipos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $equipos;
        } catch (PDOException $e) {
            error_log("Error al obtener equipos: " . $e->getMessage());
            return [];
        }
    }

    function eliminarJugador($nombreJugador)
    {
        try {
            $pdo =  ConexionBD::getConnection();

            $sql1 = "SELECT codigo FROM jugadores WHERE nombre = :nombreJugador";
            $stmt = $pdo->prepare($sql1);
            $stmt->execute([
                ':nombreJugador' => $nombreJugador,
            ]);

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            $codigo = $resultado['codigo'];



            $sql2 = "DELETE FROM jugadores WHERE codigo = :id";
            $stmt2 = $pdo->prepare($sql2);

            return $stmt2->execute([
                ':id' => $codigo,
            ]);
        } catch (PDOException $e) {
            error_log("Error al obtener equipos: " . $e->getMessage());
            return [];
        }
    }
}
