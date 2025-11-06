
<?php
class Aeropuerto
{
    protected $elementosVoladores;

    public function __construct()
    {
        $this->elementosVoladores = array();
    }

    public function insertar($elementoVolador)
    {
        if ($elementoVolador instanceof Avion || $elementoVolador instanceof Helicoptero) {
            $this->elementosVoladores[] = $elementoVolador;
            echo "Se ha añadido a los elementos voladores";
        } else {
            echo "El elemento volador es de un tipo desconocido: " . gettype($elementoVolador);
        }
    }

    public function buscar(String $nombre)
    {
        $encontrado = false;

        foreach ($this->elementosVoladores as $elemento) {
            if (($elemento->__get("nombre")) === $nombre) {
                $encontrado = false;
                return $elemento;
            }
        }

        if (!$encontrado) {
            echo "No se ha encontrado el elemento volador";
        }
    }

    public function listarCompania($nombre)
    {
        $encontrado = false;
        $aviones = array();

        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Avion) {
                if ($elemento->getCompaniaAerea()) {
                    $encontrado = true;

                    $aviones[] = $elemento;
                }
            }
        }

        if (!$encontrado) {
            echo "No se ha encontrado una compañia aerea con ese nombre";
        }

        return $aviones;
    }

    public function rotores($numRotores)
    {
        $helicopteros = array();

        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Helicoptero) {
                if($elemento->getNRotor() === $numRotores) {
                    $helicopteros[] = $elemento;
                }
            }
        }
    }

    public function despegar($nombreElemento, $altitud, $velocidad) {
        $elemento = $this->buscar($nombreElemento);
        
        if($elemento) {
            $elemento->acelerar($velocidad);
             $elemento->volar($altitud);

            return $elemento;
        } else {
            echo "No se ha encontrado un elemento con ese nombre";
            return null;
        }
    }
}

?>