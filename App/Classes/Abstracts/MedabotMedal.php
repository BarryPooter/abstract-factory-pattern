<?php

namespace App\Classes\Abstracts;

use App\Contracts\Medal;

abstract class MedabotMedal implements Medal
{
    private $name;
    private $special;

    /**
     * @return mixed
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSpecialAbility() : string
    {
        return $this->special;
    }

    /**
     * @param mixed $special
     */
    public function setSpecialAbility(string $special): void
    {
        $this->special = $special;
    }
}