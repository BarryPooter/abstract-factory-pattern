<?php

namespace Tests;

use App\Classes\Parts\RangedMedabotHead;
use App\Contracts\Part;
use PHPUnit\Framework\TestCase;

class RangedMedabotHeadTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new RangedMedabotHead();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Part::class, $this->sut);
    }
}
