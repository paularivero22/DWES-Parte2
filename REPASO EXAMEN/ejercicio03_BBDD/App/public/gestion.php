<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Clases\funcionesBD;

$plazas = FuncionesBD::obtenerPlazas();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $precios = $_POST['precio'];

    foreach ($precios as $numero => $nuevoPrecio) {
        FuncionesBD::actualizarPrecio($numero, $nuevoPrecio);

        header('Location: gestion.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <body class="bg-light">
        <div class="container min-vh-100 d-flex align-items-center justify-content-center">
            <div class="card shadow-sm p-4" style="max-width: 900px; width: 100%;">

                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-primary text-white rounded d-flex align-items-center justify-content-center me-3"
                        style="width: 40px; height: 40px; font-weight: bold;">
                        FB
                    </div>
                    <div>
                        <h5 class="mb-0">Gestion de plazas</h5>
                        <small class="text-muted">Visualiza y actualiza los precios de las plazas del funicular.</small>
                    </div>
                </div>

                <form action="#" method="post">
                    <div class="row mb-3 fw-bold">
                        <div class="col-2">Plaza</div>
                        <div class="col-2">Reservada</div>
                        <div class="col-2">Precio (€)</div>
                    </div>
                    <?php
                    foreach ($plazas as $plaza):
                    ?>
                        <div class="row mb-2 align-items-center">
                            <div class="col-2">
                                <?= $plaza['numero'] ?>
                            </div>
                            <div class="col-2">
                                <?php
                                if ($plaza['reservada'] === 0) {
                                    echo "no";
                                } else {
                                    echo "si";
                                }
                                ?>
                            </div>
                            <div class="col-2">
                                <input type="number" step="0.01" name="precio[<?= $plaza['numero'] ?>]" class="form-control" value="<?= $plaza['precio'] ?>">
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                    <button type="submit" class="btn btn-primary w-50">Actualizar precios</button>
                </form>
                <div class="mt-3 text-end">
                    <a href="index.php" class="text-muted">&larr; Volver al menú</a>
                </div>
            </div>
        </div>
    </body>
</body>

</html>