
<?php
class Cuenta
{
    protected $numero;
    protected $titular;
    protected $saldo;

    public function __construct(int $numero, string $titular, float $saldo)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function ingreso($cantidad)
    {
        $this->saldo += $cantidad;
        echo ("Se han ingresado " . $cantidad . "€");
    }

    public function reintegro($cantidad)
    {
        if (($this->saldo - $cantidad) >= 0) {
            $this->saldo -= $cantidad;
            echo "Se han retirado " . $cantidad . "€";
        } else {
            echo "El saldo es insuficiente";
        }
    }

    public function esPreferencial($cantidad)
    {
        if ($this->saldo > $cantidad) {
            return true;
        } else if ($this->saldo < $cantidad) {
            return false;
        } else {
            return true;
        }
    }

    public function mostrar()
    {
        $cadena = "<p>Numero: $this->numero </p>
        <p>Titular: $this->titular </p>
        <p>Saldo: $this->saldo € </p>";

        return $cadena;
    }
}
?>