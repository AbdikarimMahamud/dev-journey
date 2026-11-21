<?php
declare(strict_types=1);

enum OrderStatus: string
{
    case Pending = 'pending';
    case Shipped = 'shipped';
    case Delivered = 'delivered';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Waiting to ship',
            self::Shipped => 'On the way',
            self::Delivered => 'Arrived',
        };
    }

    public function isFinal(): bool
    {
        return $this === self::Delivered;
    }
}

$status = OrderStatus::from('shipped');
echo $status->label() . PHP_EOL;
var_dump($status->isFinal());

var_dump(OrderStatus::tryFrom('lost')); // NULL

foreach (OrderStatus::cases() as $case) {
    echo $case->name . " => " . $case->value . PHP_EOL;
}
