<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Medico.php';
    require_once 'Familia.php';
    require_once 'Urgencia.php';

    $medicos = [
        new Familia("Dr. Juan Pérez", 45, "Mañana", 80),
        new Familia("Dra. Ana Gómez", 38, "Tarde", 95),
        new Urgencia("Dr. Luis Ramírez", 50, "Noche", "Trauma"),
        new Urgencia("Dra. Carla Torres", 65, "Tarde", "Cardiología"),
        new Familia("Dr. Roberto Sánchez", 42, "Mañana", 110),
        new Familia("Dra. Marta Díaz", 36, "Tarde", 85),
        new Urgencia("Dr. Alberto Molina", 55, "Noche", "Pediatría"),
        new Urgencia("Dra. Laura Fuentes", 40, "Mañana", "Urgencias Generales"),
        new Familia("Dr. Francisco Ortega", 48, "Mañana", 130),
        new Urgencia("Dra. Silvia Ramírez", 33, "Tarde", "Cardiología")
    ];


    //mostrar todos los datos de medicos de familiar y urgencias
    foreach ($medicos as $medico) {
        echo $medico->mostrar();
        echo "<br/>";
    }

    //mostrar el número de médicos de turno de tarde de urgencias tienen más de 60 años
    echo "Número de médicos de turno de tarde de urgencias tienen más de 60 años";
    foreach ($medicos as $medico) {
        if (($medico->getTurno() == "Tarde") && ($medico instanceof Urgencia) && ($medico->getEdad() > 60)) {
            echo $medico->mostrar();
        }

        echo "<br/>";
    }

    //Ver los datos de los médicos de familia que tienen asignados un nº igual o superior de
    //pacientes.
    echo "Medicos de familia con igual o mas de 100 pacientes";
    foreach ($medicos as $medico) {
        if ($medico instanceof Familia) {
            if ($medico->getNumPacientes() > 100) {
                echo $medico->mostrar();
            }
        }

        echo "<br/>";
    }
    ?>
</body>

</html>