# 05. Operators

## Arithmetic
`+ - * / % **` (`%` is modulo, `**` is power). `intdiv(7, 2)` returns `3`.

## Comparison
```php
1 == "1";    // true  (loose)
1 === "1";   // false (strict, prefer this)
$a <=> $b;   // -1, 0 or 1 (spaceship operator)
```

## Logical
`&&`, `||`, `!`, plus the low-precedence `and`, `or`.

## String
```php
$full = $first . " " . $last;
$text .= " more";
```

## Null handling
```php
$name = $input ?? "Guest";     // null coalescing
$config['x'] ??= 10;           // assign if null
$city = $user?->address?->city; // nullsafe (PHP 8)
```

## Ternary
```php
$label = $age >= 18 ? "adult" : "minor";
```
