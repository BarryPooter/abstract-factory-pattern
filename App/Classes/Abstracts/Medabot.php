<?php

namespace App\Classes\Abstracts;

use App\Contracts\Medal;
use App\Contracts\Part;

abstract class Medabot
{
    private $colour;
    private $head;
    private $arms;
    private $legs;
    private $medal;

    public function __construct()
    {
        $this->arms = (array) [
            'left'  => null,
            'right' => null
        ];

        $this->legs = (array) [
            'left'  => null,
            'right' => null
        ];
    }

    /**
     * @return mixed
     */
    public function getColour() : string
    {
        return $this->colour;
    }

    /**
     * @param mixed $colour
     */
    public function setColour(string $colour)
    {
        $this->colour = $colour;
    }

    /**
     * @return mixed
     */
    public function getHead() :? Part
    {
        return $this->head;
    }

    /**
     * @param mixed $head
     */
    public function setHead(Part $head)
    {
        $this->head = $head;
    }

    /**
     * Get an arm - need to specify which [left/right].
     * @param string $side
     * @return Part
     * @throws \Exception
     */
    public function getLeg (string $side) : Part
    {
        return $this->legs[$side];
    }

    /**
     * Set a specfic Leg Part.
     * @param string $side
     * @param Part $part
     */
    public function setLeg (string $side, Part $part) : void
    {
        $this->legs[$side] = $part;
    }

    /**
     * Get an arm - need to specify which [left/right].
     * @param string $side
     * @return Part
     * @throws \Exception
     */
    public function getArm (string $side) : Part
    {
        return $this->arms[$side];
    }

    /**
     * Set a specfic Leg Part.
     * @param string $side
     * @param Part $part
     */
    public function setArm (string $side, Part $part) : void
    {
        $this->arms[$side] = $part;
    }

    /**
     * @return mixed
     */
    public function getMedal() : Medal
    {
        return $this->medal;
    }

    /**
     * @param mixed $medal
     */
    public function setMedal(Medal $medal)
    {
        $this->medal = $medal;
    }
}