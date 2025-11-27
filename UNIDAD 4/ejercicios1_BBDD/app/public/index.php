<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="procesa.php" method="post">
        <input type="submit" name="accion" value="mostrarEquipos" /><br/><br/>

        <h3>Añadir un equipo: </h3>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" /><br/><br/>
        
        <label for="ciudad">Ciudad: </label>
        <input type="text" id="ciudad" name="ciudad" /><br/><br/>

        <label for="conferencia">Conferencia: </label>
        <input type="text" id="conferencia" name="conferencia" /><br/><br/>

        <label for="division">Division: </label>
        <input type="text" id="division" name="division" /><br/><br/>

        <input type="submit" name="accion" value="agregar" /><br/><br/>
    </form>

</body>

</html>