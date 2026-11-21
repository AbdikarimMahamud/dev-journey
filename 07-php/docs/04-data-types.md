# 04. Data Types

| Type | Example |
|---|---|
| `int` | `42` |
| `float` | `3.14` |
| `string` | `"text"` |
| `bool` | `true` |
| `array` | `[1, 2, 3]` |
| `object` | `new User()` |
| `null` | `null` |

## Checking types
```php
gettype($x);
is_int($x); is_string($x); is_array($x); is_null($x);
```

## Casting
```php
(int) "42abc";   // 42
(string) 12;     // "12"
(bool) "";       // false
```

## Type declarations
```php
declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}
```
With `strict_types=1`, passing `"5"` to an `int` parameter throws a `TypeError`.

## Falsy values
`false`, `0`, `0.0`, `""`, `"0"`, `[]`, `null`.
