<?php

namespace Tests;

use App\Classes\Abstracts\BuildMedabot;
use App\Classes\BuildMeleeMedabot;
use App\Classes\MeleeMedabot;
use PHPUnit\Framework\TestCase;

class BuildMeleeMedabotTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BuildMeleeMedabot();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(BuildMedabot::class, $this->sut);
    }

    public function testBuildMethod () : void
    {
        $this->assertInstanceOf(MeleeMedabot::class, $this->sut->build());
    }
}
