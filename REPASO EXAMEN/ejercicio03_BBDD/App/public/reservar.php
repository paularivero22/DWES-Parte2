<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Clases\funcionesBD;

$plazas = FuncionesBD::obtenerPlazasDisponibles();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = $_POST['dni'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $plaza = $_POST['plaza'] ?? '';

    if($dni === '' || $nombre === '' || $plaza === '' ) {
        echo "<p>Rellena todos los campos</p>";
    }

    echo FuncionesBD::reserva($dni, $nombre, $plaza);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

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
                    <h5 class="mb-0">Reservar plaza</h5>
                    <small class="text-muted">Introduce DNI y nombre, y selecciona una plaza libre.</small>
                </div>
            </div>

            <form action="#" method="post">
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni" required>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="plaza" class="form-label">Plaza</label>
                    <select class="form-select" id="plaza" name="plaza" required>
                        <option value="">-- Selecciona plaza --</option>
                        <?php
                            foreach ($plazas as $plaza):
                        ?>

                        <option value="<?= $plaza['numero'] ?>">
                            <?= $plaza['numero'] ?>
                        </option>

                        <?php
                            endforeach;
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Reservar plaza</button>
            </form>

            <div class="mt-3 text-end">
                <a href="index.php" class="text-muted">&larr; Volver al menú</a>
            </div>

            <small class="text-muted mt-2 d-block">
                Nota: el campo sexo se guardará por defecto como "-" y la reserva se realiza en transacción.
            </small>
        </div>
    </div>
</body>

</html>