
<?php
class Avion extends ElementoVolador
{
    protected $companiaAerea;
    protected $fechaAlta;
    protected $altitudMaxima;

    public function __construct(String $companiaAerea = "", String $fechaAlta, int $altitudMaxima ) {
        $this->companiaAerea = $companiaAerea;
        $this->fechaAlta = $fechaAlta;
        $this->altitudMaxima = $altitudMaxima;
    }

    public function volar($altitud) {
        if($this->altitud > 0 && $altitud <= $this->altitudMaxima) {
                            
        }
    }
}

?>