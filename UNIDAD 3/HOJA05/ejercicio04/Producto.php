
<?php
    abstract class Producto {
        protected $codigo;
        protected $precio;
        protected $nombre;

        public function __construct(string $codigo = "", float $precio, string $nombre ) {
            $this->codigo = $codigo;
            $this->precio = $precio;
            $this->nombre = $nombre;
        }

        abstract public function mostrar();
    }
?>