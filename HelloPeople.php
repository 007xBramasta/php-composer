<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bramasta\Data\People;

$people = new People("Bramasta");

echo $people->sayHello("Nova") . PHP_EOL;