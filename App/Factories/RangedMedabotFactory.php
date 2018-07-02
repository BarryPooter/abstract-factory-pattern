<?php
namespace App\Factories;

use App\Classes\Medals\DragonMedal;
use App\Classes\RangedMedabot;
use App\Contracts\MedabotFactoryInterface;

class RangedMedabotFactory implements MedabotFactoryInterface
{
    public function build(): \App\Contracts\Medabot
    {
        $medabot = new RangedMedabot();
        $medabot->setMedal(new DragonMedal());

        return $medabot;
    }
}