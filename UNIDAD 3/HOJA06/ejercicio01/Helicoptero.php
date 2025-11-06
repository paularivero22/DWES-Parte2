
<?php
class Helicoptero extends ElementoVolador
{
    private $propietario;
    private $nRotor;

    public function __construct(string $nombre = "", int $numAlas = 0, int $numMotores = 0, float $altitud = 0.0, float $velocidad = 0.0, String $propietario = "", int $nRotor)
    {
        parent::__construct($nombre, $numAlas, $numMotores, $altitud, $velocidad);
        $this->propietario = $propietario;
        $this->nRotor = $nRotor;
    }

    public function getPropietario()
    {
        return $this->propietario;
    }

    public function getNRotor()
    {
        return $this->nRotor;
    }


    public function volar($altitud)
    {
        if ($altitud <= (100 * $this->nRotor)) {
            while ($this->altitud < $altitud) {
                $this->altitud += 20;
                if ($this->altitud > $altitud) {
                    $this->altitud = $altitud;
                }
                echo "Subiendo 100m... ALtitud actual: $this->altitud";
            }
        } else {
            echo "La altitud no puede superar los 100m por cada uno de los rotores";
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
            <p>Propietario: $this->propietario</p>
            <p>Numero de Rotores: $this->nRotor</p>
        ";
    }
}
?>