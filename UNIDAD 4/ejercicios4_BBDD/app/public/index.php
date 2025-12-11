<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insert los datos del libros</h1>
    <hr/> <br/>

    <form action="libros_guardar.php" method="post">
        <label for="titulo">Titulo:* </label>
        <input type="text" id="titulo" name="titulo" /> <br/> <br/>

        <label for="anio">Año de edición:* </label>
        <input type="number" id="anio" name="anio" />  <br/> <br/>

        <label for="precio">Precio:* </label>
        <input type="number" id="precio" name="precio" /> <br/> <br/>
        
        <label for="fecha">Fecha de adquisicion:* </label>
        <input type="date" id="fecha" name="fecha" />  <br/> <br/>

        <input type="submit" value="Guardar datos del libro" />  <br/> <br/>
        <hr/>

        <a href="libros_datos.php">Mostrar los libros guardados</a> <br/> <br/>
    </form>
</body>
</html>