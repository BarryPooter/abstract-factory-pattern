<?php
namespace App\Factories;

use App\Classes\Medals\DragonMedal;
use App\Classes\Parts\RangedMedabotHead;
use App\Classes\RangedMedabot;
use App\Contracts\MedabotFactoryInterface;
use App\Contracts\Part;

class RangedMedabotFactory implements MedabotFactoryInterface
{
    public function build(): \App\Contracts\Medabot
    {
        $medabot = new RangedMedabot();
        $medabot->setMedal(new DragonMedal());
        $medabot->setHead($this->_getHead());

        return $medabot;
    }

    /**
     * @return Part
     */
    private function _getHead() : Part
    {
        $head = new RangedMedabotHead();
        $head->setDamageOutput(40);
        return $head;
    }
}