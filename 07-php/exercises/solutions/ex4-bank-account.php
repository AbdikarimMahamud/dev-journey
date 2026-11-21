<?php
declare(strict_types=1);

class BankAccount
{
    private float $balance = 0.0;

    public function deposit(float $amount): void
    {
        $this->assertPositive($amount);
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        $this->assertPositive($amount);
        if ($amount > $this->balance) {
            throw new RuntimeException("Insufficient funds");
        }
        $this->balance -= $amount;
    }

    public function balance(): float
    {
        return $this->balance;
    }

    private function assertPositive(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Amount must be positive");
        }
    }
}
