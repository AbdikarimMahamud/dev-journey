<?php
declare(strict_types=1);

function greet(string $name, string $greeting = "Hello"): string
{
    return "$greeting, $name!";
}

function sum(int ...$numbers): int
{
    return array_sum($numbers);
}

function findUser(array $users, int $id): ?array
{
    foreach ($users as $user) {
        if ($user['id'] === $id) return $user;
    }
    return null;
}

echo greet("Ada") . PHP_EOL;
echo greet(greeting: "Hi", name: "Grace") . PHP_EOL; // named arguments
echo sum(1, 2, 3, 4) . PHP_EOL;

$users = [['id' => 1, 'name' => 'Ada'], ['id' => 2, 'name' => 'Grace']];
echo (findUser($users, 2)['name'] ?? 'not found') . PHP_EOL;
echo (findUser($users, 9)['name'] ?? 'not found') . PHP_EOL;

// Arrow function and closure
$double = fn(int $x): int => $x * 2;
$offset = 10;
$addOffset = function (int $x) use ($offset): int { return $x + $offset; };
echo $double(4) . " " . $addOffset(4) . PHP_EOL;
