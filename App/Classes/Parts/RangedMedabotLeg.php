<?php

namespace App\Classes\Parts;

use App\Classes\Abstracts\Part;

class RangedMedabotLeg extends Part
{

    /**
     * RangedMedabotArm constructor.
     */
    public function __construct()
    {
        $this->setName('Sturdy Dragon Leg');
        $this->setDamageOutput(20);
    }
}