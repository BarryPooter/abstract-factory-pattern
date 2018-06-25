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
        $this->setSpecialAbility("set the opponent on fire, dealing damage every turn which can not be undone.");
    }
}