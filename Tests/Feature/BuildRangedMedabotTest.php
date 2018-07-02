<?php


use App\Classes\BuildRangedMedabot;
use App\Classes\Parts\RangedMedabotArm;
use App\Classes\Parts\RangedMedabotHead;
use App\Classes\Parts\RangedMedabotLeg;
use App\Classes\RangedMedabot;
use App\Contracts\Medabot;
use App\Contracts\Medal;
use App\Contracts\Part;

class BuildRangedMedabotTest extends \PHPUnit\Framework\TestCase
{
    protected $medabot;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->medabot = (new BuildRangedMedabot())->build();
    }

    public function testHasParts ()
    {
        $this->assertInstanceOf(Medabot::class, $this->medabot);
        $this->assertInstanceOf(RangedMedabot::class, $this->medabot);

        // We need to test if the returned Medabot
        // has Parts and a Medal. We do this to
        // see if the Medabot has been made in
        // a Factory or not - it automatically
        // gets added in the according Factory.
        $this->assertInstanceOf(Medal::class, $this->medabot->getMedal());

        $this->assertInstanceOf(RangedMedabotHead::class, $this->medabot->getHead());
        $this->assertInstanceOf(RangedMedabotArm::class, $this->medabot->getArm('left'));
        $this->assertInstanceOf(RangedMedabotArm::class, $this->medabot->getArm('right'));
        $this->assertInstanceOf(RangedMedabotLeg::class, $this->medabot->getLeg('left'));
        $this->assertInstanceOf(RangedMedabotLeg::class, $this->medabot->getLeg('right'));
    }

    public function testHasDamageSetByFactory () : void
    {
        // See if we have a Head with damage.
        $head = $this->medabot->getHead();
        $this->assertNotEquals(0, $head->getDamageOutput());

        // See if we have arms with damage.
        $leftArm = $this->medabot->getArm('left');
        $rightArm = $this->medabot->getArm('right');
        $this->assertNotEquals(0, $leftArm->getDamageOutput());
        $this->assertNotEquals(0, $rightArm->getDamageOutput());

        // See if we have legs with damage.
        $leftLeg = $this->medabot->getLeg('left');
        $rightLeg = $this->medabot->getLeg('right');
        $this->assertNotEquals(0, $leftLeg->getDamageOutput());
        $this->assertNotEquals(0, $rightLeg->getDamageOutput());
    }
}
