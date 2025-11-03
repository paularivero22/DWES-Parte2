
<?php
    class Alimentacion extends Producto {
        private $mesCaducidad;
        private $anioCaducidad;

        public function __construct(string $codigo = "", float $precio, string $nombre, int $mesCaducidad, int $anioCaducidad) {
            parent::__construct($codigo, $precio, $nombre);
            $this->mesCaducidad = $mesCaducidad;
            $this->anioCaducidad = $anioCaducidad;
        }

        public function getPrecio() {
            return $this->precio;
        }
        
        public function mostrar() {
            // $codigo = parent::__get("codigo");
            // $precio = parent::__get("precio");
            // $nombre = parent::__get("nombre");

            $cadena = "
            <p>Codigo: $this->codigo</p>
            <p>Precio: $this->precio</p>
            <p>Nombre: $this->nombre</p>
            <p>Fecha de Caducidad: $this->mesCaducidad / $this->anioCaducidad</p>
            ";

            return $cadena;
        }    
    }
    
?>