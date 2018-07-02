<?php

namespace Tests;

use App\Classes\Abstracts\BuildMedabot;
use App\Classes\BuildRangedMedabot;
use App\Classes\RangedMedabot;
use App\Contracts\Medabot;
use PHPUnit\Framework\TestCase;

class BuildRangedMedabotTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BuildRangedMedabot();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(BuildMedabot::class, $this->sut);
    }

    public function testBuildMethod () : void
    {
        $returnInstance = $this->sut->build();

        $this->assertInstanceOf(Medabot::class, $returnInstance);
        $this->assertInstanceOf(RangedMedabot::class, $returnInstance);
    }
}
