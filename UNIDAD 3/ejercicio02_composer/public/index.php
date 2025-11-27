<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario de Contacto</h1><br />

    <form action="procesa.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" require /><br /><br />

        <label for="email">Correo electrónico: </label>
        <input type="text" id="email" name="email" require /><br /><br />

        <label for="mensaje">Mensaje: </label>
        <textarea type="text" id="mensaje" name="mensaje" require></textarea><br /><br />

        <input type="submit" value="Enviar" />
    </form>

    <?php
    if (isset($_GET['error'])) {
        
        switch($_GET['error']) {
            case 1:
                echo "<p style='color:#b00'>Por favor, rellena todos los campos.</p>";
                break;
            case 2:
                echo "<p style='color:#b00'>Por favor, introduce un email válido.</p>";
                break;
            case 3:
                echo "<p style='color:#b00'>Ha ocurrido un error al enviar el email.</p>";
                break;
            default: 
                echo "<p style='color:#b00'>Error.</p>";
        }
    } else if(isset($_GET['success'])) {
        echo "<p style='color:#0ba12e'>Por favor, rellena todos los campos.</p>";
    }
    ?>
</body>

</html>