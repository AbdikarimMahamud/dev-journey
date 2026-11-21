<?php
declare(strict_types=1);

echo 7 + 3, " ", 7 % 3, " ", 2 ** 8, " ", intdiv(7, 2), PHP_EOL;

var_dump(1 == "1");   // true  (loose)
var_dump(1 === "1");  // false (strict)
var_dump(5 <=> 10);   // int(-1)

$input = null;
echo ($input ?? "default") . PHP_EOL;

$config = [];
$config['retries'] ??= 3;
echo $config['retries'] . PHP_EOL;

$age = 20;
echo ($age >= 18 ? "adult" : "minor") . PHP_EOL;

$user = null;
var_dump($user?->address?->city); // NULL, no error
