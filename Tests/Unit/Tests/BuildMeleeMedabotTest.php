<?php

namespace Tests;

use App\Classes\Abstracts\BuildMedabot;
use App\Classes\BuildMeleeMedabot;
use App\Classes\MeleeMedabot;
use App\Contracts\Medabot;
use App\Contracts\Medal;
use App\Contracts\Part;
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
        $returnInstance = $this->sut->build();

        $this->assertInstanceOf(Medabot::class, $returnInstance);
        $this->assertInstanceOf(MeleeMedabot::class, $returnInstance);

        // We need to test if the returned Medabot
        // has Parts and a Medal. We do this to
        // see if the Medabot has been made in
        // a Factory or not - it automatically
        // gets added in the according Factory.
        $this->assertInstanceOf(Medal::class, $returnInstance->getMedal());
    }
}
