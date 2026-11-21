<?php
declare(strict_types=1);

abstract class Shape
{
    abstract public function area(): float;

    public function describe(): string
    {
        return sprintf("%s with area %.2f", static::class, $this->area());
    }
}

class Circle extends Shape
{
    public function __construct(private float $radius) {}

    public function area(): float
    {
        return M_PI * $this->radius ** 2;
    }
}

class Rectangle extends Shape
{
    public function __construct(private float $w, private float $h) {}

    public function area(): float
    {
        return $this->w * $this->h;
    }
}

$shapes = [new Circle(2), new Rectangle(3, 4)];
foreach ($shapes as $shape) {
    echo $shape->describe() . PHP_EOL;
}
