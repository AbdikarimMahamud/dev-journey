# 20. Modern PHP (8.0 to 8.3)

## Constructor promotion
```php
class Point { public function __construct(public int $x, public int $y) {} }
```

## Enums (8.1)
```php
enum Status: string {
    case Draft = 'draft';
    case Published = 'published';
}
Status::from('draft');
```

## match, nullsafe, named args
```php
$r = match ($x) { 1 => 'one', default => 'other' };
$city = $user?->address?->city;
```

## Readonly properties and classes
`public readonly string $id;`

## First-class callables (8.1)
```php
$fn = strlen(...);
```

## Union and intersection types
`int|string`, `Countable&Traversable`

## Attributes
```php
#[Route('/home')]
class HomeController {}
```
