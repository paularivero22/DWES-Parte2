
<?php
class Producto
{
    private $nombre;
    private $codigo;
    private $precio;

    const NUMERO = 4;

    public function __construct($nombre, $codigo, $precio)
    {
        $this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->precio = $precio;
    }


    public function setCodigo(int $nuevoCodigo)
    {
        $this->codigo = $nuevoCodigo;
    }

    public function setNombre(string $nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    public function setPrecio(float $nuevoPrecio)
    {
        $this->precio = $nuevoPrecio;
    }

    public function __get(string $propiedad)
    {
        return $this->$propiedad;
    }

    public function __set(string $propiedad, $nuevoValor)
    {
        return $this->$propiedad = $nuevoValor;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function __toString(): string
    {
        return "Nombre: " . $this->nombre . "<br/>Codigo: " . $this->codigo . "<br/>Precio: " . $this->precio;
    }
}
?>