
<?php
    if(isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        echo "Hola, " . $nombre;
    }
?>