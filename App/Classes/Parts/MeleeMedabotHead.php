<?php

namespace App\Classes\Parts;

use App\Classes\Abstracts\Part;

class MeleeMedabotHead extends Part
{

    /**
     * RangedMedabotHead constructor.
     */
    public function __construct()
    {
        $this->setName('Beetle Head');
        $this->setDamageOutput(50);
    }
}