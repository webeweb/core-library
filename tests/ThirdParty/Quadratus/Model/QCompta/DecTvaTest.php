<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTva;

/**
 * Dec tva test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaTest extends AbstractTestCase {

    /**
     * Tests the setACorres1() method.
     *
     * @return void
     */
    public function testSetACorres1(): void {

        $obj = new DecTva();

        $obj->setACorres1("aCorres1");
        $this->assertEquals("aCorres1", $obj->getACorres1());
    }

    /**
     * Tests the setACorres2() method.
     *
     * @return void
     */
    public function testSetACorres2(): void {

        $obj = new DecTva();

        $obj->setACorres2("aCorres2");
        $this->assertEquals("aCorres2", $obj->getACorres2());
    }

    /**
     * Tests the setACorres3() method.
     *
     * @return void
     */
    public function testSetACorres3(): void {

        $obj = new DecTva();

        $obj->setACorres3("aCorres3");
        $this->assertEquals("aCorres3", $obj->getACorres3());
    }

    /**
     * Tests the setACorres4() method.
     *
     * @return void
     */
    public function testSetACorres4(): void {

        $obj = new DecTva();

        $obj->setACorres4("aCorres4");
        $this->assertEquals("aCorres4", $obj->getACorres4());
    }

    /**
     * Tests the setACorres5() method.
     *
     * @return void
     */
    public function testSetACorres5(): void {

        $obj = new DecTva();

        $obj->setACorres5("aCorres5");
        $this->assertEquals("aCorres5", $obj->getACorres5());
    }

    /**
     * Tests the setACorres6() method.
     *
     * @return void
     */
    public function testSetACorres6(): void {

        $obj = new DecTva();

        $obj->setACorres6("aCorres6");
        $this->assertEquals("aCorres6", $obj->getACorres6());
    }

    /**
     * Tests the setACorres7() method.
     *
     * @return void
     */
    public function testSetACorres7(): void {

        $obj = new DecTva();

        $obj->setACorres7("aCorres7");
        $this->assertEquals("aCorres7", $obj->getACorres7());
    }

    /**
     * Tests the setACorres8() method.
     *
     * @return void
     */
    public function testSetACorres8(): void {

        $obj = new DecTva();

        $obj->setACorres8("aCorres8");
        $this->assertEquals("aCorres8", $obj->getACorres8());
    }

    /**
     * Tests the setAz0990() method.
     *
     * @return void
     */
    public function testSetAz0990(): void {

        $obj = new DecTva();

        $obj->setAz0990(10.092018);
        $this->assertEquals(10.092018, $obj->getAz0990());
    }

    /**
     * Tests the setAz0990b() method.
     *
     * @return void
     */
    public function testSetAz0990b(): void {

        $obj = new DecTva();

        $obj->setAz0990b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz0990b());
    }

    /**
     * Tests the setAz1010() method.
     *
     * @return void
     */
    public function testSetAz1010(): void {

        $obj = new DecTva();

        $obj->setAz1010(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1010());
    }

    /**
     * Tests the setAz1010b() method.
     *
     * @return void
     */
    public function testSetAz1010b(): void {

        $obj = new DecTva();

        $obj->setAz1010b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1010b());
    }

    /**
     * Tests the setAz1020() method.
     *
     * @return void
     */
    public function testSetAz1020(): void {

        $obj = new DecTva();

        $obj->setAz1020(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1020());
    }

    /**
     * Tests the setAz1020b() method.
     *
     * @return void
     */
    public function testSetAz1020b(): void {

        $obj = new DecTva();

        $obj->setAz1020b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1020b());
    }

    /**
     * Tests the setAz1030() method.
     *
     * @return void
     */
    public function testSetAz1030(): void {

        $obj = new DecTva();

        $obj->setAz1030(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1030());
    }

    /**
     * Tests the setAz1030b() method.
     *
     * @return void
     */
    public function testSetAz1030b(): void {

        $obj = new DecTva();

        $obj->setAz1030b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1030b());
    }

    /**
     * Tests the setAz1040() method.
     *
     * @return void
     */
    public function testSetAz1040(): void {

        $obj = new DecTva();

        $obj->setAz1040(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1040());
    }

    /**
     * Tests the setAz1040b() method.
     *
     * @return void
     */
    public function testSetAz1040b(): void {

        $obj = new DecTva();

        $obj->setAz1040b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1040b());
    }

    /**
     * Tests the setAz1050() method.
     *
     * @return void
     */
    public function testSetAz1050(): void {

        $obj = new DecTva();

        $obj->setAz1050(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1050());
    }

    /**
     * Tests the setAz1050b() method.
     *
     * @return void
     */
    public function testSetAz1050b(): void {

        $obj = new DecTva();

        $obj->setAz1050b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1050b());
    }

    /**
     * Tests the setAz1080() method.
     *
     * @return void
     */
    public function testSetAz1080(): void {

        $obj = new DecTva();

        $obj->setAz1080(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1080());
    }

    /**
     * Tests the setAz1080b() method.
     *
     * @return void
     */
    public function testSetAz1080b(): void {

        $obj = new DecTva();

        $obj->setAz1080b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1080b());
    }

    /**
     * Tests the setAz1081() method.
     *
     * @return void
     */
    public function testSetAz1081(): void {

        $obj = new DecTva();

        $obj->setAz1081(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1081());
    }

    /**
     * Tests the setAz1081b() method.
     *
     * @return void
     */
    public function testSetAz1081b(): void {

        $obj = new DecTva();

        $obj->setAz1081b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1081b());
    }

    /**
     * Tests the setAz1090() method.
     *
     * @return void
     */
    public function testSetAz1090(): void {

        $obj = new DecTva();

        $obj->setAz1090(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1090());
    }

    /**
     * Tests the setAz1090b() method.
     *
     * @return void
     */
    public function testSetAz1090b(): void {

        $obj = new DecTva();

        $obj->setAz1090b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1090b());
    }

    /**
     * Tests the setAz1100() method.
     *
     * @return void
     */
    public function testSetAz1100(): void {

        $obj = new DecTva();

        $obj->setAz1100(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1100());
    }

    /**
     * Tests the setAz1100b() method.
     *
     * @return void
     */
    public function testSetAz1100b(): void {

        $obj = new DecTva();

        $obj->setAz1100b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1100b());
    }

    /**
     * Tests the setAz1110() method.
     *
     * @return void
     */
    public function testSetAz1110(): void {

        $obj = new DecTva();

        $obj->setAz1110(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1110());
    }

    /**
     * Tests the setAz1110b() method.
     *
     * @return void
     */
    public function testSetAz1110b(): void {

        $obj = new DecTva();

        $obj->setAz1110b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1110b());
    }

    /**
     * Tests the setAz1120() method.
     *
     * @return void
     */
    public function testSetAz1120(): void {

        $obj = new DecTva();

        $obj->setAz1120(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1120());
    }

    /**
     * Tests the setAz1120b() method.
     *
     * @return void
     */
    public function testSetAz1120b(): void {

        $obj = new DecTva();

        $obj->setAz1120b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1120b());
    }

    /**
     * Tests the setAz3240() method.
     *
     * @return void
     */
    public function testSetAz3240(): void {

        $obj = new DecTva();

        $obj->setAz3240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3240());
    }

    /**
     * Tests the setAz3260() method.
     *
     * @return void
     */
    public function testSetAz3260(): void {

        $obj = new DecTva();

        $obj->setAz3260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3260());
    }

    /**
     * Tests the setAz3510() method.
     *
     * @return void
     */
    public function testSetAz3510(): void {

        $obj = new DecTva();

        $obj->setAz3510(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3510());
    }

    /**
     * Tests the setAz3520() method.
     *
     * @return void
     */
    public function testSetAz3520(): void {

        $obj = new DecTva();

        $obj->setAz3520(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3520());
    }

    /**
     * Tests the setAz38Code() method.
     *
     * @return void
     */
    public function testSetAz38Code(): void {

        $obj = new DecTva();

        $obj->setAz38Code("az38Code");
        $this->assertEquals("az38Code", $obj->getAz38Code());
    }

    /**
     * Tests the setAz38Lib() method.
     *
     * @return void
     */
    public function testSetAz38Lib(): void {

        $obj = new DecTva();

        $obj->setAz38Lib("az38Lib");
        $this->assertEquals("az38Lib", $obj->getAz38Lib());
    }

    /**
     * Tests the setAz38b() method.
     *
     * @return void
     */
    public function testSetAz38b(): void {

        $obj = new DecTva();

        $obj->setAz38b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz38b());
    }

    /**
     * Tests the setAz38ht() method.
     *
     * @return void
     */
    public function testSetAz38ht(): void {

        $obj = new DecTva();

        $obj->setAz38ht(10.092018);
        $this->assertEquals(10.092018, $obj->getAz38ht());
    }

    /**
     * Tests the setAz3910() method.
     *
     * @return void
     */
    public function testSetAz3910(): void {

        $obj = new DecTva();

        $obj->setAz3910(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3910());
    }

    /**
     * Tests the setAz4200() method.
     *
     * @return void
     */
    public function testSetAz4200(): void {

        $obj = new DecTva();

        $obj->setAz4200(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4200());
    }

    /**
     * Tests the setAz4201() method.
     *
     * @return void
     */
    public function testSetAz4201(): void {

        $obj = new DecTva();

        $obj->setAz4201(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4201());
    }

    /**
     * Tests the setAz4204() method.
     *
     * @return void
     */
    public function testSetAz4204(): void {

        $obj = new DecTva();

        $obj->setAz4204(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4204());
    }

    /**
     * Tests the setAz4206() method.
     *
     * @return void
     */
    public function testSetAz4206(): void {

        $obj = new DecTva();

        $obj->setAz4206(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4206());
    }

    /**
     * Tests the setAz4207() method.
     *
     * @return void
     */
    public function testSetAz4207(): void {

        $obj = new DecTva();

        $obj->setAz4207(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4207());
    }

    /**
     * Tests the setAz4208() method.
     *
     * @return void
     */
    public function testSetAz4208(): void {

        $obj = new DecTva();

        $obj->setAz4208(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4208());
    }

    /**
     * Tests the setAz4209() method.
     *
     * @return void
     */
    public function testSetAz4209(): void {

        $obj = new DecTva();

        $obj->setAz4209(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4209());
    }

    /**
     * Tests the setAz4210() method.
     *
     * @return void
     */
    public function testSetAz4210(): void {

        $obj = new DecTva();

        $obj->setAz4210(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4210());
    }

    /**
     * Tests the setAz4211() method.
     *
     * @return void
     */
    public function testSetAz4211(): void {

        $obj = new DecTva();

        $obj->setAz4211(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4211());
    }

    /**
     * Tests the setAz4212() method.
     *
     * @return void
     */
    public function testSetAz4212(): void {

        $obj = new DecTva();

        $obj->setAz4212(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4212());
    }

    /**
     * Tests the setAz4213() method.
     *
     * @return void
     */
    public function testSetAz4213(): void {

        $obj = new DecTva();

        $obj->setAz4213(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4213());
    }

    /**
     * Tests the setAz4215() method.
     *
     * @return void
     */
    public function testSetAz4215(): void {

        $obj = new DecTva();

        $obj->setAz4215(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4215());
    }

    /**
     * Tests the setAz4220() method.
     *
     * @return void
     */
    public function testSetAz4220(): void {

        $obj = new DecTva();

        $obj->setAz4220(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4220());
    }

    /**
     * Tests the setAz4222() method.
     *
     * @return void
     */
    public function testSetAz4222(): void {

        $obj = new DecTva();

        $obj->setAz4222(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4222());
    }

    /**
     * Tests the setAz4223() method.
     *
     * @return void
     */
    public function testSetAz4223(): void {

        $obj = new DecTva();

        $obj->setAz4223(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4223());
    }

    /**
     * Tests the setAz4224() method.
     *
     * @return void
     */
    public function testSetAz4224(): void {

        $obj = new DecTva();

        $obj->setAz4224(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4224());
    }

    /**
     * Tests the setAz4228Mtt() method.
     *
     * @return void
     */
    public function testSetAz4228Mtt(): void {

        $obj = new DecTva();

        $obj->setAz4228Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4228Mtt());
    }

    /**
     * Tests the setAz4230() method.
     *
     * @return void
     */
    public function testSetAz4230(): void {

        $obj = new DecTva();

        $obj->setAz4230(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4230());
    }

    /**
     * Tests the setAz4231() method.
     *
     * @return void
     */
    public function testSetAz4231(): void {

        $obj = new DecTva();

        $obj->setAz4231(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4231());
    }

    /**
     * Tests the setAz4232() method.
     *
     * @return void
     */
    public function testSetAz4232(): void {

        $obj = new DecTva();

        $obj->setAz4232(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4232());
    }

    /**
     * Tests the setAz4233() method.
     *
     * @return void
     */
    public function testSetAz4233(): void {

        $obj = new DecTva();

        $obj->setAz4233(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4233());
    }

    /**
     * Tests the setAz4234() method.
     *
     * @return void
     */
    public function testSetAz4234(): void {

        $obj = new DecTva();

        $obj->setAz4234(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4234());
    }

    /**
     * Tests the setAz4235() method.
     *
     * @return void
     */
    public function testSetAz4235(): void {

        $obj = new DecTva();

        $obj->setAz4235(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4235());
    }

    /**
     * Tests the setAz4236() method.
     *
     * @return void
     */
    public function testSetAz4236(): void {

        $obj = new DecTva();

        $obj->setAz4236(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4236());
    }

    /**
     * Tests the setAz4237() method.
     *
     * @return void
     */
    public function testSetAz4237(): void {

        $obj = new DecTva();

        $obj->setAz4237(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4237());
    }

    /**
     * Tests the setAz4238() method.
     *
     * @return void
     */
    public function testSetAz4238(): void {

        $obj = new DecTva();

        $obj->setAz4238(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4238());
    }

    /**
     * Tests the setAz4239() method.
     *
     * @return void
     */
    public function testSetAz4239(): void {

        $obj = new DecTva();

        $obj->setAz4239(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4239());
    }

    /**
     * Tests the setAz4240() method.
     *
     * @return void
     */
    public function testSetAz4240(): void {

        $obj = new DecTva();

        $obj->setAz4240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240());
    }

    /**
     * Tests the setAz4241() method.
     *
     * @return void
     */
    public function testSetAz4241(): void {

        $obj = new DecTva();

        $obj->setAz4241(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4241());
    }

    /**
     * Tests the setAz4242() method.
     *
     * @return void
     */
    public function testSetAz4242(): void {

        $obj = new DecTva();

        $obj->setAz4242(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4242());
    }

    /**
     * Tests the setAz4243() method.
     *
     * @return void
     */
    public function testSetAz4243(): void {

        $obj = new DecTva();

        $obj->setAz4243(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4243());
    }

    /**
     * Tests the setAz4244() method.
     *
     * @return void
     */
    public function testSetAz4244(): void {

        $obj = new DecTva();

        $obj->setAz4244(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4244());
    }

    /**
     * Tests the setAz4245() method.
     *
     * @return void
     */
    public function testSetAz4245(): void {

        $obj = new DecTva();

        $obj->setAz4245(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4245());
    }

    /**
     * Tests the setAz4246() method.
     *
     * @return void
     */
    public function testSetAz4246(): void {

        $obj = new DecTva();

        $obj->setAz4246(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4246());
    }

    /**
     * Tests the setAz4247() method.
     *
     * @return void
     */
    public function testSetAz4247(): void {

        $obj = new DecTva();

        $obj->setAz4247(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4247());
    }

    /**
     * Tests the setAz4248() method.
     *
     * @return void
     */
    public function testSetAz4248(): void {

        $obj = new DecTva();

        $obj->setAz4248(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4248());
    }

    /**
     * Tests the setAz4249() method.
     *
     * @return void
     */
    public function testSetAz4249(): void {

        $obj = new DecTva();

        $obj->setAz4249(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4249());
    }

    /**
     * Tests the setAz4250() method.
     *
     * @return void
     */
    public function testSetAz4250(): void {

        $obj = new DecTva();

        $obj->setAz4250(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4250());
    }

    /**
     * Tests the setAz4251() method.
     *
     * @return void
     */
    public function testSetAz4251(): void {

        $obj = new DecTva();

        $obj->setAz4251(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4251());
    }

    /**
     * Tests the setAz4252() method.
     *
     * @return void
     */
    public function testSetAz4252(): void {

        $obj = new DecTva();

        $obj->setAz4252(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252());
    }

    /**
     * Tests the setAz4254() method.
     *
     * @return void
     */
    public function testSetAz4254(): void {

        $obj = new DecTva();

        $obj->setAz4254(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4254());
    }

    /**
     * Tests the setAz4255() method.
     *
     * @return void
     */
    public function testSetAz4255(): void {

        $obj = new DecTva();

        $obj->setAz4255(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4255());
    }

    /**
     * Tests the setAz4256() method.
     *
     * @return void
     */
    public function testSetAz4256(): void {

        $obj = new DecTva();

        $obj->setAz4256(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4256());
    }

    /**
     * Tests the setAz4257() method.
     *
     * @return void
     */
    public function testSetAz4257(): void {

        $obj = new DecTva();

        $obj->setAz4257(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4257());
    }

    /**
     * Tests the setAz4258() method.
     *
     * @return void
     */
    public function testSetAz4258(): void {

        $obj = new DecTva();

        $obj->setAz4258(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4258());
    }

    /**
     * Tests the setAz4259() method.
     *
     * @return void
     */
    public function testSetAz4259(): void {

        $obj = new DecTva();

        $obj->setAz4259(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4259());
    }

    /**
     * Tests the setAz4260() method.
     *
     * @return void
     */
    public function testSetAz4260(): void {

        $obj = new DecTva();

        $obj->setAz4260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4260());
    }

    /**
     * Tests the setAz4261() method.
     *
     * @return void
     */
    public function testSetAz4261(): void {

        $obj = new DecTva();

        $obj->setAz4261(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4261());
    }

    /**
     * Tests the setAz4262() method.
     *
     * @return void
     */
    public function testSetAz4262(): void {

        $obj = new DecTva();

        $obj->setAz4262(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4262());
    }

    /**
     * Tests the setAz4263() method.
     *
     * @return void
     */
    public function testSetAz4263(): void {

        $obj = new DecTva();

        $obj->setAz4263(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4263());
    }

    /**
     * Tests the setAz4264() method.
     *
     * @return void
     */
    public function testSetAz4264(): void {

        $obj = new DecTva();

        $obj->setAz4264(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4264());
    }

    /**
     * Tests the setAz4265() method.
     *
     * @return void
     */
    public function testSetAz4265(): void {

        $obj = new DecTva();

        $obj->setAz4265(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4265());
    }

    /**
     * Tests the setAz4266() method.
     *
     * @return void
     */
    public function testSetAz4266(): void {

        $obj = new DecTva();

        $obj->setAz4266(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4266());
    }

    /**
     * Tests the setAz4267() method.
     *
     * @return void
     */
    public function testSetAz4267(): void {

        $obj = new DecTva();

        $obj->setAz4267(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4267());
    }

    /**
     * Tests the setAz4268() method.
     *
     * @return void
     */
    public function testSetAz4268(): void {

        $obj = new DecTva();

        $obj->setAz4268(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268());
    }

    /**
     * Tests the setAz4268Base() method.
     *
     * @return void
     */
    public function testSetAz4268Base(): void {

        $obj = new DecTva();

        $obj->setAz4268Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268Base());
    }

    /**
     * Tests the setAz4269() method.
     *
     * @return void
     */
    public function testSetAz4269(): void {

        $obj = new DecTva();

        $obj->setAz4269(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269());
    }

    /**
     * Tests the setAz4269Base() method.
     *
     * @return void
     */
    public function testSetAz4269Base(): void {

        $obj = new DecTva();

        $obj->setAz4269Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269Base());
    }

    /**
     * Tests the setAz4270() method.
     *
     * @return void
     */
    public function testSetAz4270(): void {

        $obj = new DecTva();

        $obj->setAz4270(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270());
    }

    /**
     * Tests the setAz4270Base() method.
     *
     * @return void
     */
    public function testSetAz4270Base(): void {

        $obj = new DecTva();

        $obj->setAz4270Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base());
    }

    /**
     * Tests the setAz4271() method.
     *
     * @return void
     */
    public function testSetAz4271(): void {

        $obj = new DecTva();

        $obj->setAz4271(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271());
    }

    /**
     * Tests the setAz4271Base() method.
     *
     * @return void
     */
    public function testSetAz4271Base(): void {

        $obj = new DecTva();

        $obj->setAz4271Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271Base());
    }

    /**
     * Tests the setAz4272() method.
     *
     * @return void
     */
    public function testSetAz4272(): void {

        $obj = new DecTva();

        $obj->setAz4272(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4272());
    }

    /**
     * Tests the setAz4274() method.
     *
     * @return void
     */
    public function testSetAz4274(): void {

        $obj = new DecTva();

        $obj->setAz4274(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4274());
    }

    /**
     * Tests the setAz4276() method.
     *
     * @return void
     */
    public function testSetAz4276(): void {

        $obj = new DecTva();

        $obj->setAz4276(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276());
    }

    /**
     * Tests the setAz4276Base() method.
     *
     * @return void
     */
    public function testSetAz4276Base(): void {

        $obj = new DecTva();

        $obj->setAz4276Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276Base());
    }

    /**
     * Tests the setAz4277() method.
     *
     * @return void
     */
    public function testSetAz4277(): void {

        $obj = new DecTva();

        $obj->setAz4277(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277());
    }

    /**
     * Tests the setAz4277Base() method.
     *
     * @return void
     */
    public function testSetAz4277Base(): void {

        $obj = new DecTva();

        $obj->setAz4277Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277Base());
    }

    /**
     * Tests the setAz50Code() method.
     *
     * @return void
     */
    public function testSetAz50Code(): void {

        $obj = new DecTva();

        $obj->setAz50Code("az50Code");
        $this->assertEquals("az50Code", $obj->getAz50Code());
    }

    /**
     * Tests the setAz50Lib() method.
     *
     * @return void
     */
    public function testSetAz50Lib(): void {

        $obj = new DecTva();

        $obj->setAz50Lib("az50Lib");
        $this->assertEquals("az50Lib", $obj->getAz50Lib());
    }

    /**
     * Tests the setAz50Mtt() method.
     *
     * @return void
     */
    public function testSetAz50Mtt(): void {

        $obj = new DecTva();

        $obj->setAz50Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz50Mtt());
    }

    /**
     * Tests the setAz59Code() method.
     *
     * @return void
     */
    public function testSetAz59Code(): void {

        $obj = new DecTva();

        $obj->setAz59Code("az59Code");
        $this->assertEquals("az59Code", $obj->getAz59Code());
    }

    /**
     * Tests the setAz59Lib() method.
     *
     * @return void
     */
    public function testSetAz59Lib(): void {

        $obj = new DecTva();

        $obj->setAz59Lib("az59Lib");
        $this->assertEquals("az59Lib", $obj->getAz59Lib());
    }

    /**
     * Tests the setAz59Mtt() method.
     *
     * @return void
     */
    public function testSetAz59Mtt(): void {

        $obj = new DecTva();

        $obj->setAz59Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz59Mtt());
    }

    /**
     * Tests the setAzEnCode() method.
     *
     * @return void
     */
    public function testSetAzEnCode(): void {

        $obj = new DecTva();

        $obj->setAzEnCode("azEnCode");
        $this->assertEquals("azEnCode", $obj->getAzEnCode());
    }

    /**
     * Tests the setAzEnLib() method.
     *
     * @return void
     */
    public function testSetAzEnLib(): void {

        $obj = new DecTva();

        $obj->setAzEnLib("azEnLib");
        $this->assertEquals("azEnLib", $obj->getAzEnLib());
    }

    /**
     * Tests the setAzEsCode() method.
     *
     * @return void
     */
    public function testSetAzEsCode(): void {

        $obj = new DecTva();

        $obj->setAzEsCode("azEsCode");
        $this->assertEquals("azEsCode", $obj->getAzEsCode());
    }

    /**
     * Tests the setAzEsLib() method.
     *
     * @return void
     */
    public function testSetAzEsLib(): void {

        $obj = new DecTva();

        $obj->setAzEsLib("azEsLib");
        $this->assertEquals("azEsLib", $obj->getAzEsLib());
    }

    /**
     * Tests the setAzEsMtt() method.
     *
     * @return void
     */
    public function testSetAzEsMtt(): void {

        $obj = new DecTva();

        $obj->setAzEsMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEsMtt());
    }

    /**
     * Tests the setAzEuCode() method.
     *
     * @return void
     */
    public function testSetAzEuCode(): void {

        $obj = new DecTva();

        $obj->setAzEuCode("azEuCode");
        $this->assertEquals("azEuCode", $obj->getAzEuCode());
    }

    /**
     * Tests the setAzEuLib() method.
     *
     * @return void
     */
    public function testSetAzEuLib(): void {

        $obj = new DecTva();

        $obj->setAzEuLib("azEuLib");
        $this->assertEquals("azEuLib", $obj->getAzEuLib());
    }

    /**
     * Tests the setAzEuMtt() method.
     *
     * @return void
     */
    public function testSetAzEuMtt(): void {

        $obj = new DecTva();

        $obj->setAzEuMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEuMtt());
    }

    /**
     * Tests the setAzExCode() method.
     *
     * @return void
     */
    public function testSetAzExCode(): void {

        $obj = new DecTva();

        $obj->setAzExCode("azExCode");
        $this->assertEquals("azExCode", $obj->getAzExCode());
    }

    /**
     * Tests the setAzExLib() method.
     *
     * @return void
     */
    public function testSetAzExLib(): void {

        $obj = new DecTva();

        $obj->setAzExLib("azExLib");
        $this->assertEquals("azExLib", $obj->getAzExLib());
    }

    /**
     * Tests the setAzExMtt() method.
     *
     * @return void
     */
    public function testSetAzExMtt(): void {

        $obj = new DecTva();

        $obj->setAzExMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzExMtt());
    }

    /**
     * Tests the setAzEyCode() method.
     *
     * @return void
     */
    public function testSetAzEyCode(): void {

        $obj = new DecTva();

        $obj->setAzEyCode("azEyCode");
        $this->assertEquals("azEyCode", $obj->getAzEyCode());
    }

    /**
     * Tests the setAzEyLib() method.
     *
     * @return void
     */
    public function testSetAzEyLib(): void {

        $obj = new DecTva();

        $obj->setAzEyLib("azEyLib");
        $this->assertEquals("azEyLib", $obj->getAzEyLib());
    }

    /**
     * Tests the setAzEyMtt() method.
     *
     * @return void
     */
    public function testSetAzEyMtt(): void {

        $obj = new DecTva();

        $obj->setAzEyMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEyMtt());
    }

    /**
     * Tests the setAzEzCode() method.
     *
     * @return void
     */
    public function testSetAzEzCode(): void {

        $obj = new DecTva();

        $obj->setAzEzCode("azEzCode");
        $this->assertEquals("azEzCode", $obj->getAzEzCode());
    }

    /**
     * Tests the setAzEzLib() method.
     *
     * @return void
     */
    public function testSetAzEzLib(): void {

        $obj = new DecTva();

        $obj->setAzEzLib("azEzLib");
        $this->assertEquals("azEzLib", $obj->getAzEzLib());
    }

    /**
     * Tests the setAzEzMtt() method.
     *
     * @return void
     */
    public function testSetAzEzMtt(): void {

        $obj = new DecTva();

        $obj->setAzEzMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEzMtt());
    }

    /**
     * Tests the setAzGaCode() method.
     *
     * @return void
     */
    public function testSetAzGaCode(): void {

        $obj = new DecTva();

        $obj->setAzGaCode("azGaCode");
        $this->assertEquals("azGaCode", $obj->getAzGaCode());
    }

    /**
     * Tests the setAzGaLib() method.
     *
     * @return void
     */
    public function testSetAzGaLib(): void {

        $obj = new DecTva();

        $obj->setAzGaLib("azGaLib");
        $this->assertEquals("azGaLib", $obj->getAzGaLib());
    }

    /**
     * Tests the setAzGaMtt() method.
     *
     * @return void
     */
    public function testSetAzGaMtt(): void {

        $obj = new DecTva();

        $obj->setAzGaMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGaMtt());
    }

    /**
     * Tests the setAzGcCode() method.
     *
     * @return void
     */
    public function testSetAzGcCode(): void {

        $obj = new DecTva();

        $obj->setAzGcCode("azGcCode");
        $this->assertEquals("azGcCode", $obj->getAzGcCode());
    }

    /**
     * Tests the setAzGcLib() method.
     *
     * @return void
     */
    public function testSetAzGcLib(): void {

        $obj = new DecTva();

        $obj->setAzGcLib("azGcLib");
        $this->assertEquals("azGcLib", $obj->getAzGcLib());
    }

    /**
     * Tests the setAzGcMtt() method.
     *
     * @return void
     */
    public function testSetAzGcMtt(): void {

        $obj = new DecTva();

        $obj->setAzGcMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGcMtt());
    }

    /**
     * Tests the setAzHi() method.
     *
     * @return void
     */
    public function testSetAzHi(): void {

        $obj = new DecTva();

        $obj->setAzHi(10.092018);
        $this->assertEquals(10.092018, $obj->getAzHi());
    }

    /**
     * Tests the setAzHl() method.
     *
     * @return void
     */
    public function testSetAzHl(): void {

        $obj = new DecTva();

        $obj->setAzHl(10.092018);
        $this->assertEquals(10.092018, $obj->getAzHl());
    }

    /**
     * Tests the setAzJb() method.
     *
     * @return void
     */
    public function testSetAzJb(): void {

        $obj = new DecTva();

        $obj->setAzJb(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJb());
    }

    /**
     * Tests the setAzJc() method.
     *
     * @return void
     */
    public function testSetAzJc(): void {

        $obj = new DecTva();

        $obj->setAzJc(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJc());
    }

    /**
     * Tests the setAzLigne4Mtt() method.
     *
     * @return void
     */
    public function testSetAzLigne4Mtt(): void {

        $obj = new DecTva();

        $obj->setAzLigne4Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzLigne4Mtt());
    }

    /**
     * Tests the setAzLigne5Mtt() method.
     *
     * @return void
     */
    public function testSetAzLigne5Mtt(): void {

        $obj = new DecTva();

        $obj->setAzLigne5Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzLigne5Mtt());
    }

    /**
     * Tests the setCa12MoisCloture() method.
     *
     * @return void
     */
    public function testSetCa12MoisCloture(): void {

        $obj = new DecTva();

        $obj->setCa12MoisCloture(10);
        $this->assertEquals(10, $obj->getCa12MoisCloture());
    }

    /**
     * Tests the setCorres1() method.
     *
     * @return void
     */
    public function testSetCorres1(): void {

        $obj = new DecTva();

        $obj->setCorres1("corres1");
        $this->assertEquals("corres1", $obj->getCorres1());
    }

    /**
     * Tests the setCorres2() method.
     *
     * @return void
     */
    public function testSetCorres2(): void {

        $obj = new DecTva();

        $obj->setCorres2("corres2");
        $this->assertEquals("corres2", $obj->getCorres2());
    }

    /**
     * Tests the setCorres3() method.
     *
     * @return void
     */
    public function testSetCorres3(): void {

        $obj = new DecTva();

        $obj->setCorres3("corres3");
        $this->assertEquals("corres3", $obj->getCorres3());
    }

    /**
     * Tests the setCorres4() method.
     *
     * @return void
     */
    public function testSetCorres4(): void {

        $obj = new DecTva();

        $obj->setCorres4("corres4");
        $this->assertEquals("corres4", $obj->getCorres4());
    }

    /**
     * Tests the setCorres5() method.
     *
     * @return void
     */
    public function testSetCorres5(): void {

        $obj = new DecTva();

        $obj->setCorres5("corres5");
        $this->assertEquals("corres5", $obj->getCorres5());
    }

    /**
     * Tests the setCorres6() method.
     *
     * @return void
     */
    public function testSetCorres6(): void {

        $obj = new DecTva();

        $obj->setCorres6("corres6");
        $this->assertEquals("corres6", $obj->getCorres6());
    }

    /**
     * Tests the setCorres7() method.
     *
     * @return void
     */
    public function testSetCorres7(): void {

        $obj = new DecTva();

        $obj->setCorres7("corres7");
        $this->assertEquals("corres7", $obj->getCorres7());
    }

    /**
     * Tests the setCorres8() method.
     *
     * @return void
     */
    public function testSetCorres8(): void {

        $obj = new DecTva();

        $obj->setCorres8("corres8");
        $this->assertEquals("corres8", $obj->getCorres8());
    }

    /**
     * Tests the setCreditCompte() method.
     *
     * @return void
     */
    public function testSetCreditCompte(): void {

        $obj = new DecTva();

        $obj->setCreditCompte(true);
        $this->assertEquals(true, $obj->getCreditCompte());
    }

    /**
     * Tests the setCreditImputer() method.
     *
     * @return void
     */
    public function testSetCreditImputer(): void {

        $obj = new DecTva();

        $obj->setCreditImputer(true);
        $this->assertEquals(true, $obj->getCreditImputer());
    }

    /**
     * Tests the setDateDec() method.
     *
     * @return void
     */
    public function testSetDateDec(): void {

        $obj = new DecTva();

        $obj->setDateDec("dateDec");
        $this->assertEquals("dateDec", $obj->getDateDec());
    }

    /**
     * Tests the setFlgAc() method.
     *
     * @return void
     */
    public function testSetFlgAc(): void {

        $obj = new DecTva();

        $obj->setFlgAc(true);
        $this->assertEquals(true, $obj->getFlgAc());
    }

    /**
     * Tests the setGenAuto() method.
     *
     * @return void
     */
    public function testSetGenAuto(): void {

        $obj = new DecTva();

        $obj->setGenAuto(true);
        $this->assertEquals(true, $obj->getGenAuto());
    }

    /**
     * Tests the setHtTaux196() method.
     *
     * @return void
     */
    public function testSetHtTaux196(): void {

        $obj = new DecTva();

        $obj->setHtTaux196(10.092018);
        $this->assertEquals(10.092018, $obj->getHtTaux196());
    }

    /**
     * Tests the setHtTaux7() method.
     *
     * @return void
     */
    public function testSetHtTaux7(): void {

        $obj = new DecTva();

        $obj->setHtTaux7(10.092018);
        $this->assertEquals(10.092018, $obj->getHtTaux7());
    }

    /**
     * Tests the setLiquiTaxes1() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes1(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes1("liquiTaxes1");
        $this->assertEquals("liquiTaxes1", $obj->getLiquiTaxes1());
    }

    /**
     * Tests the setLiquiTaxes2() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes2(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes2("liquiTaxes2");
        $this->assertEquals("liquiTaxes2", $obj->getLiquiTaxes2());
    }

    /**
     * Tests the setLiquiTaxes3() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes3(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes3("liquiTaxes3");
        $this->assertEquals("liquiTaxes3", $obj->getLiquiTaxes3());
    }

    /**
     * Tests the setLiquiTaxes4() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes4(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes4("liquiTaxes4");
        $this->assertEquals("liquiTaxes4", $obj->getLiquiTaxes4());
    }

    /**
     * Tests the setLiquiTaxes5() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes5(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes5("liquiTaxes5");
        $this->assertEquals("liquiTaxes5", $obj->getLiquiTaxes5());
    }

    /**
     * Tests the setMentionExpresse() method.
     *
     * @return void
     */
    public function testSetMentionExpresse(): void {

        $obj = new DecTva();

        $obj->setMentionExpresse(true);
        $this->assertEquals(true, $obj->getMentionExpresse());
    }

    /**
     * Tests the setMonnaie() method.
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new DecTva();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests the setMonnaieTenue() method.
     *
     * @return void
     */
    public function testSetMonnaieTenue(): void {

        $obj = new DecTva();

        $obj->setMonnaieTenue("monnaieTenue");
        $this->assertEquals("monnaieTenue", $obj->getMonnaieTenue());
    }

    /**
     * Tests the setNoLotEcritures() method.
     *
     * @return void
     */
    public function testSetNoLotEcritures(): void {

        $obj = new DecTva();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Tests the setPCent() method.
     *
     * @return void
     */
    public function testSetPCent(): void {

        $obj = new DecTva();

        $obj->setPCent(10.092018);
        $this->assertEquals(10.092018, $obj->getPCent());
    }

    /**
     * Tests the setPaiementImputation() method.
     *
     * @return void
     */
    public function testSetPaiementImputation(): void {

        $obj = new DecTva();

        $obj->setPaiementImputation(true);
        $this->assertEquals(true, $obj->getPaiementImputation());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTva();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setReportAcp() method.
     *
     * @return void
     */
    public function testSetReportAcp(): void {

        $obj = new DecTva();

        $obj->setReportAcp(10.092018);
        $this->assertEquals(10.092018, $obj->getReportAcp());
    }

    /**
     * Tests the setRibTitulaire1() method.
     *
     * @return void
     */
    public function testSetRibTitulaire1(): void {

        $obj = new DecTva();

        $obj->setRibTitulaire1("ribTitulaire1");
        $this->assertEquals("ribTitulaire1", $obj->getRibTitulaire1());
    }

    /**
     * Tests the setRibTitulaire2() method.
     *
     * @return void
     */
    public function testSetRibTitulaire2(): void {

        $obj = new DecTva();

        $obj->setRibTitulaire2("ribTitulaire2");
        $this->assertEquals("ribTitulaire2", $obj->getRibTitulaire2());
    }

    /**
     * Tests the setSelAdresseDest() method.
     *
     * @return void
     */
    public function testSetSelAdresseDest(): void {

        $obj = new DecTva();

        $obj->setSelAdresseDest("selAdresseDest");
        $this->assertEquals("selAdresseDest", $obj->getSelAdresseDest());
    }

    /**
     * Tests the setTotal() method.
     *
     * @return void
     */
    public function testSetTotal(): void {

        $obj = new DecTva();

        $obj->setTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotal());
    }

    /**
     * Tests the setTypeReglement() method.
     *
     * @return void
     */
    public function testSetTypeReglement(): void {

        $obj = new DecTva();

        $obj->setTypeReglement(10);
        $this->assertEquals(10, $obj->getTypeReglement());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille(): void {

        $obj = new DecTva();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Tests the setZ0031() method.
     *
     * @return void
     */
    public function testSetZ0031(): void {

        $obj = new DecTva();

        $obj->setZ0031(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0031());
    }

    /**
     * Tests the setZ0031b() method.
     *
     * @return void
     */
    public function testSetZ0031b(): void {

        $obj = new DecTva();

        $obj->setZ0031b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0031b());
    }

    /**
     * Tests the setZ0032() method.
     *
     * @return void
     */
    public function testSetZ0032(): void {

        $obj = new DecTva();

        $obj->setZ0032(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0032());
    }

    /**
     * Tests the setZ0033() method.
     *
     * @return void
     */
    public function testSetZ0033(): void {

        $obj = new DecTva();

        $obj->setZ0033(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0033());
    }

    /**
     * Tests the setZ0034() method.
     *
     * @return void
     */
    public function testSetZ0034(): void {

        $obj = new DecTva();

        $obj->setZ0034(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0034());
    }

    /**
     * Tests the setZ0035() method.
     *
     * @return void
     */
    public function testSetZ0035(): void {

        $obj = new DecTva();

        $obj->setZ0035(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0035());
    }

    /**
     * Tests the setZ0037() method.
     *
     * @return void
     */
    public function testSetZ0037(): void {

        $obj = new DecTva();

        $obj->setZ0037(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0037());
    }

    /**
     * Tests the setZ0038() method.
     *
     * @return void
     */
    public function testSetZ0038(): void {

        $obj = new DecTva();

        $obj->setZ0038(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0038());
    }

    /**
     * Tests the setZ0040() method.
     *
     * @return void
     */
    public function testSetZ0040(): void {

        $obj = new DecTva();

        $obj->setZ0040(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0040());
    }

    /**
     * Tests the setZ0040b() method.
     *
     * @return void
     */
    public function testSetZ0040b(): void {

        $obj = new DecTva();

        $obj->setZ0040b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0040b());
    }

    /**
     * Tests the setZ0041() method.
     *
     * @return void
     */
    public function testSetZ0041(): void {

        $obj = new DecTva();

        $obj->setZ0041(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0041());
    }

    /**
     * Tests the setZ01() method.
     *
     * @return void
     */
    public function testSetZ01(): void {

        $obj = new DecTva();

        $obj->setZ01(10.092018);
        $this->assertEquals(10.092018, $obj->getZ01());
    }

    /**
     * Tests the setZ0100() method.
     *
     * @return void
     */
    public function testSetZ0100(): void {

        $obj = new DecTva();

        $obj->setZ0100(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0100());
    }

    /**
     * Tests the setZ0100b() method.
     *
     * @return void
     */
    public function testSetZ0100b(): void {

        $obj = new DecTva();

        $obj->setZ0100b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0100b());
    }

    /**
     * Tests the setZ0121b() method.
     *
     * @return void
     */
    public function testSetZ0121b(): void {

        $obj = new DecTva();

        $obj->setZ0121b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0121b());
    }

    /**
     * Tests the setZ02() method.
     *
     * @return void
     */
    public function testSetZ02(): void {

        $obj = new DecTva();

        $obj->setZ02(10.092018);
        $this->assertEquals(10.092018, $obj->getZ02());
    }

    /**
     * Tests the setZ0200() method.
     *
     * @return void
     */
    public function testSetZ0200(): void {

        $obj = new DecTva();

        $obj->setZ0200(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0200());
    }

    /**
     * Tests the setZ0200b() method.
     *
     * @return void
     */
    public function testSetZ0200b(): void {

        $obj = new DecTva();

        $obj->setZ0200b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0200b());
    }

    /**
     * Tests the setZ0205() method.
     *
     * @return void
     */
    public function testSetZ0205(): void {

        $obj = new DecTva();

        $obj->setZ0205(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0205());
    }

    /**
     * Tests the setZ0205b() method.
     *
     * @return void
     */
    public function testSetZ0205b(): void {

        $obj = new DecTva();

        $obj->setZ0205b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0205b());
    }

    /**
     * Tests the setZ0600() method.
     *
     * @return void
     */
    public function testSetZ0600(): void {

        $obj = new DecTva();

        $obj->setZ0600(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0600());
    }

    /**
     * Tests the setZ0701() method.
     *
     * @return void
     */
    public function testSetZ0701(): void {

        $obj = new DecTva();

        $obj->setZ0701(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0701());
    }

    /**
     * Tests the setZ0702() method.
     *
     * @return void
     */
    public function testSetZ0702(): void {

        $obj = new DecTva();

        $obj->setZ0702(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0702());
    }

    /**
     * Tests the setZ0702b() method.
     *
     * @return void
     */
    public function testSetZ0702b(): void {

        $obj = new DecTva();

        $obj->setZ0702b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0702b());
    }

    /**
     * Tests the setZ0703() method.
     *
     * @return void
     */
    public function testSetZ0703(): void {

        $obj = new DecTva();

        $obj->setZ0703(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0703());
    }

    /**
     * Tests the setZ0703b() method.
     *
     * @return void
     */
    public function testSetZ0703b(): void {

        $obj = new DecTva();

        $obj->setZ0703b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0703b());
    }

    /**
     * Tests the setZ0705() method.
     *
     * @return void
     */
    public function testSetZ0705(): void {

        $obj = new DecTva();

        $obj->setZ0705(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0705());
    }

    /**
     * Tests the setZ0900() method.
     *
     * @return void
     */
    public function testSetZ0900(): void {

        $obj = new DecTva();

        $obj->setZ0900(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0900());
    }

    /**
     * Tests the setZ0900b() method.
     *
     * @return void
     */
    public function testSetZ0900b(): void {

        $obj = new DecTva();

        $obj->setZ0900b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0900b());
    }

    /**
     * Tests the setZ0920() method.
     *
     * @return void
     */
    public function testSetZ0920(): void {

        $obj = new DecTva();

        $obj->setZ0920(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0920());
    }

    /**
     * Tests the setZ0920b() method.
     *
     * @return void
     */
    public function testSetZ0920b(): void {

        $obj = new DecTva();

        $obj->setZ0920b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0920b());
    }

    /**
     * Tests the setZ0950() method.
     *
     * @return void
     */
    public function testSetZ0950(): void {

        $obj = new DecTva();

        $obj->setZ0950(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0950());
    }

    /**
     * Tests the setZ0950b() method.
     *
     * @return void
     */
    public function testSetZ0950b(): void {

        $obj = new DecTva();

        $obj->setZ0950b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0950b());
    }

    /**
     * Tests the setZ12Code() method.
     *
     * @return void
     */
    public function testSetZ12Code(): void {

        $obj = new DecTva();

        $obj->setZ12Code("z12Code");
        $this->assertEquals("z12Code", $obj->getZ12Code());
    }

    /**
     * Tests the setZ12Lib() method.
     *
     * @return void
     */
    public function testSetZ12Lib(): void {

        $obj = new DecTva();

        $obj->setZ12Lib("z12Lib");
        $this->assertEquals("z12Lib", $obj->getZ12Lib());
    }

    /**
     * Tests the setZ12Taxe() method.
     *
     * @return void
     */
    public function testSetZ12Taxe(): void {

        $obj = new DecTva();

        $obj->setZ12Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ12Taxe());
    }

    /**
     * Tests the setZ14() method.
     *
     * @return void
     */
    public function testSetZ14(): void {

        $obj = new DecTva();

        $obj->setZ14(10.092018);
        $this->assertEquals(10.092018, $obj->getZ14());
    }

    /**
     * Tests the setZ18() method.
     *
     * @return void
     */
    public function testSetZ18(): void {

        $obj = new DecTva();

        $obj->setZ18(10.092018);
        $this->assertEquals(10.092018, $obj->getZ18());
    }

    /**
     * Tests the setZ196() method.
     *
     * @return void
     */
    public function testSetZ196(): void {

        $obj = new DecTva();

        $obj->setZ196(10.092018);
        $this->assertEquals(10.092018, $obj->getZ196());
    }

    /**
     * Tests the setZ196b() method.
     *
     * @return void
     */
    public function testSetZ196b(): void {

        $obj = new DecTva();

        $obj->setZ196b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ196b());
    }

    /**
     * Tests the setZ21() method.
     *
     * @return void
     */
    public function testSetZ21(): void {

        $obj = new DecTva();

        $obj->setZ21(10.092018);
        $this->assertEquals(10.092018, $obj->getZ21());
    }

    /**
     * Tests the setZ25() method.
     *
     * @return void
     */
    public function testSetZ25(): void {

        $obj = new DecTva();

        $obj->setZ25(10.092018);
        $this->assertEquals(10.092018, $obj->getZ25());
    }

    /**
     * Tests the setZ4227() method.
     *
     * @return void
     */
    public function testSetZ4227(): void {

        $obj = new DecTva();

        $obj->setZ4227(10.092018);
        $this->assertEquals(10.092018, $obj->getZ4227());
    }

    /**
     * Tests the setZ8001() method.
     *
     * @return void
     */
    public function testSetZ8001(): void {

        $obj = new DecTva();

        $obj->setZ8001(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8001());
    }

    /**
     * Tests the setZ8002() method.
     *
     * @return void
     */
    public function testSetZ8002(): void {

        $obj = new DecTva();

        $obj->setZ8002(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8002());
    }

    /**
     * Tests the setZ8003() method.
     *
     * @return void
     */
    public function testSetZ8003(): void {

        $obj = new DecTva();

        $obj->setZ8003(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003());
    }

    /**
     * Tests the setZ8003c() method.
     *
     * @return void
     */
    public function testSetZ8003c(): void {

        $obj = new DecTva();

        $obj->setZ8003c(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003c());
    }

    /**
     * Tests the setZ8005() method.
     *
     * @return void
     */
    public function testSetZ8005(): void {

        $obj = new DecTva();

        $obj->setZ8005(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8005());
    }

    /**
     * Tests the setZ9979() method.
     *
     * @return void
     */
    public function testSetZ9979(): void {

        $obj = new DecTva();

        $obj->setZ9979(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9979());
    }

    /**
     * Tests the setZ9989() method.
     *
     * @return void
     */
    public function testSetZ9989(): void {

        $obj = new DecTva();

        $obj->setZ9989(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9989());
    }

    /**
     * Tests the setZ9991() method.
     *
     * @return void
     */
    public function testSetZ9991(): void {

        $obj = new DecTva();

        $obj->setZ9991(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9991());
    }

    /**
     * Tests the setZ9999() method.
     *
     * @return void
     */
    public function testSetZ9999(): void {

        $obj = new DecTva();

        $obj->setZ9999(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9999());
    }

    /**
     * Tests the setZ9BTaxe() method.
     *
     * @return void
     */
    public function testSetZ9BTaxe(): void {

        $obj = new DecTva();

        $obj->setZ9BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9BTaxe());
    }

    /**
     * Tests the setbGroupe() method.
     *
     * @return void
     */
    public function testSetbGroupe(): void {

        $obj = new DecTva();

        $obj->setbGroupe(true);
        $this->assertEquals(true, $obj->getbGroupe());
    }

    /**
     * Tests the setz0029() method.
     *
     * @return void
     */
    public function testSetz0029(): void {

        $obj = new DecTva();

        $obj->setz0029(10.092018);
        $this->assertEquals(10.092018, $obj->getz0029());
    }

    /**
     * Tests the setz0030() method.
     *
     * @return void
     */
    public function testSetz0030(): void {

        $obj = new DecTva();

        $obj->setz0030(10.092018);
        $this->assertEquals(10.092018, $obj->getz0030());
    }

    /**
     * Tests the setz0036() method.
     *
     * @return void
     */
    public function testSetz0036(): void {

        $obj = new DecTva();

        $obj->setz0036(10.092018);
        $this->assertEquals(10.092018, $obj->getz0036());
    }

    /**
     * Tests the setz0039() method.
     *
     * @return void
     */
    public function testSetz0039(): void {

        $obj = new DecTva();

        $obj->setz0039(10.092018);
        $this->assertEquals(10.092018, $obj->getz0039());
    }

    /**
     * Tests the setz0044() method.
     *
     * @return void
     */
    public function testSetz0044(): void {

        $obj = new DecTva();

        $obj->setz0044(10.092018);
        $this->assertEquals(10.092018, $obj->getz0044());
    }

    /**
     * Tests the setz0044b() method.
     *
     * @return void
     */
    public function testSetz0044b(): void {

        $obj = new DecTva();

        $obj->setz0044b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0044b());
    }

    /**
     * Tests the setz0045() method.
     *
     * @return void
     */
    public function testSetz0045(): void {

        $obj = new DecTva();

        $obj->setz0045(10.092018);
        $this->assertEquals(10.092018, $obj->getz0045());
    }

    /**
     * Tests the setz0046() method.
     *
     * @return void
     */
    public function testSetz0046(): void {

        $obj = new DecTva();

        $obj->setz0046(10.092018);
        $this->assertEquals(10.092018, $obj->getz0046());
    }

    /**
     * Tests the setz0059b() method.
     *
     * @return void
     */
    public function testSetz0059b(): void {

        $obj = new DecTva();

        $obj->setz0059b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0059b());
    }

    /**
     * Tests the setz0121() method.
     *
     * @return void
     */
    public function testSetz0121(): void {

        $obj = new DecTva();

        $obj->setz0121(10.092018);
        $this->assertEquals(10.092018, $obj->getz0121());
    }

    /**
     * Tests the setz0151() method.
     *
     * @return void
     */
    public function testSetz0151(): void {

        $obj = new DecTva();

        $obj->setz0151(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151());
    }

    /**
     * Tests the setz0151b() method.
     *
     * @return void
     */
    public function testSetz0151b(): void {

        $obj = new DecTva();

        $obj->setz0151b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151b());
    }

    /**
     * Tests the setz0207() method.
     *
     * @return void
     */
    public function testSetz0207(): void {

        $obj = new DecTva();

        $obj->setz0207(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207());
    }

    /**
     * Tests the setz0207b() method.
     *
     * @return void
     */
    public function testSetz0207b(): void {

        $obj = new DecTva();

        $obj->setz0207b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207b());
    }

    /**
     * Tests the setz0709() method.
     *
     * @return void
     */
    public function testSetz0709(): void {

        $obj = new DecTva();

        $obj->setz0709(10.092018);
        $this->assertEquals(10.092018, $obj->getz0709());
    }

    /**
     * Tests the setz12Ht() method.
     *
     * @return void
     */
    public function testSetz12Ht(): void {

        $obj = new DecTva();

        $obj->setz12Ht(10.092018);
        $this->assertEquals(10.092018, $obj->getz12Ht());
    }

    /**
     * Tests the setz9bCode() method.
     *
     * @return void
     */
    public function testSetz9bCode(): void {

        $obj = new DecTva();

        $obj->setz9bCode("z9bCode");
        $this->assertEquals("z9bCode", $obj->getz9bCode());
    }

    /**
     * Tests the setz9bHt() method.
     *
     * @return void
     */
    public function testSetz9bHt(): void {

        $obj = new DecTva();

        $obj->setz9bHt(10.092018);
        $this->assertEquals(10.092018, $obj->getz9bHt());
    }

    /**
     * Tests the setz9bLib() method.
     *
     * @return void
     */
    public function testSetz9bLib(): void {

        $obj = new DecTva();

        $obj->setz9bLib("z9bLib");
        $this->assertEquals("z9bLib", $obj->getz9bLib());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DecTva();

        $this->assertNull($obj->getACorres1());
        $this->assertNull($obj->getACorres2());
        $this->assertNull($obj->getACorres3());
        $this->assertNull($obj->getACorres4());
        $this->assertNull($obj->getACorres5());
        $this->assertNull($obj->getACorres6());
        $this->assertNull($obj->getACorres7());
        $this->assertNull($obj->getACorres8());
        $this->assertNull($obj->getAz0990());
        $this->assertNull($obj->getAz0990b());
        $this->assertNull($obj->getAz1010());
        $this->assertNull($obj->getAz1010b());
        $this->assertNull($obj->getAz1020());
        $this->assertNull($obj->getAz1020b());
        $this->assertNull($obj->getAz1030());
        $this->assertNull($obj->getAz1030b());
        $this->assertNull($obj->getAz1040());
        $this->assertNull($obj->getAz1040b());
        $this->assertNull($obj->getAz1050());
        $this->assertNull($obj->getAz1050b());
        $this->assertNull($obj->getAz1080());
        $this->assertNull($obj->getAz1080b());
        $this->assertNull($obj->getAz1081());
        $this->assertNull($obj->getAz1081b());
        $this->assertNull($obj->getAz1090());
        $this->assertNull($obj->getAz1090b());
        $this->assertNull($obj->getAz1100());
        $this->assertNull($obj->getAz1100b());
        $this->assertNull($obj->getAz1110());
        $this->assertNull($obj->getAz1110b());
        $this->assertNull($obj->getAz1120());
        $this->assertNull($obj->getAz1120b());
        $this->assertNull($obj->getAz3240());
        $this->assertNull($obj->getAz3260());
        $this->assertNull($obj->getAz3510());
        $this->assertNull($obj->getAz3520());
        $this->assertNull($obj->getAz38Code());
        $this->assertNull($obj->getAz38Lib());
        $this->assertNull($obj->getAz38b());
        $this->assertNull($obj->getAz38ht());
        $this->assertNull($obj->getAz3910());
        $this->assertNull($obj->getAz4200());
        $this->assertNull($obj->getAz4201());
        $this->assertNull($obj->getAz4204());
        $this->assertNull($obj->getAz4206());
        $this->assertNull($obj->getAz4207());
        $this->assertNull($obj->getAz4208());
        $this->assertNull($obj->getAz4209());
        $this->assertNull($obj->getAz4210());
        $this->assertNull($obj->getAz4211());
        $this->assertNull($obj->getAz4212());
        $this->assertNull($obj->getAz4213());
        $this->assertNull($obj->getAz4215());
        $this->assertNull($obj->getAz4220());
        $this->assertNull($obj->getAz4222());
        $this->assertNull($obj->getAz4223());
        $this->assertNull($obj->getAz4224());
        $this->assertNull($obj->getAz4228Mtt());
        $this->assertNull($obj->getAz4230());
        $this->assertNull($obj->getAz4231());
        $this->assertNull($obj->getAz4232());
        $this->assertNull($obj->getAz4233());
        $this->assertNull($obj->getAz4234());
        $this->assertNull($obj->getAz4235());
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
        $this->assertNull($obj->getAz50Code());
        $this->assertNull($obj->getAz50Lib());
        $this->assertNull($obj->getAz50Mtt());
        $this->assertNull($obj->getAz59Code());
        $this->assertNull($obj->getAz59Lib());
        $this->assertNull($obj->getAz59Mtt());
        $this->assertNull($obj->getAzEnCode());
        $this->assertNull($obj->getAzEnLib());
        $this->assertNull($obj->getAzEsCode());
        $this->assertNull($obj->getAzEsLib());
        $this->assertNull($obj->getAzEsMtt());
        $this->assertNull($obj->getAzEuCode());
        $this->assertNull($obj->getAzEuLib());
        $this->assertNull($obj->getAzEuMtt());
        $this->assertNull($obj->getAzExCode());
        $this->assertNull($obj->getAzExLib());
        $this->assertNull($obj->getAzExMtt());
        $this->assertNull($obj->getAzEyCode());
        $this->assertNull($obj->getAzEyLib());
        $this->assertNull($obj->getAzEyMtt());
        $this->assertNull($obj->getAzEzCode());
        $this->assertNull($obj->getAzEzLib());
        $this->assertNull($obj->getAzEzMtt());
        $this->assertNull($obj->getAzGaCode());
        $this->assertNull($obj->getAzGaLib());
        $this->assertNull($obj->getAzGaMtt());
        $this->assertNull($obj->getAzGcCode());
        $this->assertNull($obj->getAzGcLib());
        $this->assertNull($obj->getAzGcMtt());
        $this->assertNull($obj->getAzHi());
        $this->assertNull($obj->getAzHl());
        $this->assertNull($obj->getAzJb());
        $this->assertNull($obj->getAzJc());
        $this->assertNull($obj->getAzLigne4Mtt());
        $this->assertNull($obj->getAzLigne5Mtt());
        $this->assertNull($obj->getCa12MoisCloture());
        $this->assertNull($obj->getCorres1());
        $this->assertNull($obj->getCorres2());
        $this->assertNull($obj->getCorres3());
        $this->assertNull($obj->getCorres4());
        $this->assertNull($obj->getCorres5());
        $this->assertNull($obj->getCorres6());
        $this->assertNull($obj->getCorres7());
        $this->assertNull($obj->getCorres8());
        $this->assertNull($obj->getCreditCompte());
        $this->assertNull($obj->getCreditImputer());
        $this->assertNull($obj->getDateDec());
        $this->assertNull($obj->getFlgAc());
        $this->assertNull($obj->getGenAuto());
        $this->assertNull($obj->getHtTaux196());
        $this->assertNull($obj->getHtTaux7());
        $this->assertNull($obj->getLiquiTaxes1());
        $this->assertNull($obj->getLiquiTaxes2());
        $this->assertNull($obj->getLiquiTaxes3());
        $this->assertNull($obj->getLiquiTaxes4());
        $this->assertNull($obj->getLiquiTaxes5());
        $this->assertNull($obj->getMentionExpresse());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getMonnaieTenue());
        $this->assertNull($obj->getNoLotEcritures());
        $this->assertNull($obj->getPCent());
        $this->assertNull($obj->getPaiementImputation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRibTitulaire1());
        $this->assertNull($obj->getRibTitulaire2());
        $this->assertNull($obj->getReportAcp());
        $this->assertNull($obj->getSelAdresseDest());
        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTypeReglement());
        $this->assertNull($obj->getVille());
        $this->assertNull($obj->getZ0031());
        $this->assertNull($obj->getZ0031b());
        $this->assertNull($obj->getZ0032());
        $this->assertNull($obj->getZ0033());
        $this->assertNull($obj->getZ0034());
        $this->assertNull($obj->getZ0035());
        $this->assertNull($obj->getZ0037());
        $this->assertNull($obj->getZ0038());
        $this->assertNull($obj->getZ0040());
        $this->assertNull($obj->getZ0040b());
        $this->assertNull($obj->getZ0041());
        $this->assertNull($obj->getZ01());
        $this->assertNull($obj->getZ0100());
        $this->assertNull($obj->getZ0100b());
        $this->assertNull($obj->getZ02());
        $this->assertNull($obj->getZ0200());
        $this->assertNull($obj->getZ0200b());
        $this->assertNull($obj->getZ0205());
        $this->assertNull($obj->getZ0205b());
        $this->assertNull($obj->getZ0600());
        $this->assertNull($obj->getZ0701());
        $this->assertNull($obj->getZ0702());
        $this->assertNull($obj->getZ0702b());
        $this->assertNull($obj->getZ0703());
        $this->assertNull($obj->getZ0703b());
        $this->assertNull($obj->getZ0705());
        $this->assertNull($obj->getZ0900());
        $this->assertNull($obj->getZ0900b());
        $this->assertNull($obj->getZ0920());
        $this->assertNull($obj->getZ0920b());
        $this->assertNull($obj->getZ0950());
        $this->assertNull($obj->getZ0950b());
        $this->assertNull($obj->getZ14());
        $this->assertNull($obj->getZ18());
        $this->assertNull($obj->getZ196());
        $this->assertNull($obj->getZ196b());
        $this->assertNull($obj->getZ21());
        $this->assertNull($obj->getZ25());
        $this->assertNull($obj->getZ8001());
        $this->assertNull($obj->getZ8002());
        $this->assertNull($obj->getZ8003());
        $this->assertNull($obj->getZ8003c());
        $this->assertNull($obj->getZ8005());
        $this->assertNull($obj->getZ9979());
        $this->assertNull($obj->getZ9989());
        $this->assertNull($obj->getZ9991());
        $this->assertNull($obj->getZ9999());
        $this->assertNull($obj->getbGroupe());
        $this->assertNull($obj->getz0029());
        $this->assertNull($obj->getz0030());
        $this->assertNull($obj->getz0036());
        $this->assertNull($obj->getz0039());
        $this->assertNull($obj->getz0044());
        $this->assertNull($obj->getz0044b());
        $this->assertNull($obj->getz0045());
        $this->assertNull($obj->getz0046());
        $this->assertNull($obj->getz0059b());
        $this->assertNull($obj->getz0121());
        $this->assertNull($obj->getZ0121b());
        $this->assertNull($obj->getz0151());
        $this->assertNull($obj->getz0151b());
        $this->assertNull($obj->getz0207());
        $this->assertNull($obj->getz0207b());
        $this->assertNull($obj->getz0709());
        $this->assertNull($obj->getZ12Code());
        $this->assertNull($obj->getz12Ht());
        $this->assertNull($obj->getZ12Lib());
        $this->assertNull($obj->getZ12Taxe());
        $this->assertNull($obj->getZ4227());
        $this->assertNull($obj->getz9bCode());
        $this->assertNull($obj->getz9bHt());
        $this->assertNull($obj->getz9bLib());
        $this->assertNull($obj->getZ9BTaxe());
    }
}
