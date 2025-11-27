<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Generador de contraseñas</h1>
    <form action="procesa.php" method="post">
        <label for="longitud">Longitud: </label>
        <input type="number" id="longitud" name="longitud" required />

        <label for="mayusculas">Mayúsculas </label>
        <input type="checkbox" id="mayusculas" name="mayusculas" />

        <label for="minusculas">Minúsculas </label>
        <input type="checkbox" id="minusculas" name="minusculas" />

        <label for="numeros">Números</label>
        <input type="checkbox" id="numeros" name="numeros" />

        <label for="simbolos">Símbolos</label>
        <input type="checkbox" id="simbolos" name="simbolos" />

        <input type="submit" value="Generar contraseña" />
    </form>

</body>

</html>