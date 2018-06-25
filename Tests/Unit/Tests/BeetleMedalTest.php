<?php

namespace Tests;

use App\Classes\Abstracts\MedabotMedal;
use App\Classes\Medals\BeetleMedal;
use PHPUnit\Framework\TestCase;

class BeetleMedalTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BeetleMedal();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(MedabotMedal::class, $this->sut);
    }
}
