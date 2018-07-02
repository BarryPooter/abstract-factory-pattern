<?php
namespace App\Factories;

use App\Classes\Medals\BeetleMedal;
use App\Classes\MeleeMedabot;
use App\Contracts\MedabotFactoryInterface;

class MeleeMedabotFactory implements MedabotFactoryInterface
{
    public function build(): \App\Contracts\Medabot
    {
        $medabot = new MeleeMedabot();
        $medabot->setMedal(new BeetleMedal());

        return $medabot;
    }
}