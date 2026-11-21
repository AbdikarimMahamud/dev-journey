# 18. Security Basics

## The big ones
| Threat | Defence |
|---|---|
| SQL injection | prepared statements |
| XSS | `htmlspecialchars` on output |
| CSRF | per-session token in forms |
| Weak passwords | `password_hash` / `password_verify` |
| Session hijacking | regenerate ID, secure cookies |
| File upload abuse | validate type and size, rename files |

## Passwords
```php
$hash = password_hash($plain, PASSWORD_DEFAULT);
if (password_verify($input, $hash)) { /* ok */ }
```
Never use `md5` or `sha1` for passwords.

## CSRF token
```php
$_SESSION['csrf'] ??= bin2hex(random_bytes(32));
// compare with hash_equals($_SESSION['csrf'], $_POST['csrf'])
```

## General
- Keep PHP and dependencies updated.
- Keep secrets in environment variables, not in code.
- Turn off `display_errors` in production.
