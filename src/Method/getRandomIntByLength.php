<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

function getRandomIntByLength(int $length): int
{
    $max_len = FuncCore::getCurLenMaxInt();
    $length = FuncCore::clamp($length, 1, $max_len);
    if ($length === 1) {
        $start = 0;
        $end   = 9;
    } else {
        $start = \intval(1 . \str_repeat('0', ($length - 1)));
        $end   = $max_len === $length ? \PHP_INT_MAX : \intval(\str_repeat('9', $length));
    }
    return \mt_rand($start, $end);
}
