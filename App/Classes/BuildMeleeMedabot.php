<?php

namespace App\Classes;

use App\Classes\Abstracts\BuildMedabot;

class BuildMeleeMedabot extends BuildMedabot
{
    public function build(): \App\Contracts\Medabot
    {
        return new MeleeMedabot();
    }
}