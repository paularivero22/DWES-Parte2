
<?php
class CuentaCorriente extends Cuenta
{
    protected $cuota_mantenimiento;

    public function __construct(int $numero, string $titular, float $saldo, float $cuota_mantenimiento)
    {
        parent::__construct($numero, $titular, $saldo);
        $this->cuota_mantenimiento = $cuota_mantenimiento;
    }

    public function reintegro($cantidad)
    {
        if ( (($this->saldo - $cantidad) >= 0) && $this->saldo > 20 ) {
            $this->saldo -= $cantidad;
            echo "Se han retirado " . $cantidad . "€";
        } else {
            echo "El saldo es insuficiente";
        }
    }

    public function mostrar() {
        $cadena = parent::mostrar();
        $cadena .= "<p> Cuota de mantenimiento: $this->cuota_mantenimiento </p>";
        
        return $cadena;
    }
}
?>