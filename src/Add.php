<?php

namespace Usaycompare\Math;


use Usaycompare\Math\Interfaces\MathInterface;

class Add implements MathInterface {

    static public function go($a, $b)
    {
        return $a + $b;
    }

}