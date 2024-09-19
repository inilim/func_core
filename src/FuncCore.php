<?php

namespace Inilim\FuncCore;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method  bool isNumeric(mixed $v) 
 * @method  static  bool isNumeric(mixed $v) 
 * @param \Inilim\FuncCore\Method\isNumeric
 * 
 */
class FuncCore extends LazyMethodAbstract
{
    protected const NAMESPACE   = 'Inilim\FuncCore\Method';
    protected const PATH_TO_DIR = __DIR__ . '/Method';
}
