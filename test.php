<?php

require_once __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;
use Inilim\FuncCore\FuncCore;

Dump::init();
$a = [1, 2, 3];
$a = FuncCore::unique($a);

de($res);
// de(preg_quote('xmlrpc.beeps'));
