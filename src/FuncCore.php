<?php

namespace Inilim\FuncCore;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method  bool isNumeric(mixed $v) 
 * @method  static  bool isNumeric(mixed $v) 
 * @param \Inilim\FuncCore\Method\isNumeric
 * 
 * @method  TValue[] unique(TValue[] $array) 
 * @method  static  TValue[] unique(TValue[] $array) 
 * @param \Inilim\FuncCore\Method\unique
 * 
 */
class FuncCore extends LazyMethodAbstract
{
    protected const NAMESPACE   = 'Inilim\FuncCore\Method';
    protected const PATH_TO_DIR = __DIR__ . '/Method';
}
