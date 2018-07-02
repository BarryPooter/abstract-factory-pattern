<?php
namespace App\Factories;

use App\Classes\Medals\BeetleMedal;
use App\Classes\MeleeMedabot;
use App\Classes\Parts\MeleeMedabotArm;
use App\Classes\Parts\MeleeMedabotHead;
use App\Classes\Parts\MeleeMedabotLeg;
use App\Contracts\MedabotFactoryInterface;

class MeleeMedabotFactory implements MedabotFactoryInterface
{
    public function build(): \App\Contracts\Medabot
    {
        $medabot = new MeleeMedabot();
        $medabot->setMedal(new BeetleMedal());
        $medabot->setHead(new MeleeMedabotHead());
        $medabot->setArm('left', new MeleeMedabotArm());
        $medabot->setArm('right', new MeleeMedabotArm());
        $medabot->setLeg('left', new MeleeMedabotLeg());
        $medabot->setLeg('right', new MeleeMedabotLeg());

        $colours = ['purple', 'blue', 'white'];
        $medabot->setColour($colours[array_rand($colours, 1)]);

        return $medabot;
    }
}