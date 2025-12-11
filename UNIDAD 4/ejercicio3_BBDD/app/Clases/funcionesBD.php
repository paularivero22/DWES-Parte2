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

    public function añadirJugador($nombre, $procedencia, $altura, $peso, $posicion, $equipo): bool
    {
        try {
            $pdo = conexionBD::getConexion();

            $sqlCodigo = "SELECT MAX(codigo) AS max_codigo FROM jugadores";
            $stmtCodigo = $pdo->query($sqlCodigo);
            $fila = $stmtCodigo->fetch();
            $nuevoCodigo = ($fila['max_codigo'] ?? 0) + 1;

            $sql = "INSERT INTO jugadores 
            (codigo, nombre, procedencia, altura, peso, posicion, nombre_equipo) 
            VALUES (:codigo, :nombre, :procedencia, :altura, :peso, :posicion, :equipo)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':codigo', $nuevoCodigo);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':procedencia', $procedencia);
            $stmt->bindParam(':altura', $altura);
            $stmt->bindParam(':peso', $peso);
            $stmt->bindParam(':posicion', $posicion);
            $stmt->bindParam(':equipo', $equipo);

            $resultado = $stmt->execute();

            if ($resultado) {
                echo "<p style='color: green; font-weight: bold;'>Jugador insertado correctamente.</p>";
            } else {
                echo "<p style='color: red; font-weight: bold;'>Error: El jugador NO se pudo insertar.</p>";
                $errorInfo = $stmt->errorInfo();
                echo "<br/><small>Detalles: " . htmlspecialchars($errorInfo[2]) . "</small>";
            }

            return $resultado;
        } catch (\Exception $e) {
            echo "<p style='color: red; font-weight: bold;'>ERROR SQL: " . htmlspecialchars($e->getMessage()) . "</p>";
            return false;
        }
    }

    public function eliminarJugador($nombre)
    {
        try {
            $pdo = conexionBD::getConexion();

            $sql1 = "SELECT codigo FROM jugadores WHERE nombre = :nombre ";
            $stmt = $pdo->prepare($sql1);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();

            $jugador = $stmt->fetch();

            if (!$jugador) {
                echo "<p style='color: red; font-weight: bold;'>No existe un jugador con ese nombre.</p>";
                return false;
            }

            $codigo = $jugador['codigo'];

            $sql2 = "DELETE FROM estadisticas WHERE jugador = :codigo";
            $stmt = $pdo->prepare($sql2);
            $stmt->execute([':codigo' => $jugador['codigo']]);

            $sql3 = "DELETE FROM jugadores WHERE codigo = :codigo";
            $stmt = $pdo->prepare($sql3);

            $stmt->bindParam(':codigo', $codigo);

            $resultado = $stmt->execute();

            if ($resultado) {
                echo "<p style='color: green; font-weight: bold;'>Jugador eliminado correctamente.</p>";
            } else {
                echo "<p style='color: red; font-weight: bold;'>Error: El jugador NO se pudo insertar.</p>";
                $errorInfo = $stmt->errorInfo();
                echo "<br/><small>Detalles: " . htmlspecialchars($errorInfo[2]) . "</small>";
            }

            return $resultado;
        } catch (\Exception $e) {
            echo "<p style='color: red; font-weight: bold;'>ERROR SQL: " . htmlspecialchars($e->getMessage()) . "</p>";
            return false;
        }
    }
}
