
<?php
function capitalizar(string $cadena) {
    if(strlen($cadena) > 15) {
        return ucfirst($cadena) . "<br/>";
    } else {
        return 'La cadena no tiene mas de 15 caracteres';
    }
}
?>