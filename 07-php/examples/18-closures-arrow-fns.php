<?php
declare(strict_types=1);

// A closure that remembers state
function counter(): Closure
{
    $count = 0;
    return function () use (&$count): int {
        return ++$count;
    };
}

$next = counter();
echo $next(), $next(), $next(), PHP_EOL; // 123

// Function that builds functions
function multiplier(int $factor): Closure
{
    return fn(int $x): int => $x * $factor;
}
$triple = multiplier(3);
echo $triple(5) . PHP_EOL;

// First-class callable syntax (PHP 8.1)
$length = strlen(...);
echo $length("hello") . PHP_EOL;

// Composition
$pipeline = array_reduce(
    [fn($x) => $x + 1, fn($x) => $x * 2, fn($x) => $x - 3],
    fn($carry, $fn) => fn($x) => $fn($carry($x)),
    fn($x) => $x
);
echo $pipeline(5) . PHP_EOL; // ((5+1)*2)-3 = 9
