<?php

namespace App\Classes;

use App\Classes\Abstracts\BuildMedabot;
use App\Factories\MeleeMedabotFactory;

class BuildMeleeMedabot extends BuildMedabot
{
    public function build(): \App\Contracts\Medabot
    {
        $factory = new MeleeMedabotFactory;
        return $factory->build();
    }
}