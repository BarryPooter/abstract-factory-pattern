<?php

namespace App\Classes\Parts;

use App\Classes\Abstracts\Part;

class MeleeMedabotArm extends Part
{

    /**
     * RangedMedabotArm constructor.
     */
    public function __construct()
    {
        $this->setName('Beetle Stomper');
        $this->setDamageOutput(20);
    }
}