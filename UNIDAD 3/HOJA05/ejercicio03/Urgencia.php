
<?php
class Urgencia extends Medico
{
    private $unidad;

    public function __construct(string $nombre = "", int $edad = 0, string $turno = "", $unidad = "")
    {
        parent::__construct($nombre, $edad, $turno);
        $this->unidad = $unidad;
    }

    public function mostrar()
    {
        $cadena = parent::mostrar();
        $cadena .= "
        <p> Unidad: $this->unidad </p>
        ";

        return $cadena;
    }
}
?>