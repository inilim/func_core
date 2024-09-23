<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

function getCurLenMaxInt(): int
{
    return \strlen(\strval(\PHP_INT_MAX));
}
