<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserte los datos del libro</h1>
    <hr/>

    <form action="procesa.php" method="post">
        <label for="titulo">Titulo:* </label>
        <input type="text" id="titulo" name="titulo"/> <br/><br/>

        <label for="anio">Año de edición:* </label>
        <input type="number" id="anio" name="anio"/> <br/><br/>

        <label for="precio">Precio:* </label>
        <input type="number" id="precio" name="precio"/> <br/><br/>

        <label for="fecha">Fecha de adquisicion:* </label>
        <input type="date" id="fecha" name="fecha"/> <br/><br/>

        <input type="submit" value="Guardar datos del libro" /> <br/><br/>
    </form>
    <hr/>
</body>
</html>