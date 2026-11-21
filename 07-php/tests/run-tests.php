<?php
declare(strict_types=1);

// A tiny dependency-free test runner. Run: php 07-php/tests/run-tests.php

$solutions = __DIR__ . '/../exercises/solutions/';
foreach (glob($solutions . '*.php') as $file) {
    require_once $file;
}

$passed = 0;
$failed = 0;

function test(string $name, callable $fn): void
{
    global $passed, $failed;
    try {
        $fn();
        $passed++;
        echo "  PASS  $name" . PHP_EOL;
    } catch (Throwable $e) {
        $failed++;
        echo "  FAIL  $name: " . $e->getMessage() . PHP_EOL;
    }
}

function assertSame(mixed $expected, mixed $actual): void
{
    if ($expected !== $actual) {
        throw new Exception(
            "expected " . var_export($expected, true) . ", got " . var_export($actual, true)
        );
    }
}

function assertThrows(string $class, callable $fn): void
{
    try {
        $fn();
    } catch (Throwable $e) {
        if ($e instanceof $class) return;
        throw new Exception("expected $class, got " . $e::class);
    }
    throw new Exception("expected $class but nothing was thrown");
}

test('reverseWords reverses order', fn() => assertSame('world big hello', reverseWords('hello big world')));
test('reverseWords collapses spaces', fn() => assertSame('b a', reverseWords('  a    b ')));
test('reverseWords handles empty', fn() => assertSame('', reverseWords('')));

test('isPalindrome ignores punctuation', fn() => assertSame(true, isPalindrome('A man, a plan, a canal: Panama')));
test('isPalindrome rejects non palindromes', fn() => assertSame(false, isPalindrome('hello')));

test('wordCount counts words', fn() => assertSame(
    ['the' => 2, 'cat' => 1, 'and' => 1, 'hat' => 1],
    wordCount('The cat and the hat')
));

test('BankAccount deposit and withdraw', function () {
    $a = new BankAccount();
    $a->deposit(100.0);
    $a->withdraw(30.0);
    assertSame(70.0, $a->balance());
});
test('BankAccount rejects overdraw', function () {
    $a = new BankAccount();
    $a->deposit(10.0);
    assertThrows(RuntimeException::class, fn() => $a->withdraw(50.0));
});
test('BankAccount rejects negative amounts', function () {
    $a = new BankAccount();
    assertThrows(InvalidArgumentException::class, fn() => $a->deposit(-5.0));
});

test('groupBy groups rows by key', function () {
    $rows = [
        ['type' => 'fruit', 'name' => 'apple'],
        ['type' => 'veg', 'name' => 'kale'],
        ['type' => 'fruit', 'name' => 'pear'],
    ];
    $g = groupBy($rows, 'type');
    assertSame(2, count($g['fruit']));
    assertSame('kale', $g['veg'][0]['name']);
});

echo PHP_EOL . "$passed passed, $failed failed" . PHP_EOL;
exit($failed > 0 ? 1 : 0);
