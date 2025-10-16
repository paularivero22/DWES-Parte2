
<?php
    class Empleado {
        protected $sueldoBase;

        public function __construct(float $sueldoBase) {
            $this->sueldoBase = $sueldoBase;
        }

        public function getSueldo() {
            return $this->sueldoBase;
        }   
     }
?>