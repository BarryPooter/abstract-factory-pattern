<?php
namespace App\Contracts;

use App\Classes\Abstracts\Medabot;

interface MedabotFactoryInterface
{
    // Start building the unit.
    public function build() : Medabot;
}