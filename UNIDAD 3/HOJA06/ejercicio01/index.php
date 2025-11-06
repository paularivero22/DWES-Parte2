<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Incluir todas las clases
    require_once "Volador.php";
    require_once "ElementoVolador.php";
    require_once "Avion.php";
    require_once "Helicoptero.php";
    require_once "Aeropuerto.php";

    // 1. Crear un objeto Aeropuerto
    $aeropuerto = new Aeropuerto();

    // 2. Crear 3 aviones
    $avion1 = new Avion("Avion1", 2, 2, 0, 0, "AirEuropa", "2020-01-01", 1000);
    $avion2 = new Avion("Avion2", 2, 4, 0, 0, "Iberia", "2019-05-12", 1200);
    $avion3 = new Avion("Avion3", 2, 2, 0, 0, "AirEuropa", "2021-07-22", 900);

    // 2. Crear 3 helicópteros
    $heli1 = new Helicoptero("Heli1", 0, 1, 0, 0, "Juan", 2);
    $heli2 = new Helicoptero("Heli2", 0, 1, 0, 0, "Maria", 3);
    $heli3 = new Helicoptero("Heli3", 0, 2, 0, 0, "Carlos", 2);

    // 3. Insertar los objetos en el aeropuerto
    $aeropuerto->insertar($avion1);
    $aeropuerto->insertar($avion2);
    $aeropuerto->insertar($avion3);
    $aeropuerto->insertar($heli1);
    $aeropuerto->insertar($heli2);
    $aeropuerto->insertar($heli3);

    echo "<hr>";

    // 4. Probar método buscar
    echo "<h3>Buscar Avion existente (Avion2)</h3>";
    $encontrado = $aeropuerto->buscar("Avion2");
    if ($encontrado) echo $encontrado->mostrarInformacion();

    echo "<h3>Buscar Avion que no existe (AvionX)</h3>";
    $aeropuerto->buscar("AvionX");

    echo "<hr>";

    // 5. Probar método listarCompania
    echo "<h3>Listar aviones de AirEuropa</h3>";
    $aeropuerto->listarCompania("AirEuropa");

    echo "<h3>Listar aviones de una compañía inexistente (Ryanair)</h3>";
    $aeropuerto->listarCompania("Ryanair");

    echo "<hr>";

    // 6. Probar método rotores
    echo "<h3>Helicópteros con 2 rotores</h3>";
    $aeropuerto->rotores(2);

    echo "<h3>Helicópteros con 5 rotores (no existe)</h3>";
    $aeropuerto->rotores(5);

    echo "<hr>";

    // 7. Despegue de un avión
    echo "<h3>Despegue Avion1</h3>";
    $despegueAvion = $aeropuerto->despegar("Avion1", 500, 200);
    if ($despegueAvion) {
        echo "¿Está volando? " . ($despegueAvion->volando() ? "Sí" : "No") . "<br>";
        echo $despegueAvion->mostrarInformacion();
    }

    echo "<hr>";

    // 8. Despegue de un helicóptero
    echo "<h3>Despegue Heli2</h3>";
    $despegueHeli = $aeropuerto->despegar("Heli2", 60, 50);
    if ($despegueHeli) {
        echo "¿Está volando? " . ($despegueHeli->volando() ? "Sí" : "No") . "<br>";
        echo $despegueHeli->mostrarInformacion();
    }

    ?>

</body>

</html>