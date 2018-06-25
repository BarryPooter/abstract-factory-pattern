<?php

namespace Tests;

use App\Classes\Abstracts\MedabotMedal;
use App\Contracts\Medal;
use PHPUnit\Framework\TestCase;

class MedabotMedalDouble extends MedabotMedal
{}

class MedabotMedalTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new MedabotMedalDouble;
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Medal::class, $this->sut);
    }

    public function testSetSpecialAbility() : void
    {
        $this->sut->setSpecialAbility("Huge Explosion");
        $this->assertEquals("Huge Explosion", $this->sut->getSpecialAbility());

        // See if the setter & getter are dynamic.
        $this->sut->setSpecialAbility("Magic Shield");
        $this->assertEquals("Magic Shield", $this->sut->getSpecialAbility());
    }

    public function testSetName() : void
    {
    }
}
