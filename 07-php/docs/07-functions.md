# 07. Functions

```php
function greet(string $name, string $greeting = "Hello"): string {
    return "$greeting, $name!";
}
```

## Features
- **Default values:** `$greeting = "Hello"`
- **Named arguments (PHP 8):** `greet(greeting: "Hi", name: "Ada")`
- **Variadic:** `function sum(int ...$nums)`
- **Nullable types:** `?string`
- **Union types:** `int|string`
- **Return types:** `: void`, `: array`, `: never`

## Pass by reference
```php
function addOne(array &$list) { $list[] = 1; }
```

## Anonymous and arrow functions
```php
$double = fn($x) => $x * 2;
$add = function ($a, $b) use ($offset) { return $a + $b + $offset; };
```

## Built-in helpers
`array_map`, `array_filter`, `usort`, `str_contains`, `count`.
