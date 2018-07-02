<?php

namespace Tests;

use App\Classes\Parts\RangedMedabotArm;
use App\Contracts\Part;
use PHPUnit\Framework\TestCase;

class RangedMedabotArmTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new RangedMedabotArm();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Part::class, $this->sut);
    }
}
