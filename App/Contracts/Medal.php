<?php


namespace App\Contracts;


interface Medal
{
    public function getName() : string;
    public function getSpecialAbility() : string;

    public function setName(string $name): void;
    public function setSpecialAbility(string $special): void;
}