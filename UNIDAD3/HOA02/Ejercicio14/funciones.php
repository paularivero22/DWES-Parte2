
<?php
function convertirCadena(string $cadena) {
    $cadenaMayusculas = strtoupper($cadena);
    $cadenaMinusculas = strtolower($cadena);

    return "Cadena en minusculas: " . $cadenaMinusculas . "<br/> Cadena en mayusculas: " .  $cadenaMayusculas;
}
?>