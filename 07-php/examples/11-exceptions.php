<?php
declare(strict_types=1);

class InsufficientFundsException extends RuntimeException {}

function withdraw(float $balance, float $amount): float
{
    if ($amount <= 0) {
        throw new InvalidArgumentException("Amount must be positive");
    }
    if ($amount > $balance) {
        throw new InsufficientFundsException("Balance too low");
    }
    return $balance - $amount;
}

foreach ([50.0, -5.0, 500.0] as $amount) {
    try {
        $left = withdraw(100.0, $amount);
        echo "Withdrew $amount, left $left" . PHP_EOL;
    } catch (InsufficientFundsException $e) {
        echo "Declined: " . $e->getMessage() . PHP_EOL;
    } catch (InvalidArgumentException $e) {
        echo "Invalid: " . $e->getMessage() . PHP_EOL;
    } finally {
        echo "-- transaction checked" . PHP_EOL;
    }
}

try {
    echo intdiv(1, 0);
} catch (DivisionByZeroError $e) {
    echo "Caught: " . $e->getMessage() . PHP_EOL;
}
