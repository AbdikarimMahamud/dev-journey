# 10. Classes and Objects

```php
class User {
    public function __construct(
        private string $name,
        private int $age = 0,
    ) {}

    public function getName(): string {
        return $this->name;
    }
}

$u = new User("Ada", 36);
echo $u->getName();
```

## Visibility
- `public`: anywhere
- `protected`: class and subclasses
- `private`: class only

## Static and constants
```php
class Math {
    const PI = 3.14159;
    public static function square(int $n): int { return $n * $n; }
}
echo Math::square(4);
```

## Readonly (PHP 8.1)
```php
public function __construct(public readonly string $id) {}
```

## Magic methods
`__construct`, `__toString`, `__get`, `__call`. Use sparingly.
