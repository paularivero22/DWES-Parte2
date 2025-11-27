<?php

namespace App\Clases;

use App\Clases\GeneradorPassword;
use App\Interfaces\InterfazGeneradorPassword;

class AdaptadorGeneradorPassword implements InterfazGeneradorPassword
{

    public function generar(bool $mayusculas, bool $minusculas, bool $numeros, bool $simbolos, int $longitud): string
    {
        $password = GeneradorPassword::generarPassword(
            $mayusculas,
            $minusculas,
            $numeros,
            $simbolos,
            $longitud
        );
        return $password;
    }
}
