<?php

namespace App\Classes;

use App\Classes\Abstracts\BuildMedabot;

class BuildRangedMedabot extends BuildMedabot
{
    public function build(): \App\Contracts\Medabot
    {
        return new RangedMedabot();
    }
}