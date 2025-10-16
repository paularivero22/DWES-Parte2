
<?php
function comprobarCadena(string $palabra, string $cadena) {
    return strrpos($cadena, $palabra); 
}
?>