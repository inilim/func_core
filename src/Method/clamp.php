<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

/**
 * Clamp the given number between the given minimum and maximum.
 */
function clamp(int|float $number, int|float $min, int|float $max): int|float
{
    return \min(\max($number, $min), $max);
}
