<?php

namespace DeanKH\Math;


use DeanKH\Math\Interfaces\MathInterface;

class Subtract implements MathInterface {

    static public function go($a, $b)
    {
        return $a - $b;
    }

}
