<?php

namespace Tests;

use App\Contracts\MedabotFactoryInterface;
use App\Factories\RangedMedabotFactory;
use PHPUnit\Framework\TestCase;

class RangedMedabotFactoryTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new RangedMedabotFactory();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(MedabotFactoryInterface::class, $this->sut);
    }
}
