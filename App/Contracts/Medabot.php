<?php


namespace App\Contracts;


interface Medabot
{
    public function getColour() : string;
    public function getHead() : Part;
    public function getLeg (string $side) : Part;
    public function getArm (string $side) : Part;
    public function getMedal() : Medal;

    public function setColour(string $colour);
    public function setHead(Part $head);
    public function setLeg (string $side, Part $part) : void;
    public function setArm (string $side, Part $part) : void;
    public function setMedal(Medal $medal);
}