
<?php
class Circulo
{
    private $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    // public function setRadio($nuevoRadio)
    // {
    //     $this->radio = $nuevoRadio;
    // }

    // public function getRadio()
    // {
    //     return $this->radio;
    // }

    public function __set(string $propiedad, $nuevoValor)
    {
        return $this->$propiedad = $nuevoValor;
    }

    public function __get(string $propiedad)
    {
        return $this->$propiedad;
    }
}
?>