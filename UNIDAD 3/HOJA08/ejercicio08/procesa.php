<?php
// Comprobar que los datos llegaron
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacion'])) {

    $num1 = (float) $_POST['num1'];
    $num2 = (float) $_POST['num2'];
    $operacion = $_POST['operacion'];

    echo "<h1>Resultado de la operación</h1>";

    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            echo "<p>$num1 + $num2 = <strong>$resultado</strong></p>";
            break;

        case 'resta':
            $resultado = $num1 - $num2;
            echo "<p>$num1 - $num2 = <strong>$resultado</strong></p>";
            break;

        case 'producto':
            $resultado = $num1 * $num2;
            echo "<p>$num1 × $num2 = <strong>$resultado</strong></p>";
            break;

        case 'cociente':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "<p>$num1 ÷ $num2 = <strong>$resultado</strong></p>";
            } else {
                echo " No se puede dividir entre cero";
            }
            break;

        default:
            echo "<p>Operación no reconocida.</p>";
    }
} else {
    echo "Completa todos los datos del formulario";
}
