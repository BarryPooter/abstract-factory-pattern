<?php

namespace Tests;

use App\Classes\Abstracts\Medabot;
use App\Classes\MeleeMedabot;
use PHPUnit\Framework\TestCase;

class MeleeMedabotTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new MeleeMedabot();
    }

    public function testInstanceOf() : void
    {
        $this->assertInstanceOf(Medabot::class, $this->sut);
    }
}
