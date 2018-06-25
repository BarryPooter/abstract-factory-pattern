<?php

namespace Tests;

use App\Classes\Abstracts\BuildMedabot;
use PHPUnit\Framework\TestCase;

class BuildMedabotDouble extends BuildMedabot
{

}

class BuildMedabotTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BuildMedabotDouble;
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(BuildMedabot::class, $this->sut);
    }
}
