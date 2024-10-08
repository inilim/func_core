<?php

namespace Inilim\FuncCore\Method;

use Inilim\FuncCore\FuncCore;

/**
 * @return \Closure():string[]
 */
function magicMethodsAsClosure(): \Closure
{
    return static fn() => [
        '__construct',
        '__destruct',
        '__call',
        '__callStatic',
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__sleep',
        '__wakeup',
        '__serialize',
        '__unserialize',
        '__toString',
        '__invoke',
        '__set_state',
        '__clone',
        '__debugInfo',
    ];
}
