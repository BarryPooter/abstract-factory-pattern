<?php

namespace App\Classes\Parts;

use App\Classes\Abstracts\Part;

class RangedMedabotArm extends Part
{

    /**
     * RangedMedabotArm constructor.
     */
    public function __construct()
    {
        $this->setName('Dragon Gun');
        $this->setDamageOutput(30);
    }
}