<?php
namespace App\Factories;

use App\Classes\Medals\DragonMedal;
use App\Classes\Parts\RangedMedabotHead;
use App\Classes\RangedMedabot;
use App\Contracts\MedabotFactoryInterface;

class RangedMedabotFactory implements MedabotFactoryInterface
{
    public function build(): \App\Contracts\Medabot
    {
        $medabot = new RangedMedabot();
        $medabot->setMedal(new DragonMedal());
        $medabot->setHead(new RangedMedabotHead());

        return $medabot;
    }
}