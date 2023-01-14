<?php

namespace Tests;

use App\Account;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    public function testIfAccountHasCount()
    {
        $account = new Account(1, "Alex", "Galarza", 100);
        $sut = $account->getCount();
        $this->assertEquals(1, $sut);
    }

    public function testIfAccountHasName()
    {
        $account = new Account(1, "Alex", "Galarza", 100);
        $sut = $account->getName();
        $this->assertEquals("Alex", $sut);
    }

    public function testIfAccountHasLastname()
    {
        $account = new Account(1, "Alex", "Galarza", 100);
        $sut = $account->getLastname();
        $this->assertEquals("Galarza", $sut);
    }

    public function testIfAccountHasBalance()
    {
        $account = new Account(1, "Alex", "Galarza", 100);
        $sut = $account->getBalance();
        $this->assertEquals(100, $sut);
    }

    public function testIfBalanceIncreaseWithDeposit()
    {
        $account = new Account(1, "Alex", "Galarza", 100);
        $account->deposit(100);
        $sut = $account->getBalance();
        $this->assertEquals(200, $sut);
    }

    public function testIfBalanceDecreaseWithWithdraw()
    {
        $account = new Account(1, "Alex", "Galarza", 100);
        $account->withdraw(50);
        $sut = $account->getBalance();
        $this->assertEquals(50, $sut);
    }

    public function testIfBalanceCanDecreaseWithAmountWithdrawedGreaterThanBalance()
    {
        $account = new Account(1, "Alex", "Galarza", 100);
        $sut1 = $account->withdraw(200);
        $sut2 = $account->getBalance();
        $this->assertEquals("No tiene suficiente saldo", $sut1);
        $this->assertEquals(100, $sut2);
    }
}
