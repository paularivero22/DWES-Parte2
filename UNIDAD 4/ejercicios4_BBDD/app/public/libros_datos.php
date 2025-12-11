<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }

        th {
            background-color: #a2d39c;
            color: white;
            padding: 10px 15px;
            text-align: center;
        }

        td {
            padding: 10px 15px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <?php
    require_once __DIR__ . '/../../vendor/autoload.php';

    use app\clases\funcionesBD;

    $funciones = new funcionesBD();

    $libros = $funciones->getLibros();

    ?>
    <table>
        <tr>
            <th>NÚMERO EJEMPLAR</th>
            <th>TÍTULO</th>
            <th>AÑO DE EDICIÓN</th>
            <th>PRECIO</th>
            <th>FECHA DE ADQUISICION</th>
        </tr>

        <?php
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>$libro[numero_ejemplar]</td>";
            echo "<td>$libro[titulo]</td>";
            echo "<td>$libro[anyo_edicion]</td>";
            echo "<td>$libro[precio]</td>";
            echo "<td>$libro[fecha_adquisicion]</td>";
        }
        ?>

    </table>

    <br/><br/><a href="index.php">Volver</a> 
</body>

</html>