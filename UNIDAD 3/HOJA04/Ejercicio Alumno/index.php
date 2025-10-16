<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Alumno.php';
        require_once 'Persona.php';

        $alumno = new Alumno();
        $persona = new Persona();

        echo $persona instanceof Persona ? 'Sí, es una Persona<br>' : 'No, no es una Persona<br>';
        echo $alumno instanceof Persona ? 'Sí, el Alumno también es una Persona<br>' : 'No, el Alumno no es una Persona<br>';
        echo $alumno instanceof Alumno ? 'Sí, es un Alumno<br>' : 'No, no es un Alumno<br>';
    ?>
</body>
</html>
