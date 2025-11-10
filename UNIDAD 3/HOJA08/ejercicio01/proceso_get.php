
<?php
    if (isset($_GET['nombre']) && !empty($_GET['nombre']) && isset($_GET['modulo']) && !empty($_GET['modulo']))  {
        $nombre = $_GET['nombre'];
        $modulo =  $_GET['modulo'];

        echo "Nombre: $nombre, Modulo: $modulo";
    }
?>