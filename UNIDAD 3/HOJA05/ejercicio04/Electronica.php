
<?php
    class Electronica extends Producto {
        private $plazoGarantia;

        public function __construct(string $codigo = "", float $precio, string $nombre, int $plazoGarantia) {
            parent::__construct($codigo, $precio, $nombre);
            $this->plazoGarantia = $plazoGarantia;
        }

        public function getPrecio() {
            return $this->precio;
        }
        
        public function mostrar() {
            $cadena = "
            <p>Codigo: $this->codigo</p>
            <p>Precio: $this->precio</p>
            <p>Nombre: $this->nombre</p>
            <p>Plazo de Garantia: $this->plazoGarantia</p>
            ";

            return $cadena;
        }    
    }
    
?>