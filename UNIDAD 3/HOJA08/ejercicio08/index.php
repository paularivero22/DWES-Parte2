<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con dos números</title>
</head>

<body>
    <h1>Calculadora básica</h1>

    <form action="procesa.php" method="post">
        <label for="num1">Elige el primer número:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>

        <label for="num2">Elige el segundo número:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>

        <fieldset>
            <legend>Seleccione la operación:</legend>

            <label>
                <input type="radio" name="operacion" value="suma" checked>
                Suma
            </label>

            <label>
                <input type="radio" name="operacion" value="resta">
                Resta
            </label>

            <label>
                <input type="radio" name="operacion" value="producto">
                Producto
            </label>

            <label>
                <input type="radio" name="operacion" value="cociente">
                Cociente
            </label>
        </fieldset>

        <br>
        <input type="submit" value="Enviar datos">
    </form>
</body>

</html>