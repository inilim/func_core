<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

/**
 * @return string[]
 */
function magicMethodsAsArray(): array
{
    return FuncCore::magicMethodsAsClosure()->__invoke();
}
