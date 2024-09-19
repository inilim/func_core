<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

function URLProtocolsAsString(string $separator = ""): string
{
    return \implode($separator, FuncCore::URLProtocolsAsClosure()->__invoke());
}
