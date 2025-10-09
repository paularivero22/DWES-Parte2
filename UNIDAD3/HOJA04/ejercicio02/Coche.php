
<?php
class Coche
{
    private $matricula;
    private $velocidad;

    public function __construct($matricula, $velocidad)
    {
        $this->matricula = $matricula;
        $this->velocidad = $velocidad;
    }

    public function acelera($valor)
    {
        if ($this->velocidad < 120 && $this->velocidad + $valor <= 120) {
            return $this->velocidad += $valor;
        }
    }

    public function __get(string $propiedad)
    {
        return $this->$propiedad;
    }

    public function frena($valor)
    {
        if ($this->velocidad > 0 && ($this->velocidad - $valor) > 0) {
            return $this->velocidad -= $valor;
        } else {
            return "No se puede frenar esa cantidada";
        }
    }
    
    public function mostrar(): string {
        return "Matrícula: {$this->matricula} <br>Velocidad: {$this->velocidad} km/h";
    }
}

?>