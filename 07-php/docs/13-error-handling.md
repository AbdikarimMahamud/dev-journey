# 13. Error Handling

## Exceptions
```php
try {
    $result = riskyOperation();
} catch (InvalidArgumentException $e) {
    echo "Bad input: " . $e->getMessage();
} catch (Exception $e) {
    error_log($e->getMessage());
} finally {
    cleanup();
}
```

## Throwing
```php
if ($age < 0) {
    throw new InvalidArgumentException("Age cannot be negative");
}
```

## Custom exceptions
```php
class ValidationException extends Exception {}
```

## Error vs Exception
`Error` (and `TypeError`) are thrown for engine-level problems. Both implement `Throwable`.

## Production settings
```ini
display_errors = Off
log_errors = On
```
Never show raw errors to users. Log them instead.
