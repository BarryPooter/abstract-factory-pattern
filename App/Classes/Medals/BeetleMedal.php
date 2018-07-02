<?php

namespace App\Classes\Medals;

use App\Classes\Abstracts\MedabotMedal;

class BeetleMedal extends MedabotMedal
{
    /**
     * BeetleMedal constructor.
     */
    public function __construct()
    {
        $this->setName("Beetle Medal");
        $this->setSpecialAbility("doubles the damage of a Beetle Stomper for one turn.");
    }
}