<?php
    namespace App\Clases;
    use App\BD\conexionBD;

    use PDO;
    use PDOException;

    class FuncionesBD {
        
        public static function guardarLibro($titulo, $anio, $precio, $fecha) {
            try {
                $pdo = ConexionBD::getConnection();

                $sql = "SELECT MAX(numero_ejemplar) + 1 from libros";
                $stmt = $pdo->query($sql);
                $codigo = (int) $stmt->fetchColumn();

                $sql2 = "INSERT INTO libros (numero_ejemplar, titulo, anyo_edicion, precio, fecha_adquisicion) VALUES (:codigo, :titulo, :anio, :precio, :fecha)";

                $stmt2 = $pdo->prepare($sql2);

                $stmt2->execute([
                    ':codigo' => $codigo,
                    ':titulo' => $titulo,
                    ':anio' =>  $anio,
                    ':precio' => $precio,
                    ':fecha' => $fecha
                ]);
                 
                return "<br/> Se ha añadido el libro con el codigo: " . $codigo;

            } catch (PDOException $e) {
                throw $e;
            }
        }
    }
?>