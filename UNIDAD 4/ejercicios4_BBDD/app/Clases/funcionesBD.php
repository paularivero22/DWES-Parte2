<?php

namespace app\Clases;

use app\BD\conexionBD;
use PDO;
use PDOException;

class funcionesBD
{

    public function getTituloLibros(): array
    {
        try {
            // conexion a la base de datos
            $pdo = conexionBD::getConexion();

            // ejecutar la consulta
            $stmt = $pdo->query("SELECT titulo FROM libros");

            // obtener todos los resultados como array asociativo
            $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $libros;
        } catch (\PDOException $e) {
            // en caso de error se puede loguear y devolver un array vacío
            error_log("Error al obtener libros: " . $e->getMessage());
            return [];
        }
    }

    public function getLibros(): array
    {
        try {
            // conexion a la base de datos
            $pdo = conexionBD::getConexion();

            // ejecutar la consulta
            $stmt = $pdo->query("SELECT * FROM libros");
            $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $libros;
        } catch (\PDOException $e) {
            // en caso de error se puede loguear y devolver un array vacío
            error_log("Error al obtener los libros: " . $e->getMessage());
            return [];
        }
    }

    public function insertarLibro($titulo, $anio, $precio, $fecha)
    {
        try {
            $pdo = conexionBD::getConexion();

            $sqlCodigo = "SELECT MAX(numero_ejemplar) AS max_codigo FROM libros";
            $stmtCodigo = $pdo->query($sqlCodigo);
            $fila = $stmtCodigo->fetch();
            $nuevoCodigo = ($fila['max_codigo'] ?? 0) + 1;

            $sql = "INSERT INTO libros 
            (numero_ejemplar, titulo, anyo_edicion, precio, fecha_adquisicion) 
            VALUES (:codigo, :titulo, :anio, :precio, :fecha)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':codigo', $nuevoCodigo);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':anio', $anio);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':fecha', $fecha);

            $resultado = $stmt->execute();

            if ($resultado) {
                echo '<p style="
                    background-color: #3498db; 
                    color: white;  
                    padding: 15px 20px; 
                   
                    font-weight: bold; 
                    display: inline-block;
                    ">
                    Datos guardados correctamente
                </p>';
            } else {
                echo "<p style='color: red; font-weight: bold;'>Error: El libro NO se pudo insertar.</p>";
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
