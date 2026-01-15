<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <h5 class="mb-0">Funicular Bulnes</h5>
                    <small class="text-muted">Reservas, llegada y gestión de plazas.</small>
                </div>
            </div>

            <!-- Opciones -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="border rounded p-3 h-100">
                        <h6>Reservar plaza</h6>
                        <p class="text-muted small">
                            Reservar una plaza libre con DNI y nombre.
                        </p>
                        <a href="reservar.php" class="btn btn-primary btn-sm">Reservar</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="border rounded p-3 h-100">
                        <h6>Llegada al destino</h6>
                        <p class="text-muted small">
                            Borrar pasajeros y liberar todas las plazas (transacción).
                        </p>
                        <a href="llegada.php" class="btn btn-primary btn-sm">Llegada</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="border rounded p-3 h-100">
                        <h6>Gestión de plazas</h6>
                        <p class="text-muted small">
                            Ver y actualizar precios de las plazas.
                        </p>
                        <a href="gestion.php" class="btn btn-primary btn-sm">Gestionar</a>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-end text-muted small">
                © 2025 Funicular Bulnes
            </div>

        </div>
    </div>
</body>

</html>