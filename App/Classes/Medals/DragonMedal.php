<?php

namespace App\Classes\Medals;

use App\Classes\Abstracts\MedabotMedal;

class DragonMedal extends MedabotMedal
{
    /**
     * DragonMedal constructor.
     */
    public function __construct()
    {
        $this->setName("Dragon Medal");
        $this->setSpecialAbility("spits fire from the Head to set the opponent on fire from a distance, dealing damage every turn.");
    }
}