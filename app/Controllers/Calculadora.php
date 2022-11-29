<?php

namespace App\Controllers;

class Calculadora extends BaseController
{

    public function sumar($numero1, $numero2)
    {
        echo $numero1+$numero2;
    }

    public function restar($numero1, $numero2)
    {
        echo $numero1-$numero2;
    }

    public function multiplicar($numero1, $numero2)
    {
        echo $numero1*$numero2;
    }

    public function dividir($numero1, $numero2)
    {
        echo $numero1/$numero2;
    }
}
