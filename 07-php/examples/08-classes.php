<?php
declare(strict_types=1);

class Product
{
    private static int $count = 0;

    public function __construct(
        public readonly string $name,
        private float $price,
    ) {
        self::$count++;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function applyDiscount(float $percent): void
    {
        if ($percent < 0 || $percent > 100) {
            throw new InvalidArgumentException("Discount must be 0-100");
        }
        $this->price = round($this->price * (1 - $percent / 100), 2);
    }

    public static function count(): int
    {
        return self::$count;
    }

    public function __toString(): string
    {
        return sprintf("%s ($%.2f)", $this->name, $this->price);
    }
}

$p = new Product("Laptop", 1000.0);
$p->applyDiscount(10);
echo $p . PHP_EOL;                      // Laptop ($900.00)
echo Product::count() . PHP_EOL;        // 1
