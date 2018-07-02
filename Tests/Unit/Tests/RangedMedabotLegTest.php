<?php

namespace Tests;

use App\Classes\Parts\RangedMedabotLeg;
use App\Contracts\Part;
use PHPUnit\Framework\TestCase;

class RangedMedabotLegTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new RangedMedabotLeg();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Part::class, $this->sut);
    }
}
