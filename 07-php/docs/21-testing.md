# 21. Testing

## Why
Tests catch regressions and let you refactor safely.

## PHPUnit
```bash
composer require --dev phpunit/phpunit
vendor/bin/phpunit tests
```
```php
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {
    public function testAdd(): void {
        $this->assertSame(4, add(2, 2));
    }
}
```

## Good tests
- Test behaviour, not implementation.
- One idea per test.
- Name tests clearly.
- Keep them fast and independent.

## This repo
`tests/run-tests.php` is a tiny runner with no dependencies, so the exercises work without Composer.
