<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

function URLProtocolsAsArray(): array
{
    return FuncCore::URLProtocolsAsClosure()->__invoke();
}
