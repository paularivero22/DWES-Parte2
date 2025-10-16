
<?php
class Familia extends Medico
{
    protected $num_pacientes;

    public function __construct(string $nombre = "", int $edad = 0, string $turno = "", $num_pacientes = 0)
    {
        parent::__construct($nombre, $edad, $turno);
        $this->num_pacientes = $num_pacientes;
    }

    public function getNumPacientes() {
            return $this->num_pacientes;
        }

    public function mostrar() {
        $cadena = parent::mostrar();
        $cadena .= "
        <p> Numero de Pacientes: $this->num_pacientes </p>
        ";

        return $cadena;
    }
}
?>