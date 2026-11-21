# PHP Cheatsheet

## Basics
```php
<?php
declare(strict_types=1);
$x = 5;  const A = 1;  echo "Hi $x";
```

## Types and checks
`int float string bool array null` | `is_int()` `isset()` `empty()` `gettype()`

## Operators worth knowing
```php
$a ?? 'default'     $a ??= 1     $o?->p     $a <=> $b     $a === $b
```

## Arrays
```php
array_map  array_filter  array_reduce  array_column  usort  in_array  array_keys
[...$a, ...$b]   ['k' => $v] = $arr
```

## Strings
`strlen mb_strlen trim explode implode str_contains str_replace sprintf number_format`

## Classes
```php
class A { public function __construct(private int $x) {} }
interface I {}  trait T {}  enum E: string { case X = 'x'; }
```

## PDO
```php
$s = $pdo->prepare('SELECT * FROM t WHERE id = ?'); $s->execute([$id]); $s->fetch();
```

## Security
`htmlspecialchars` | `password_hash` | `password_verify` | prepared statements | `random_bytes`

## CLI
```bash
php file.php    php -S localhost:8000    php -v    composer require pkg/name
```
