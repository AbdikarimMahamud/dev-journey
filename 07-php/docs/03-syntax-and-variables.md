# 03. Syntax and Variables

## Basics
```php
<?php
$name = "Ada";        // string
$age = 36;            // int
$price = 9.99;        // float
$isAdmin = false;     // bool
```

## Rules
- Variable names are case-sensitive (`$a` and `$A` differ), function names are not.
- Names start with a letter or underscore.
- Comments: `//`, `#` and `/* ... */`.

## Constants
```php
const APP_NAME = "Journey";
define("VERSION", "1.0");
```

## Output
```php
echo "Hello $name";        // double quotes interpolate
echo 'Hello $name';        // single quotes do not
print_r([1, 2]);           // readable dump
var_dump($age);            // type and value
```

## Variable scope
Functions cannot see outer variables unless passed in or declared with `global` (avoid `global`).
