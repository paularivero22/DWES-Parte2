<?php

namespace App\Clases;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class GeneradorPassword
{
    public static function generarPassword(
        bool $mayusculas,
        bool $minusculas,
        bool $numeros,
        bool $simbolos,
        int $longitud
    ) {
        $generator = new ComputerPasswordGenerator();
        $generator->setUppercase($mayusculas);
        $generator->setLowercase($minusculas);
        $generator->setNumbers($numeros);
        $generator->setSymbols($simbolos);
        $generator->setLength($longitud);

        return $generator->generatePassword();
    }
}
