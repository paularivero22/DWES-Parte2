<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Herencia en PHP</title>
</head>
<body>
    <?php
        require_once 'Empleado.php';
        require_once 'Encargado.php';

        $empleado1 = new Empleado(1000);
        $encargado1 = new Encargado(1000);

        echo "<h2>Prueba de Herencia y Sobrescritura</h2>";

        echo "<p><strong>Empleado:</strong> Sueldo base = $" . $empleado1->getSueldo() . "</p>";
        echo "<p><strong>Encargado:</strong> Sueldo con 15% de aumento = $" . $encargado1->getSueldo() . "</p>";

        echo "<hr>";
        echo $empleado1 instanceof Empleado ? "<p>Empleado1 es un Empleado </p>" : "<p>Empleado1 no es un Empleado </p>";
        echo $encargado1 instanceof Encargado ? "<p>Encargado1 es un Encargado </p>" : "<p>Encargado1 no es un Encargado </p>";
        echo $encargado1 instanceof Empleado ? "<p>Encargado1 también es un Empleado (herencia) </p>" : "<p>Encargado1 no es un Empleado </p>";
    ?>
</body>
</html>
