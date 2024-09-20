<?php

namespace Inilim\FuncCore\Method;

/**
 * Return the length of the given string.
 */
function length(string $value, string|null $encoding = 'UTF-8'): int
{
    return \mb_strlen($value, $encoding);
}
