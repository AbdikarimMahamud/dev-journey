<?php
declare(strict_types=1);

interface Logger
{
    public function log(string $message): void;
}

trait Timestamps
{
    public function stamp(string $message): string
    {
        return "[" . date('Y-m-d H:i:s') . "] " . $message;
    }
}

class ConsoleLogger implements Logger
{
    use Timestamps;

    public function log(string $message): void
    {
        echo $this->stamp($message) . PHP_EOL;
    }
}

class OrderService
{
    // Depends on the interface, not a concrete class
    public function __construct(private Logger $logger) {}

    public function place(string $item): void
    {
        $this->logger->log("Order placed: $item");
    }
}

(new OrderService(new ConsoleLogger()))->place("Keyboard");
