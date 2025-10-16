<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Cuentas</title>
</head>
<body>
    <?php
    require_once 'Cuenta.php';
    require_once 'CuentaCorriente.php';
    require_once 'CuentaAhorro.php';

    // Crear un objeto CuentaCorriente
    $cuentaCorriente = new CuentaCorriente(12345, "Laura", 500, 10);

    echo "<h2>Cuenta Corriente</h2>";
    echo $cuentaCorriente->mostrar();
    $cuentaCorriente->ingreso(200);   // Ingresar dinero
    echo "<br>";
    $cuentaCorriente->reintegro(100); // Retirar dinero
    echo "<br>";
    echo $cuentaCorriente->mostrar();

    echo "<hr>";

    // Crear un objeto CuentaAhorro
    $cuentaAhorro = new CuentaAhorro(54321, "Carlos", 1000, 5, 1.3);

    echo "<h2>Cuenta Ahorro</h2>";
    echo $cuentaAhorro->mostrar();
    $cuentaAhorro->aplicaIntereses();  // Aplicar interés
    echo "<br>";
    echo $cuentaAhorro->mostrar();
    ?>
</body>
</html>
