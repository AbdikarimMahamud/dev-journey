# 14. Forms and Superglobals

| Superglobal | Contains |
|---|---|
| `$_GET` | query string values |
| `$_POST` | form body values |
| `$_SERVER` | request and server info |
| `$_FILES` | uploaded files |
| `$_COOKIE` | cookies |
| `$_SESSION` | session data |

## Handling a form
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) { $errors[] = "Invalid email"; }
}
```

## Escape output
```php
echo htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');
```

## Validation checklist
1. Check the field exists.
2. Trim it.
3. Validate type and format.
4. Escape when printing.
