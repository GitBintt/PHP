<?php

class BankAccount
{
    private $balance;

    public function setBalance($amount)
    {
        $this->balance = $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$acc = new BankAccount();
$acc->setBalance(5000);

echo "Balance: " . $acc->getBalance();
