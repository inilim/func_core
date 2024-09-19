<?php

namespace Inilim\FuncCore\Method;

/**
 * функция не проверяет длину значения, будет true даже с bigint и более.
 */
function isNumeric(mixed $v): bool
{
    if (!\is_scalar($v) || \is_bool($v)) return false;
    // here string|int|float
    // if (\preg_match('#^0$#', $v) || \preg_match('#^\-?[1-9][0-9]{0,}$#', $v)) return true;
    if (\preg_match('#^\-?[1-9][0-9]{0,}$|^0$#', \strval($v))) return true;
    return false;
}
