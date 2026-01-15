<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Clases\funcionesBD;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo FuncionesBD::llegada();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llegada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow-sm p-4" style="max-width: 900px; width: 100%;">

            <div class="d-flex align-items-center mb-4">
                <div>
                    <h5 class="mb-0">Llegada al destino</h5>
                    <small class="text-muted">Al confirmar la llegada se eliminaran los pasajeros y se liberaran todas las plazas.</small>
                    <br /><br />

                    <form action="#" method="post">
                        <input type="submit" class="btn btn-primary btn-sm" value="Confirmar llegada" />
                    </form>
                    <br /><a href="index.php" class="text-muted">Volver al menú</a><br /><br />
                    <small class="text-muted">Operación realizada dentro de una transacción. Asegurate de tener copias si hace falta.</small>

                </div>
            </div>
        </div>
    </div>
</body>

</html>