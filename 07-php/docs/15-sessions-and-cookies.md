# 15. Sessions and Cookies

## Sessions
Data stored on the server, linked to the browser by a session ID cookie.
```php
session_start();
$_SESSION['user_id'] = 42;
echo $_SESSION['user_id'] ?? 'guest';
session_destroy();
```

## Cookies
Small values stored in the browser.
```php
setcookie('theme', 'dark', [
    'expires' => time() + 86400,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax',
]);
```

## When to use which
- **Session:** login state, shopping cart, anything sensitive.
- **Cookie:** harmless preferences like theme.

## Security
- Call `session_regenerate_id(true)` after login.
- Use `httponly` and `secure` cookie flags.
- Never store passwords in a session or cookie.
