
<?php
class Avion extends ElementoVolador
{
    private $companiaAerea;
    private $fechaAlta;
    private $altitudMaxima;

    public function __construct(string $nombre = "", int $numAlas = 0, int $numMotores = 0, float $altitud = 0.0, float $velocidad = 0.0, String $companiaAerea = "", String $fechaAlta, int $altitudMaxima)
    {
        parent::__construct($nombre, $numAlas, $numMotores, $altitud, $velocidad);
        $this->companiaAerea = $companiaAerea;
        $this->fechaAlta = $fechaAlta;
        $this->altitudMaxima = $altitudMaxima;
    }

    public function getCompaniaAerea()
    {
        return $this->companiaAerea;
    }

    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    public function getAltitudMaxima()
    {
        return $this->altitudMaxima;
    }

    public function volar($altitud)
    {
        if ($this->altitud > 0 && $altitud <= $this->altitudMaxima) {
            if ($this->velocidad  >= 150) {
                while ($this->altitud < $altitud) {
                    $this->altitud += 100;
                    if ($this->altitud > $altitud) {
                        $this->altitud = $altitud;
                    }
                    echo "Subiendo 100m... ALtitud actual: $this->altitud";
                }
            } else {
                echo "Error: la velocidad no es suficiente";
            }
        } else {
            echo "Error: la altitud es menor que 0 o mayor que la altitud maxima";
        }
    }

    public function mostrarInformacion()
    {
        return "
            <p>Nombre: $this->nombre</p>
            <p>Numero de Alas: $this->numAlas</p>
            <p>Numero de Motores: $this->numMotores</p>
            <p>Altitud: $this->altitud</p>
            <p>Velocidad: $this->velocidad</p>
            <p>Compañia Aerea: $this->companiaAerea</p>
            <p>Fecha Alta: $this->fechaAlta</p>
            <p>Altitud Maxima: $this->altitudMaxima</p>
        ";
    }
}

?>