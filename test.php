<?php

require_once __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;
use Inilim\FuncCore\FuncCore;

Dump::init();
$a = FuncCore::unique([1, 2, 3]);
