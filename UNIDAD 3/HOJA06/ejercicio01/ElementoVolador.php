
<?php
abstract class ElementoVolador implements Volador
{
    protected $nombre;
    protected $numAlas;
    protected $numMotores;
    protected $altitud;
    protected $velocidad;

    public function __construct(string $nombre = "", int $numAlas = 0, int $numMotores = 0, float $altitud = 0.0, float $velocidad = 0.0)
    {
        $this->nombre = $nombre;
        $this->numAlas = $numAlas;
        $this->numMotores = $numMotores;
        $this->altitud = $altitud;
        $this->velocidad = $velocidad;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function volando()
    {
        if ($this->altitud > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function acelerar(int $velocidad)
    {
        $this->velocidad += $velocidad;
    }

    public abstract function volar($altitud);

    public abstract function mostrarInformacion();
}
?>