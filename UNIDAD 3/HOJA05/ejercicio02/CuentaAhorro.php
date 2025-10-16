
<?php
class CuentaAhorro extends Cuenta
{
    protected $comision_apertura;
    protected $intereses;

    public function __construct(int $numero, string $titular, float $saldo, float $comision_apertura, float $intereses)
    {
        parent::__construct($numero, $titular, $saldo);
        $this->comision_apertura = $comision_apertura;
        $this->intereses = $intereses;
    }

    public function aplicaIntereses() {
        $this->saldo *= $this->intereses;
        echo "Se han aplicado los intereses";
        return $this->saldo;
    }
    
    public function mostrar() {
        $cadena = parent::mostrar();
        $cadena .= "
        <p> Comision de Apertura: $this->comision_apertura </p>
        <p> Intereses: $this->intereses </p>
        ";

        return $cadena;
    }
}
?>