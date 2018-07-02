<?php

namespace Tests;

use App\Classes\Abstracts\Medabot;
use App\Contracts\Medal;
use App\Contracts\Part;
use PHPUnit\Framework\TestCase;

class MedabotDouble extends Medabot
{}

class PartDouble implements Part
{}

class MedalDouble implements Medal
{
    public function getName(): string
    {}

    public function getSpecialAbility(): string
    {}

    public function setName(string $name): void
    {}

    public function setSpecialAbility(string $special): void
    {}
}

class MedabotTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new MedabotDouble();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Medabot::class, $this->sut);
    }

    public function testGetHead () : void
    {
        $this->assertNull($this->sut->getHead());

        // Test if the function returns a Part instance.
        $this->sut->setHead(new PartDouble());
        $this->assertInstanceOf(Part::class, $this->sut->getHead());
    }

    public function testGetMedal () : void
    {
        $this->sut->setMedal(new MedalDouble);
        $this->assertInstanceOf(Medal::class, $this->sut->getMedal());
    }

    public function testGetleg () : void
    {
        $this->sut->setLeg('left', new PartDouble());
        $this->sut->setLeg('right', new PartDouble());
        $this->assertInstanceOf(Part::class, $this->sut->getLeg('left'));
        $this->assertInstanceOf(Part::class, $this->sut->getLeg('right'));
    }

    public function testGetArm () : void
    {
        $this->sut->setArm('left', new PartDouble());
        $this->sut->setArm('right', new PartDouble());
        $this->assertInstanceOf(Part::class, $this->sut->getArm('left'));
        $this->assertInstanceOf(Part::class, $this->sut->getArm('right'));
    }

    public function testGetColour () : void
    {
        // Test if the method works.
        $this->sut->setColour('red');
        $this->assertEquals('red', $this->sut->getColour());

        // Test if it's dynamic.
        $this->sut->setColour('blue');
        $this->assertEquals('blue', $this->sut->getColour());
    }
}
