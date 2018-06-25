<?php

namespace App\Classes\Abstracts;

abstract class Medabot
{
    private $colour;
    private $head;
    private $leftArm;
    private $rightArm;
    private $leftLeg;
    private $rightLeg;
    private $medal;

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @return mixed
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param mixed $head
     */
    public function setHead($head)
    {
        $this->head = $head;
    }

    /**
     * @return mixed
     */
    public function getLeftArm()
    {
        return $this->leftArm;
    }

    /**
     * @param mixed $leftArm
     */
    public function setLeftArm($leftArm)
    {
        $this->leftArm = $leftArm;
    }

    /**
     * @return mixed
     */
    public function getRightArm()
    {
        return $this->rightArm;
    }

    /**
     * @param mixed $rightArm
     */
    public function setRightArm($rightArm)
    {
        $this->rightArm = $rightArm;
    }

    /**
     * @return mixed
     */
    public function getLeftLeg()
    {
        return $this->leftLeg;
    }

    /**
     * @param mixed $leftLeg
     */
    public function setLeftLeg($leftLeg)
    {
        $this->leftLeg = $leftLeg;
    }

    /**
     * @return mixed
     */
    public function getRightLeg()
    {
        return $this->rightLeg;
    }

    /**
     * @param mixed $rightLeg
     */
    public function setRightLeg($rightLeg)
    {
        $this->rightLeg = $rightLeg;
    }

    /**
     * @return mixed
     */
    public function getMedal()
    {
        return $this->medal;
    }

    /**
     * @param mixed $medal
     */
    public function setMedal($medal)
    {
        $this->medal = $medal;
    }
}