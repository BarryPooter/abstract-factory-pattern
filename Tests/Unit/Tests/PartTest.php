<?php

namespace Tests;

use App\Classes\Abstracts\Part;
use PHPUnit\Framework\TestCase;

class AbstractPartDouble extends Part
{
}

class PartTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new AbstractPartDouble();
    }

    public function testName () : void
    {
        $this->sut->setName('Test Part');
        $this->assertEquals('Test Part', $this->sut->getName());

        $this->sut->setName('Testing Part');
        $this->assertEquals('Testing Part', $this->sut->getName());
    }

    public function testDamageOutput () : void
    {
        $this->sut->setDamageOutput(40);
        $this->assertEquals(40, $this->sut->getDamageOutput());

        $this->sut->setDamageOutput(50);
        $this->assertEquals(50, $this->sut->getDamageOutput());
    }
}
