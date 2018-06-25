<?php

namespace Tests;

use App\Classes\Abstracts\Medabot;
use App\Classes\RangedMedabot;
use PHPUnit\Framework\TestCase;

class RangedMedabotTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new RangedMedabot();
    }

    public function testInstanceOf() : void
    {
        $this->assertInstanceOf(Medabot::class, $this->sut);
    }
}
