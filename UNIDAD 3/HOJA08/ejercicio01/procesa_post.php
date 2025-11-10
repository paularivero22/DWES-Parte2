
<?php
    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['modulo']) && !empty($_POST['modulo']))  {
        $nombre = $_POST['nombre'];
        $modulo =  $_POST['modulo'];

        echo "Nombre: $nombre, Modulo: $modulo";
    }
?>