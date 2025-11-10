
<?php
    if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre']) && isset($_REQUEST['modulo']) && !empty($_REQUEST['modulo']))  {
        $nombre = $_REQUEST['nombre'];
        $modulo =  $_REQUEST['modulo'];

        echo "Nombre: $nombre, Modulo: $modulo";
    }
?>