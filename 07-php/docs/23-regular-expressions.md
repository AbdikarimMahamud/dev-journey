# 23. Regular Expressions

PHP uses PCRE with the `preg_*` functions.

```php
preg_match('/^\d{3}-\d{4}$/', '555-1234');      // 1 if matches
preg_match('/(\w+)@(\w+\.\w+)/', $email, $m);   // captures in $m
preg_match_all('/\d+/', 'a1b22c333', $all);     // all matches
preg_replace('/\s+/', ' ', "a   b    c");       // "a b c"
preg_split('/[,;]\s*/', 'a, b; c');             // split
```

## Common tokens
| Token | Meaning |
|---|---|
| `\d` | digit |
| `\w` | word character |
| `\s` | whitespace |
| `.` | any character |
| `+ * ?` | one or more, zero or more, optional |
| `^ $` | start and end |
| `( )` | capture group |

## Tip
For emails and URLs prefer `filter_var($v, FILTER_VALIDATE_EMAIL)` over hand-written patterns.
