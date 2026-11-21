# 09. Strings

## Creating
```php
$a = 'literal $text';
$b = "interpolated {$user['name']}";
$c = <<<EOT
Multi-line text with $name
EOT;
```

## Useful functions
| Function | Purpose |
|---|---|
| `strlen`, `mb_strlen` | length (use `mb_` for UTF-8) |
| `strtolower`, `strtoupper`, `ucfirst` | case |
| `trim`, `ltrim`, `rtrim` | strip whitespace |
| `str_contains`, `str_starts_with`, `str_ends_with` | search (PHP 8) |
| `str_replace` | replace |
| `substr`, `mb_substr` | slice |
| `explode`, `implode` | split / join |
| `sprintf`, `number_format` | formatting |

## Formatting
```php
printf("%s costs $%.2f", "Coffee", 4.5);
echo number_format(1234567.891, 2); // 1,234,567.89
```

## Always remember
Use the `mb_*` functions for non-English text, since `strlen("é")` counts bytes.
