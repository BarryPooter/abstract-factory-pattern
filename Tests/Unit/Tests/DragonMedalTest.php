<?php

namespace Tests;

use App\Classes\Abstracts\MedabotMedal;
use App\Classes\Medals\DragonMedal;
use PHPUnit\Framework\TestCase;

class DragonMedalTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new DragonMedal();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(MedabotMedal::class, $this->sut);
    }
}
