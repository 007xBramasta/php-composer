<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \Bramasta\Belajar\Customer("Bram");
echo $customer->sayHello() . PHP_EOL; 
echo $customer->sayHello("Albatio") . PHP_EOL; 