<?php


use App\Classes\BuildRangedMedabot;
use App\Classes\Parts\RangedMedabotHead;
use App\Classes\RangedMedabot;
use App\Contracts\Medabot;
use App\Contracts\Medal;
use App\Contracts\Part;

class BuildRangedMedabotTest extends \PHPUnit\Framework\TestCase
{
    public function testHasParts ()
    {
        $returnInstance = (new BuildRangedMedabot())->build();

        $this->assertInstanceOf(Medabot::class, $returnInstance);
        $this->assertInstanceOf(RangedMedabot::class, $returnInstance);

        // We need to test if the returned Medabot
        // has Parts and a Medal. We do this to
        // see if the Medabot has been made in
        // a Factory or not - it automatically
        // gets added in the according Factory.
        $this->assertInstanceOf(Medal::class, $returnInstance->getMedal());
        $this->assertInstanceOf(Part::class, $returnInstance->getHead());
        $this->assertInstanceOf(RangedMedabotHead::class, $returnInstance->getHead());
    }
}
