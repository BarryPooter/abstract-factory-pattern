<?php
namespace App\Contracts;

interface MedabotFactoryInterface
{
    // Start building the unit.
    public function build() : \App\Contracts\Medabot;
}