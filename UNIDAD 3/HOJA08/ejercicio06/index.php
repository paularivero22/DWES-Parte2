<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Pares de numeros</h1>

    <form action="procesa.php" method="post">
        <label for="menor">Número menor:</label>
        <input type="number" id="menor" name="menor" required>
        <br><br>

        <label for="mayor">Número mayor:</label>
        <input type="number" id="mayor" name="mayor" required>
        <br><br>

        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>
