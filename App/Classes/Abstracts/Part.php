<?php

namespace App\Classes\Abstracts;

abstract class Part implements \App\Contracts\Part
{
    protected $name;
    protected $damageOutput;

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getDamageOutput(): int
    {
        return (int) $this->damageOutput;
    }

    public function setName(string $name): void
    {
        $this->name = (string) $name;
    }

    public function setDamageOutput(int $amount): void
    {
        $this->damageOutput = (int) $amount;
    }
}