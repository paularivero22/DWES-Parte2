
<?php
    abstract class Medico {
        protected $nombre;
        protected $edad;
        protected $turno;

        public function __construct(string $nombre = "", int $edad = 0, string $turno = "") {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->turno = $turno;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getTurno() {
            return $this->turno;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function mostrar() {
            $cadena = "
            <p> Nombre: $this->nombre </p>
            <p> Edad: $this->edad </p>
            <p> Turno: $this->turno </p>
            ";

            return $cadena;
        }
    }
?>