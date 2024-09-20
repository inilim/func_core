<?php

namespace Inilim\FuncCore;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method  array URLProtocolsAsArray() 
 * @method  static  array URLProtocolsAsArray() 
 * @param \Inilim\FuncCore\Method\URLProtocolsAsArray
 * 
 * @method  \Closure URLProtocolsAsClosure() 
 * @method  static  \Closure URLProtocolsAsClosure() 
 * @param \Inilim\FuncCore\Method\URLProtocolsAsClosure
 * 
 * @method  string URLProtocolsAsString(string $separator = "") 
 * @method  static  string URLProtocolsAsString(string $separator = "") 
 * @param \Inilim\FuncCore\Method\URLProtocolsAsString
 * 
 * @method  bool isNumeric(mixed $v) 
 * @method  static  bool isNumeric(mixed $v) 
 * @param \Inilim\FuncCore\Method\isNumeric
 * 
 * @method  int length(string $value, string|null $encoding = 'UTF-8') 
 * @method  static  int length(string $value, string|null $encoding = 'UTF-8') 
 * @param \Inilim\FuncCore\Method\length
 * 
 * @method  string[] magicMethodsAsArray() 
 * @method  static  string[] magicMethodsAsArray() 
 * @param \Inilim\FuncCore\Method\magicMethodsAsArray
 * 
 * @method  \Closure():string[] magicMethodsAsClosure() 
 * @method  static  \Closure():string[] magicMethodsAsClosure() 
 * @param \Inilim\FuncCore\Method\magicMethodsAsClosure
 * 
 * @method  string magicMethodsAsString(string $separator = "") 
 * @method  static  string magicMethodsAsString(string $separator = "") 
 * @param \Inilim\FuncCore\Method\magicMethodsAsString
 * 
 */
class FuncCore extends LazyMethodAbstract
{
    protected const NAMESPACE   = 'Inilim\FuncCore\Method';
    protected const PATH_TO_DIR = __DIR__ . '/Method';

    /**
     * @template TValue
     *
     * @param TValue[] $array
     * @return TValue[]
     */
    static function unique($array)
    {
        return self::__callStatic(__FUNCTION__, \func_get_args());
    }
}
