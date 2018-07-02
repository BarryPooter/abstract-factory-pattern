<?php

namespace App\Classes\Parts;

use App\Classes\Abstracts\Part;

class RangedMedabotHead extends Part
{

    /**
     * RangedMedabotHead constructor.
     */
    public function __construct()
    {
        $this->setName('Dragon Head');
        $this->setDamageOutput(40);
    }
}