<?php
declare(strict_types=1);

function grade(int $score): string
{
    return match (true) {
        $score >= 90 => "A",
        $score >= 80 => "B",
        $score >= 70 => "C",
        default => "F",
    };
}

foreach ([95, 83, 71, 40] as $s) {
    echo "$s => " . grade($s) . PHP_EOL;
}

for ($i = 1; $i <= 15; $i++) {
    echo match (true) {
        $i % 15 === 0 => "FizzBuzz",
        $i % 3 === 0 => "Fizz",
        $i % 5 === 0 => "Buzz",
        default => (string) $i,
    }, " ";
}
echo PHP_EOL;

$n = 0;
while (true) {
    if (++$n > 5) break;
    if ($n % 2 === 0) continue;
    echo "odd: $n" . PHP_EOL;
}
