<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

function magicMethodsAsString(string $separator = ""): string
{
    return \implode($separator, FuncCore::magicMethodsAsClosure()->__invoke());
}
