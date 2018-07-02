<?php

namespace App\Classes\Parts;

use App\Classes\Abstracts\Part;

class MeleeMedabotLeg extends Part
{

    /**
     * RangedMedabotHead constructor.
     */
    public function __construct()
    {
        $this->setName('Small Beetle Leg');
        $this->setDamageOutput(5);
    }
}