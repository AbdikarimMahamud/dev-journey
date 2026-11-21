<?php
declare(strict_types=1);

$title = "  PHP Strings Are Handy  ";

echo trim($title) . PHP_EOL;
echo strtoupper(trim($title)) . PHP_EOL;
echo str_contains($title, "Handy") ? "has Handy" : "no Handy", PHP_EOL;
echo str_replace("Handy", "Useful", trim($title)) . PHP_EOL;

function slugify(string $text): string
{
    $text = strtolower(trim($text));
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}
echo slugify("Hello, World! This is PHP") . PHP_EOL; // hello-world-this-is-php

printf("%s costs $%.2f%s", "Coffee", 4.5, PHP_EOL);
echo number_format(1234567.891, 2) . PHP_EOL;

// UTF-8 safe functions
$word = "café";
echo strlen($word) . " bytes, " . mb_strlen($word) . " characters" . PHP_EOL;

$csv = "red,green,blue";
print_r(explode(",", $csv));
