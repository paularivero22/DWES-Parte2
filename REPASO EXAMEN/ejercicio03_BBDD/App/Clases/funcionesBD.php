<?php

namespace App\Clases;

use App\BD\conexionBD;
use PDO;
use PDOException;

class FuncionesBD
{

    public static function llegada()
    {
        try {
            $pdo = ConexionBD::getConnection();

            $pdo->beginTransaction();
            $pdo->exec('DELETE FROM pasajeros');
            $pdo->exec('UPDATE plazas SET reservada = 0');

            $pdo->commit();

            echo "<p>El tren ha llegado a su destino</p>";
        } catch (PDOException $e) {
            $pdo->rollBack();
            throw $e;
        }
    }

    public static function obtenerPlazasDisponibles()
    {
        try {
            $pdo = ConexionBD::getConnection();

            $sql = "SELECT numero FROM plazas WHERE reservada = 0";

            $stmt = $pdo->query($sql);

            $plazas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $plazas;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public static function reserva($dni, $nombre, $plaza)
    {
        try {
            $pdo = ConexionBD::getConnection();

            $pdo->beginTransaction();

            $sql = "INSERT INTO pasajeros (dni, nombre, sexo, numero_plaza) VALUES (:dni, :nombre, :sexo, :plaza)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':dni' => $dni,
                ':nombre' => $nombre,
                ':sexo' => "-",
                ':plaza' => $plaza
            ]);

            $sql2 = "UPDATE plazas SET reservada = 1 WHERE numero = :plaza";
            $stmt2 = $pdo->prepare($sql2);
            $stmt2->execute([
                ':plaza' => $plaza
            ]);

            $pdo->commit();

            return "$plaza";
        } catch (PDOException $e) {
            $pdo->rollBack();
            throw $e;
        }
    }

    public static function obtenerPlazas()
    {
        try {
            $pdo = ConexionBD::getConnection();

            $sql = "SELECT * FROM plazas";

            $stmt = $pdo->query($sql);

            $plazas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $plazas;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public static function actualizarPrecio($numero, $nuevoPrecio)
    {
        try {
            $pdo = ConexionBD::getConnection();

            $pdo->beginTransaction();

            $sql = "UPDATE plazas SET precio = :nuevoPrecio WHERE numero = :numero";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nuevoPrecio' => $nuevoPrecio,
                ':numero' => $numero
            ]);

            $pdo->commit();
            return true;
        } catch (PDOException $e) {
            $pdo->rollBack();
            throw $e;
        }
    }
}
