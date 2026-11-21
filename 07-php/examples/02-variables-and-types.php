<?php
declare(strict_types=1);

$name = "Ada";
$age = 36;
$height = 1.65;
$isDeveloper = true;
$nothing = null;
$skills = ["PHP", "SQL"];

foreach ([$name, $age, $height, $isDeveloper, $nothing, $skills] as $value) {
    echo gettype($value) . PHP_EOL;
}

// Casting
var_dump((int) "42abc");   // int(42)
var_dump((bool) "0");      // bool(false)
var_dump((string) 3.0);    // string(1) "3"

// Constants
const TAX_RATE = 0.16;
echo "Total with tax: " . round(100 * (1 + TAX_RATE), 2) . PHP_EOL;
