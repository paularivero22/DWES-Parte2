
<?php
class Encargado extends Empleado
{
    public function __construct(float $sueldoBase)
    {
        parent::__construct($sueldoBase);
    }

    public function getSueldo()
    {
        $this->sueldoBase *= 1.15;
        return $this->sueldoBase;
    }
}
?>