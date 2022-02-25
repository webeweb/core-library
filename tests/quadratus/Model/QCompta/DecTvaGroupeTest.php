<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\DecTvaGroupe;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva groupe test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTvaGroupeTest extends AbstractTestCase {

    /**
     * Tests setAz0990b()
     *
     * @return void
     */
    public function testSetAz0990b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz0990b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz0990b());
    }

    /**
     * Tests setAz1010b()
     *
     * @return void
     */
    public function testSetAz1010b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1010b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1010b());
    }

    /**
     * Tests setAz1020b()
     *
     * @return void
     */
    public function testSetAz1020b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1020b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1020b());
    }

    /**
     * Tests setAz1030b()
     *
     * @return void
     */
    public function testSetAz1030b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1030b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1030b());
    }

    /**
     * Tests setAz1040b()
     *
     * @return void
     */
    public function testSetAz1040b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1040b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1040b());
    }

    /**
     * Tests setAz1050b()
     *
     * @return void
     */
    public function testSetAz1050b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1050b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1050b());
    }

    /**
     * Tests setAz1080b()
     *
     * @return void
     */
    public function testSetAz1080b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1080b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1080b());
    }

    /**
     * Tests setAz1081b()
     *
     * @return void
     */
    public function testSetAz1081b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1081b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1081b());
    }

    /**
     * Tests setAz1090b()
     *
     * @return void
     */
    public function testSetAz1090b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1090b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1090b());
    }

    /**
     * Tests setAz1100b()
     *
     * @return void
     */
    public function testSetAz1100b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1100b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1100b());
    }

    /**
     * Tests setAz1110b()
     *
     * @return void
     */
    public function testSetAz1110b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1110b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1110b());
    }

    /**
     * Tests setAz1120b()
     *
     * @return void
     */
    public function testSetAz1120b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz1120b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1120b());
    }

    /**
     * Tests setAz3240()
     *
     * @return void
     */
    public function testSetAz3240(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz3240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3240());
    }

    /**
     * Tests setAz3510()
     *
     * @return void
     */
    public function testSetAz3510(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz3510(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3510());
    }

    /**
     * Tests setAz3520()
     *
     * @return void
     */
    public function testSetAz3520(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz3520(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3520());
    }

    /**
     * Tests setAz38Code()
     *
     * @return void
     */
    public function testSetAz38Code(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz38Code("az38Code");
        $this->assertEquals("az38Code", $obj->getAz38Code());
    }

    /**
     * Tests setAz38Lib()
     *
     * @return void
     */
    public function testSetAz38Lib(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz38Lib("az38Lib");
        $this->assertEquals("az38Lib", $obj->getAz38Lib());
    }

    /**
     * Tests setAz38b()
     *
     * @return void
     */
    public function testSetAz38b(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz38b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz38b());
    }

    /**
     * Tests setAz4200()
     *
     * @return void
     */
    public function testSetAz4200(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4200(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4200());
    }

    /**
     * Tests setAz4201()
     *
     * @return void
     */
    public function testSetAz4201(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4201(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4201());
    }

    /**
     * Tests setAz4204()
     *
     * @return void
     */
    public function testSetAz4204(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4204(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4204());
    }

    /**
     * Tests setAz4206()
     *
     * @return void
     */
    public function testSetAz4206(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4206(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4206());
    }

    /**
     * Tests setAz4207()
     *
     * @return void
     */
    public function testSetAz4207(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4207(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4207());
    }

    /**
     * Tests setAz4213()
     *
     * @return void
     */
    public function testSetAz4213(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4213(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4213());
    }

    /**
     * Tests setAz4215()
     *
     * @return void
     */
    public function testSetAz4215(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4215(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4215());
    }

    /**
     * Tests setAz4220()
     *
     * @return void
     */
    public function testSetAz4220(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4220(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4220());
    }

    /**
     * Tests setAz4222()
     *
     * @return void
     */
    public function testSetAz4222(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4222(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4222());
    }

    /**
     * Tests setAz4223()
     *
     * @return void
     */
    public function testSetAz4223(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4223(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4223());
    }

    /**
     * Tests setAz4228Mtt()
     *
     * @return void
     */
    public function testSetAz4228Mtt(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4228Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4228Mtt());
    }

    /**
     * Tests setAz4230()
     *
     * @return void
     */
    public function testSetAz4230(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4230(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4230());
    }

    /**
     * Tests setAz4231()
     *
     * @return void
     */
    public function testSetAz4231(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4231(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4231());
    }

    /**
     * Tests setAz4232()
     *
     * @return void
     */
    public function testSetAz4232(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4232(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4232());
    }

    /**
     * Tests setAz4233()
     *
     * @return void
     */
    public function testSetAz4233(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4233(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4233());
    }

    /**
     * Tests setAz4234()
     *
     * @return void
     */
    public function testSetAz4234(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4234(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4234());
    }

    /**
     * Tests setAz4235()
     *
     * @return void
     */
    public function testSetAz4235(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4235(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4235());
    }

    /**
     * Tests setAz4236()
     *
     * @return void
     */
    public function testSetAz4236(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4236(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4236());
    }

    /**
     * Tests setAz4237()
     *
     * @return void
     */
    public function testSetAz4237(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4237(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4237());
    }

    /**
     * Tests setAz4238()
     *
     * @return void
     */
    public function testSetAz4238(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4238(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4238());
    }

    /**
     * Tests setAz4239()
     *
     * @return void
     */
    public function testSetAz4239(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4239(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4239());
    }

    /**
     * Tests setAz4240()
     *
     * @return void
     */
    public function testSetAz4240(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240());
    }

    /**
     * Tests setAz4241()
     *
     * @return void
     */
    public function testSetAz4241(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4241(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4241());
    }

    /**
     * Tests setAz4242()
     *
     * @return void
     */
    public function testSetAz4242(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4242(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4242());
    }

    /**
     * Tests setAz4243()
     *
     * @return void
     */
    public function testSetAz4243(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4243(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4243());
    }

    /**
     * Tests setAz4244()
     *
     * @return void
     */
    public function testSetAz4244(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4244(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4244());
    }

    /**
     * Tests setAz4245()
     *
     * @return void
     */
    public function testSetAz4245(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4245(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4245());
    }

    /**
     * Tests setAz4246()
     *
     * @return void
     */
    public function testSetAz4246(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4246(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4246());
    }

    /**
     * Tests setAz4247()
     *
     * @return void
     */
    public function testSetAz4247(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4247(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4247());
    }

    /**
     * Tests setAz4248()
     *
     * @return void
     */
    public function testSetAz4248(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4248(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4248());
    }

    /**
     * Tests setAz4249()
     *
     * @return void
     */
    public function testSetAz4249(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4249(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4249());
    }

    /**
     * Tests setAz4250()
     *
     * @return void
     */
    public function testSetAz4250(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4250(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4250());
    }

    /**
     * Tests setAz4251()
     *
     * @return void
     */
    public function testSetAz4251(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4251(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4251());
    }

    /**
     * Tests setAz4252()
     *
     * @return void
     */
    public function testSetAz4252(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4252(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252());
    }

    /**
     * Tests setAz4254()
     *
     * @return void
     */
    public function testSetAz4254(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4254(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4254());
    }

    /**
     * Tests setAz4255()
     *
     * @return void
     */
    public function testSetAz4255(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4255(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4255());
    }

    /**
     * Tests setAz4256()
     *
     * @return void
     */
    public function testSetAz4256(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4256(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4256());
    }

    /**
     * Tests setAz4257()
     *
     * @return void
     */
    public function testSetAz4257(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4257(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4257());
    }

    /**
     * Tests setAz4258()
     *
     * @return void
     */
    public function testSetAz4258(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4258(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4258());
    }

    /**
     * Tests setAz4259()
     *
     * @return void
     */
    public function testSetAz4259(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4259(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4259());
    }

    /**
     * Tests setAz4260()
     *
     * @return void
     */
    public function testSetAz4260(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4260());
    }

    /**
     * Tests setAz4261()
     *
     * @return void
     */
    public function testSetAz4261(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4261(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4261());
    }

    /**
     * Tests setAz4262()
     *
     * @return void
     */
    public function testSetAz4262(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4262(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4262());
    }

    /**
     * Tests setAz4263()
     *
     * @return void
     */
    public function testSetAz4263(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4263(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4263());
    }

    /**
     * Tests setAz4264()
     *
     * @return void
     */
    public function testSetAz4264(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4264(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4264());
    }

    /**
     * Tests setAz4265()
     *
     * @return void
     */
    public function testSetAz4265(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4265(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4265());
    }

    /**
     * Tests setAz4266()
     *
     * @return void
     */
    public function testSetAz4266(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4266(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4266());
    }

    /**
     * Tests setAz4267()
     *
     * @return void
     */
    public function testSetAz4267(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4267(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4267());
    }

    /**
     * Tests setAz4268()
     *
     * @return void
     */
    public function testSetAz4268(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4268(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268());
    }

    /**
     * Tests setAz4268Base()
     *
     * @return void
     */
    public function testSetAz4268Base(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4268Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268Base());
    }

    /**
     * Tests setAz4269()
     *
     * @return void
     */
    public function testSetAz4269(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4269(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269());
    }

    /**
     * Tests setAz4269Base()
     *
     * @return void
     */
    public function testSetAz4269Base(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4269Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269Base());
    }

    /**
     * Tests setAz4270()
     *
     * @return void
     */
    public function testSetAz4270(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4270(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270());
    }

    /**
     * Tests setAz4270Base()
     *
     * @return void
     */
    public function testSetAz4270Base(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4270Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base());
    }

    /**
     * Tests setAz4271()
     *
     * @return void
     */
    public function testSetAz4271(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4271(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271());
    }

    /**
     * Tests setAz4271Base()
     *
     * @return void
     */
    public function testSetAz4271Base(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4271Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271Base());
    }

    /**
     * Tests setAz4272()
     *
     * @return void
     */
    public function testSetAz4272(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4272(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4272());
    }

    /**
     * Tests setAz4274()
     *
     * @return void
     */
    public function testSetAz4274(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4274(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4274());
    }

    /**
     * Tests setAz4276()
     *
     * @return void
     */
    public function testSetAz4276(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4276(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276());
    }

    /**
     * Tests setAz4276Base()
     *
     * @return void
     */
    public function testSetAz4276Base(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4276Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276Base());
    }

    /**
     * Tests setAz4277()
     *
     * @return void
     */
    public function testSetAz4277(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4277(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277());
    }

    /**
     * Tests setAz4277Base()
     *
     * @return void
     */
    public function testSetAz4277Base(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4277Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277Base());
    }

    /**
     * Tests setAz4278()
     *
     * @return void
     */
    public function testSetAz4278(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4278(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4278());
    }

    /**
     * Tests setAz4279()
     *
     * @return void
     */
    public function testSetAz4279(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4279(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4279());
    }

    /**
     * Tests setAz4280()
     *
     * @return void
     */
    public function testSetAz4280(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4280(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4280());
    }

    /**
     * Tests setAz4281()
     *
     * @return void
     */
    public function testSetAz4281(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4281(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4281());
    }

    /**
     * Tests setAz4282()
     *
     * @return void
     */
    public function testSetAz4282(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4282(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282());
    }

    /**
     * Tests setAz4283()
     *
     * @return void
     */
    public function testSetAz4283(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4283(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4283());
    }

    /**
     * Tests setAz4284()
     *
     * @return void
     */
    public function testSetAz4284(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4284(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4284());
    }

    /**
     * Tests setAz4285()
     *
     * @return void
     */
    public function testSetAz4285(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4285(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4285());
    }

    /**
     * Tests setAz4288()
     *
     * @return void
     */
    public function testSetAz4288(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4288(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4288());
    }

    /**
     * Tests setAz4289()
     *
     * @return void
     */
    public function testSetAz4289(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4289(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289());
    }

    /**
     * Tests setAz4290()
     *
     * @return void
     */
    public function testSetAz4290(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz4290(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4290());
    }

    /**
     * Tests setAz59Mtt()
     *
     * @return void
     */
    public function testSetAz59Mtt(): void {

        $obj = new DecTvaGroupe();

        $obj->setAz59Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz59Mtt());
    }

    /**
     * Tests setAzEsMtt()
     *
     * @return void
     */
    public function testSetAzEsMtt(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzEsMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEsMtt());
    }

    /**
     * Tests setAzEuMtt()
     *
     * @return void
     */
    public function testSetAzEuMtt(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzEuMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEuMtt());
    }

    /**
     * Tests setAzEzCode()
     *
     * @return void
     */
    public function testSetAzEzCode(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzEzCode("azEzCode");
        $this->assertEquals("azEzCode", $obj->getAzEzCode());
    }

    /**
     * Tests setAzEzLib()
     *
     * @return void
     */
    public function testSetAzEzLib(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzEzLib("azEzLib");
        $this->assertEquals("azEzLib", $obj->getAzEzLib());
    }

    /**
     * Tests setAzEzMtt()
     *
     * @return void
     */
    public function testSetAzEzMtt(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzEzMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEzMtt());
    }

    /**
     * Tests setAzGaCode()
     *
     * @return void
     */
    public function testSetAzGaCode(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzGaCode("azGaCode");
        $this->assertEquals("azGaCode", $obj->getAzGaCode());
    }

    /**
     * Tests setAzGaLib()
     *
     * @return void
     */
    public function testSetAzGaLib(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzGaLib("azGaLib");
        $this->assertEquals("azGaLib", $obj->getAzGaLib());
    }

    /**
     * Tests setAzGaMtt()
     *
     * @return void
     */
    public function testSetAzGaMtt(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzGaMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGaMtt());
    }

    /**
     * Tests setAzGcMtt()
     *
     * @return void
     */
    public function testSetAzGcMtt(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzGcMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGcMtt());
    }

    /**
     * Tests setAzHi()
     *
     * @return void
     */
    public function testSetAzHi(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzHi(10.092018);
        $this->assertEquals(10.092018, $obj->getAzHi());
    }

    /**
     * Tests setAzJb()
     *
     * @return void
     */
    public function testSetAzJb(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzJb(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJb());
    }

    /**
     * Tests setAzJc()
     *
     * @return void
     */
    public function testSetAzJc(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzJc(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJc());
    }

    /**
     * Tests setAzTotalB()
     *
     * @return void
     */
    public function testSetAzTotalB(): void {

        $obj = new DecTvaGroupe();

        $obj->setAzTotalB(10.092018);
        $this->assertEquals(10.092018, $obj->getAzTotalB());
    }

    /**
     * Tests setCorres1()
     *
     * @return void
     */
    public function testSetCorres1(): void {

        $obj = new DecTvaGroupe();

        $obj->setCorres1("corres1");
        $this->assertEquals("corres1", $obj->getCorres1());
    }

    /**
     * Tests setCorres2()
     *
     * @return void
     */
    public function testSetCorres2(): void {

        $obj = new DecTvaGroupe();

        $obj->setCorres2("corres2");
        $this->assertEquals("corres2", $obj->getCorres2());
    }

    /**
     * Tests setCorres3()
     *
     * @return void
     */
    public function testSetCorres3(): void {

        $obj = new DecTvaGroupe();

        $obj->setCorres3("corres3");
        $this->assertEquals("corres3", $obj->getCorres3());
    }

    /**
     * Tests setCorres4()
     *
     * @return void
     */
    public function testSetCorres4(): void {

        $obj = new DecTvaGroupe();

        $obj->setCorres4("corres4");
        $this->assertEquals("corres4", $obj->getCorres4());
    }

    /**
     * Tests setCorres5()
     *
     * @return void
     */
    public function testSetCorres5(): void {

        $obj = new DecTvaGroupe();

        $obj->setCorres5("corres5");
        $this->assertEquals("corres5", $obj->getCorres5());
    }

    /**
     * Tests setDateDec()
     *
     * @return void
     */
    public function testSetDateDec(): void {

        $obj = new DecTvaGroupe();

        $obj->setDateDec("dateDec");
        $this->assertEquals("dateDec", $obj->getDateDec());
    }

    /**
     * Tests setDebutExo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutExo(): void {

        // Set a Date/time mock.
        $debutExo = new DateTime("2018-09-10");

        $obj = new DecTvaGroupe();

        $obj->setDebutExo($debutExo);
        $this->assertSame($debutExo, $obj->getDebutExo());
    }

    /**
     * Tests setFinExo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinExo(): void {

        // Set a Date/time mock.
        $finExo = new DateTime("2018-09-10");

        $obj = new DecTvaGroupe();

        $obj->setFinExo($finExo);
        $this->assertSame($finExo, $obj->getFinExo());
    }

    /**
     * Tests setLibDoss()
     *
     * @return void
     */
    public function testSetLibDoss(): void {

        $obj = new DecTvaGroupe();

        $obj->setLibDoss("libDoss");
        $this->assertEquals("libDoss", $obj->getLibDoss());
    }

    /**
     * Tests setMentionExpresse()
     *
     * @return void
     */
    public function testSetMentionExpresse(): void {

        $obj = new DecTvaGroupe();

        $obj->setMentionExpresse(true);
        $this->assertEquals(true, $obj->getMentionExpresse());
    }

    /**
     * Tests setNoDoss()
     *
     * @return void
     */
    public function testSetNoDoss(): void {

        $obj = new DecTvaGroupe();

        $obj->setNoDoss("noDoss");
        $this->assertEquals("noDoss", $obj->getNoDoss());
    }

    /**
     * Tests setNoLotEcritures()
     *
     * @return void
     */
    public function testSetNoLotEcritures(): void {

        $obj = new DecTvaGroupe();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new DecTvaGroupe();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests setPaiementImputation()
     *
     * @return void
     */
    public function testSetPaiementImputation(): void {

        $obj = new DecTvaGroupe();

        $obj->setPaiementImputation(true);
        $this->assertEquals(true, $obj->getPaiementImputation());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTvaGroupe();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setSelAdresseDest()
     *
     * @return void
     */
    public function testSetSelAdresseDest(): void {

        $obj = new DecTvaGroupe();

        $obj->setSelAdresseDest("selAdresseDest");
        $this->assertEquals("selAdresseDest", $obj->getSelAdresseDest());
    }

    /**
     * Tests setTotal()
     *
     * @return void
     */
    public function testSetTotal(): void {

        $obj = new DecTvaGroupe();

        $obj->setTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotal());
    }

    /**
     * Tests setTypeDec()
     *
     * @return void
     */
    public function testSetTypeDec(): void {

        $obj = new DecTvaGroupe();

        $obj->setTypeDec("typeDec");
        $this->assertEquals("typeDec", $obj->getTypeDec());
    }

    /**
     * Tests setVille()
     *
     * @return void
     */
    public function testSetVille(): void {

        $obj = new DecTvaGroupe();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Tests setZ0100b()
     *
     * @return void
     */
    public function testSetZ0100b(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ0100b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0100b());
    }

    /**
     * Tests setZ0121b()
     *
     * @return void
     */
    public function testSetZ0121b(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ0121b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0121b());
    }

    /**
     * Tests setZ0600()
     *
     * @return void
     */
    public function testSetZ0600(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ0600(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0600());
    }

    /**
     * Tests setZ0705()
     *
     * @return void
     */
    public function testSetZ0705(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ0705(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0705());
    }

    /**
     * Tests setZ0900b()
     *
     * @return void
     */
    public function testSetZ0900b(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ0900b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0900b());
    }

    /**
     * Tests setZ0920b()
     *
     * @return void
     */
    public function testSetZ0920b(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ0920b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0920b());
    }

    /**
     * Tests setZ12Code()
     *
     * @return void
     */
    public function testSetZ12Code(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ12Code("z12Code");
        $this->assertEquals("z12Code", $obj->getZ12Code());
    }

    /**
     * Tests setZ12Lib()
     *
     * @return void
     */
    public function testSetZ12Lib(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ12Lib("z12Lib");
        $this->assertEquals("z12Lib", $obj->getZ12Lib());
    }

    /**
     * Tests setZ12Taxe()
     *
     * @return void
     */
    public function testSetZ12Taxe(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ12Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ12Taxe());
    }

    /**
     * Tests setZ14()
     *
     * @return void
     */
    public function testSetZ14(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ14(10.092018);
        $this->assertEquals(10.092018, $obj->getZ14());
    }

    /**
     * Tests setZ196b()
     *
     * @return void
     */
    public function testSetZ196b(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ196b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ196b());
    }

    /**
     * Tests setZ21()
     *
     * @return void
     */
    public function testSetZ21(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ21(10.092018);
        $this->assertEquals(10.092018, $obj->getZ21());
    }

    /**
     * Tests setZ25()
     *
     * @return void
     */
    public function testSetZ25(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ25(10.092018);
        $this->assertEquals(10.092018, $obj->getZ25());
    }

    /**
     * Tests setZ4227()
     *
     * @return void
     */
    public function testSetZ4227(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ4227(10.092018);
        $this->assertEquals(10.092018, $obj->getZ4227());
    }

    /**
     * Tests setZ8001()
     *
     * @return void
     */
    public function testSetZ8001(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ8001(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8001());
    }

    /**
     * Tests setZ8002()
     *
     * @return void
     */
    public function testSetZ8002(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ8002(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8002());
    }

    /**
     * Tests setZ8003()
     *
     * @return void
     */
    public function testSetZ8003(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ8003(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003());
    }

    /**
     * Tests setZ8005()
     *
     * @return void
     */
    public function testSetZ8005(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ8005(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8005());
    }

    /**
     * Tests setZ8006()
     *
     * @return void
     */
    public function testSetZ8006(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ8006(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8006());
    }

    /**
     * Tests setZ9979()
     *
     * @return void
     */
    public function testSetZ9979(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ9979(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9979());
    }

    /**
     * Tests setZ9989()
     *
     * @return void
     */
    public function testSetZ9989(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ9989(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9989());
    }

    /**
     * Tests setZ9991()
     *
     * @return void
     */
    public function testSetZ9991(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ9991(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9991());
    }

    /**
     * Tests setZ9999()
     *
     * @return void
     */
    public function testSetZ9999(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ9999(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9999());
    }

    /**
     * Tests setZ9BTaxe()
     *
     * @return void
     */
    public function testSetZ9BTaxe(): void {

        $obj = new DecTvaGroupe();

        $obj->setZ9BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9BTaxe());
    }

    /**
     * Tests setiLock()
     *
     * @return void
     */
    public function testSetiLock(): void {

        $obj = new DecTvaGroupe();

        $obj->setiLock(10);
        $this->assertEquals(10, $obj->getiLock());
    }

    /**
     * Tests setz0151b()
     *
     * @return void
     */
    public function testSetz0151b(): void {

        $obj = new DecTvaGroupe();

        $obj->setz0151b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151b());
    }

    /**
     * Tests setz0207b()
     *
     * @return void
     */
    public function testSetz0207b(): void {

        $obj = new DecTvaGroupe();

        $obj->setz0207b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207b());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DecTvaGroupe();

        $this->assertNull($obj->getAz0990b());
        $this->assertNull($obj->getAz1010b());
        $this->assertNull($obj->getAz1020b());
        $this->assertNull($obj->getAz1030b());
        $this->assertNull($obj->getAz1040b());
        $this->assertNull($obj->getAz1050b());
        $this->assertNull($obj->getAz1080b());
        $this->assertNull($obj->getAz1090b());
        $this->assertNull($obj->getAz1100b());
        $this->assertNull($obj->getAz1110b());
        $this->assertNull($obj->getAz1120b());
        $this->assertNull($obj->getAz3240());
        $this->assertNull($obj->getAz3510());
        $this->assertNull($obj->getAz3520());
        $this->assertNull($obj->getAz38Code());
        $this->assertNull($obj->getAz38Lib());
        $this->assertNull($obj->getAz38b());
        $this->assertNull($obj->getAz4200());
        $this->assertNull($obj->getAz4201());
        $this->assertNull($obj->getAz4204());
        $this->assertNull($obj->getAz4206());
        $this->assertNull($obj->getAz4207());
        $this->assertNull($obj->getAz4213());
        $this->assertNull($obj->getAz4215());
        $this->assertNull($obj->getAz4220());
        $this->assertNull($obj->getAz4222());
        $this->assertNull($obj->getAz4223());
        $this->assertNull($obj->getAz4228Mtt());
        $this->assertNull($obj->getAz4230());
        $this->assertNull($obj->getAz4231());
        $this->assertNull($obj->getAz4232());
        $this->assertNull($obj->getAz4233());
        $this->assertNull($obj->getAz4234());
        $this->assertNull($obj->getAz4235());
        $this->assertNull($obj->getAz59Mtt());
        $this->assertNull($obj->getAzEsMtt());
        $this->assertNull($obj->getAzEuMtt());
        $this->assertNull($obj->getAzEzCode());
        $this->assertNull($obj->getAzEzLib());
        $this->assertNull($obj->getAzEzMtt());
        $this->assertNull($obj->getAzGaCode());
        $this->assertNull($obj->getAzGaLib());
        $this->assertNull($obj->getAzGaMtt());
        $this->assertNull($obj->getAzGcMtt());
        $this->assertNull($obj->getAzHi());
        $this->assertNull($obj->getAzJb());
        $this->assertNull($obj->getAzJc());
        $this->assertNull($obj->getAzTotalB());
        $this->assertNull($obj->getAz1081b());
        $this->assertNull($obj->getAz4236());
        $this->assertNull($obj->getAz4237());
        $this->assertNull($obj->getAz4238());
        $this->assertNull($obj->getAz4239());
        $this->assertNull($obj->getAz4240());
        $this->assertNull($obj->getAz4241());
        $this->assertNull($obj->getAz4242());
        $this->assertNull($obj->getAz4243());
        $this->assertNull($obj->getAz4244());
        $this->assertNull($obj->getAz4245());
        $this->assertNull($obj->getAz4246());
        $this->assertNull($obj->getAz4247());
        $this->assertNull($obj->getAz4248());
        $this->assertNull($obj->getAz4249());
        $this->assertNull($obj->getAz4250());
        $this->assertNull($obj->getAz4251());
        $this->assertNull($obj->getAz4252());
        $this->assertNull($obj->getAz4254());
        $this->assertNull($obj->getAz4255());
        $this->assertNull($obj->getAz4256());
        $this->assertNull($obj->getAz4257());
        $this->assertNull($obj->getAz4258());
        $this->assertNull($obj->getAz4259());
        $this->assertNull($obj->getAz4260());
        $this->assertNull($obj->getAz4261());
        $this->assertNull($obj->getAz4262());
        $this->assertNull($obj->getAz4263());
        $this->assertNull($obj->getAz4264());
        $this->assertNull($obj->getAz4265());
        $this->assertNull($obj->getAz4266());
        $this->assertNull($obj->getAz4267());
        $this->assertNull($obj->getAz4268());
        $this->assertNull($obj->getAz4268Base());
        $this->assertNull($obj->getAz4269());
        $this->assertNull($obj->getAz4269Base());
        $this->assertNull($obj->getAz4270());
        $this->assertNull($obj->getAz4270Base());
        $this->assertNull($obj->getAz4271());
        $this->assertNull($obj->getAz4271Base());
        $this->assertNull($obj->getAz4272());
        $this->assertNull($obj->getAz4274());
        $this->assertNull($obj->getAz4276());
        $this->assertNull($obj->getAz4276Base());
        $this->assertNull($obj->getAz4277());
        $this->assertNull($obj->getAz4277Base());
        $this->assertNull($obj->getAz4278());
        $this->assertNull($obj->getAz4279());
        $this->assertNull($obj->getAz4280());
        $this->assertNull($obj->getAz4281());
        $this->assertNull($obj->getAz4282());
        $this->assertNull($obj->getAz4283());
        $this->assertNull($obj->getAz4284());
        $this->assertNull($obj->getAz4285());
        $this->assertNull($obj->getAz4288());
        $this->assertNull($obj->getAz4289());
        $this->assertNull($obj->getAz4290());
        $this->assertNull($obj->getCorres1());
        $this->assertNull($obj->getCorres2());
        $this->assertNull($obj->getCorres3());
        $this->assertNull($obj->getCorres4());
        $this->assertNull($obj->getCorres5());
        $this->assertNull($obj->getDateDec());
        $this->assertNull($obj->getDebutExo());
        $this->assertNull($obj->getFinExo());
        $this->assertNull($obj->getLibDoss());
        $this->assertNull($obj->getMentionExpresse());
        $this->assertNull($obj->getNoDoss());
        $this->assertNull($obj->getNoLotEcritures());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getPaiementImputation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSelAdresseDest());
        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTypeDec());
        $this->assertNull($obj->getVille());
        $this->assertNull($obj->getZ0100b());
        $this->assertNull($obj->getZ0121b());
        $this->assertNull($obj->getZ0705());
        $this->assertNull($obj->getZ0920b());
        $this->assertNull($obj->getZ12Code());
        $this->assertNull($obj->getZ12Lib());
        $this->assertNull($obj->getZ12Taxe());
        $this->assertNull($obj->getZ14());
        $this->assertNull($obj->getZ196b());
        $this->assertNull($obj->getZ21());
        $this->assertNull($obj->getZ25());
        $this->assertNull($obj->getZ4227());
        $this->assertNull($obj->getZ8001());
        $this->assertNull($obj->getZ8002());
        $this->assertNull($obj->getZ8003());
        $this->assertNull($obj->getZ8005());
        $this->assertNull($obj->getZ8006());
        $this->assertNull($obj->getZ9979());
        $this->assertNull($obj->getZ9989());
        $this->assertNull($obj->getZ9991());
        $this->assertNull($obj->getZ9999());
        $this->assertNull($obj->getZ9BTaxe());
        $this->assertNull($obj->getiLock());
        $this->assertNull($obj->getz0151b());
        $this->assertNull($obj->getz0207b());
        $this->assertNull($obj->getZ0600());
        $this->assertNull($obj->getZ0900b());
    }
}
