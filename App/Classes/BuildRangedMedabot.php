<?php

namespace App\Classes;

use App\Classes\Abstracts\BuildMedabot;
use App\Factories\RangedMedabotFactory;

class BuildRangedMedabot extends BuildMedabot
{
    public function build(): \App\Contracts\Medabot
    {
        return (new RangedMedabotFactory())->build();
    }
}