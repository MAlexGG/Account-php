<?php

namespace App;

class Account
{
    private int $count;
    private string $name;
    private string $lastname;
    private int $balance;

    public function __construct(int $count, string $name, string $lastname, int $balance)
    {
        $this->count = $count;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->balance = $balance;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            return "¡No tiene suficiente saldo!";
        }
    }
}
