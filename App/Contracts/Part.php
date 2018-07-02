<?php


namespace App\Contracts;

interface Part
{
    public function getName() : string;
    public function getDamageOutput() : int;

    public function setName(string $name) : void;
    public function setDamageOutput(int $amount) : void;
}