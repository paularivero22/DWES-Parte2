
<?php
class Monedero
{
    private $dinero;
    private static $numero_monederos = 0;

    public function __construct(float $dinero)
    {
        $this->dinero = $dinero;
        self::$numero_monederos++;
    }

    public function __destruct()
    {
        self::$numero_monederos--;
    }

    public function meterDinero($cantidad)
    {
        $this->dinero += $cantidad;
    }

    public function sacarDinero($cantidad)
    {
        if ($cantidad > 0 && $this->dinero - $cantidad >= 0) {
            $this->dinero -= $cantidad;
        }
    }

    public function consultarDinero() {
        return "Saldo disponible: " . $this->dinero;
    }
}
?>