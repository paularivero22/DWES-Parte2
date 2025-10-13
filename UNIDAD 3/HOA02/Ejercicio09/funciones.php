
<?php
    function combrobarCadena(string $cadena, string $palabra) {
        $cadenaMinusculas = strtolower($cadena);
        $palabraMinusculas = strtolower($palabra);
        
        return str_starts_with($cadenaMinusculas, $palabraMinusculas);
    }
?>