# 11. Inheritance, Interfaces and Traits

## Inheritance
```php
class Animal {
    public function speak(): string { return "..."; }
}
class Dog extends Animal {
    public function speak(): string { return "Woof"; }
}
```

## Abstract classes
```php
abstract class Shape {
    abstract public function area(): float;
}
```

## Interfaces
An interface is a contract: classes promise to implement certain methods.
```php
interface Payable { public function pay(float $amount): bool; }
class Card implements Payable { ... }
```
A class can implement many interfaces but extend only one class.

## Traits
Reusable chunks of methods shared across classes.
```php
trait Timestamps {
    public ?string $createdAt = null;
    public function touch(): void { $this->createdAt = date('c'); }
}
class Post { use Timestamps; }
```

## Guideline
Prefer composition and interfaces over deep inheritance.
