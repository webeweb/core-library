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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTvaGroupe;

/**
 * Dec tva groupe test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaGroupeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setAz0990b() method.
     *
     * @return void
     */
    public function testSetAz0990b() {

        $obj = new DecTvaGroupe();

        $obj->setAz0990b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz0990b());
    }

    /**
     * Tests the setAz1010b() method.
     *
     * @return void
     */
    public function testSetAz1010b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1010b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1010b());
    }

    /**
     * Tests the setAz1020b() method.
     *
     * @return void
     */
    public function testSetAz1020b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1020b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1020b());
    }

    /**
     * Tests the setAz1030b() method.
     *
     * @return void
     */
    public function testSetAz1030b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1030b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1030b());
    }

    /**
     * Tests the setAz1040b() method.
     *
     * @return void
     */
    public function testSetAz1040b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1040b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1040b());
    }

    /**
     * Tests the setAz1050b() method.
     *
     * @return void
     */
    public function testSetAz1050b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1050b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1050b());
    }

    /**
     * Tests the setAz1080b() method.
     *
     * @return void
     */
    public function testSetAz1080b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1080b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1080b());
    }

    /**
     * Tests the setAz1081b() method.
     *
     * @return void
     */
    public function testSetAz1081b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1081b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1081b());
    }

    /**
     * Tests the setAz1090b() method.
     *
     * @return void
     */
    public function testSetAz1090b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1090b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1090b());
    }

    /**
     * Tests the setAz1100b() method.
     *
     * @return void
     */
    public function testSetAz1100b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1100b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1100b());
    }

    /**
     * Tests the setAz1110b() method.
     *
     * @return void
     */
    public function testSetAz1110b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1110b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1110b());
    }

    /**
     * Tests the setAz1120b() method.
     *
     * @return void
     */
    public function testSetAz1120b() {

        $obj = new DecTvaGroupe();

        $obj->setAz1120b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1120b());
    }

    /**
     * Tests the setAz3240() method.
     *
     * @return void
     */
    public function testSetAz3240() {

        $obj = new DecTvaGroupe();

        $obj->setAz3240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3240());
    }

    /**
     * Tests the setAz3510() method.
     *
     * @return void
     */
    public function testSetAz3510() {

        $obj = new DecTvaGroupe();

        $obj->setAz3510(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3510());
    }

    /**
     * Tests the setAz3520() method.
     *
     * @return void
     */
    public function testSetAz3520() {

        $obj = new DecTvaGroupe();

        $obj->setAz3520(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3520());
    }

    /**
     * Tests the setAz38Code() method.
     *
     * @return void
     */
    public function testSetAz38Code() {

        $obj = new DecTvaGroupe();

        $obj->setAz38Code("az38Code");
        $this->assertEquals("az38Code", $obj->getAz38Code());
    }

    /**
     * Tests the setAz38Lib() method.
     *
     * @return void
     */
    public function testSetAz38Lib() {

        $obj = new DecTvaGroupe();

        $obj->setAz38Lib("az38Lib");
        $this->assertEquals("az38Lib", $obj->getAz38Lib());
    }

    /**
     * Tests the setAz38b() method.
     *
     * @return void
     */
    public function testSetAz38b() {

        $obj = new DecTvaGroupe();

        $obj->setAz38b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz38b());
    }

    /**
     * Tests the setAz4200() method.
     *
     * @return void
     */
    public function testSetAz4200() {

        $obj = new DecTvaGroupe();

        $obj->setAz4200(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4200());
    }

    /**
     * Tests the setAz4201() method.
     *
     * @return void
     */
    public function testSetAz4201() {

        $obj = new DecTvaGroupe();

        $obj->setAz4201(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4201());
    }

    /**
     * Tests the setAz4204() method.
     *
     * @return void
     */
    public function testSetAz4204() {

        $obj = new DecTvaGroupe();

        $obj->setAz4204(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4204());
    }

    /**
     * Tests the setAz4206() method.
     *
     * @return void
     */
    public function testSetAz4206() {

        $obj = new DecTvaGroupe();

        $obj->setAz4206(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4206());
    }

    /**
     * Tests the setAz4207() method.
     *
     * @return void
     */
    public function testSetAz4207() {

        $obj = new DecTvaGroupe();

        $obj->setAz4207(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4207());
    }

    /**
     * Tests the setAz4213() method.
     *
     * @return void
     */
    public function testSetAz4213() {

        $obj = new DecTvaGroupe();

        $obj->setAz4213(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4213());
    }

    /**
     * Tests the setAz4215() method.
     *
     * @return void
     */
    public function testSetAz4215() {

        $obj = new DecTvaGroupe();

        $obj->setAz4215(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4215());
    }

    /**
     * Tests the setAz4220() method.
     *
     * @return void
     */
    public function testSetAz4220() {

        $obj = new DecTvaGroupe();

        $obj->setAz4220(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4220());
    }

    /**
     * Tests the setAz4222() method.
     *
     * @return void
     */
    public function testSetAz4222() {

        $obj = new DecTvaGroupe();

        $obj->setAz4222(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4222());
    }

    /**
     * Tests the setAz4223() method.
     *
     * @return void
     */
    public function testSetAz4223() {

        $obj = new DecTvaGroupe();

        $obj->setAz4223(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4223());
    }

    /**
     * Tests the setAz4228Mtt() method.
     *
     * @return void
     */
    public function testSetAz4228Mtt() {

        $obj = new DecTvaGroupe();

        $obj->setAz4228Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4228Mtt());
    }

    /**
     * Tests the setAz4230() method.
     *
     * @return void
     */
    public function testSetAz4230() {

        $obj = new DecTvaGroupe();

        $obj->setAz4230(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4230());
    }

    /**
     * Tests the setAz4231() method.
     *
     * @return void
     */
    public function testSetAz4231() {

        $obj = new DecTvaGroupe();

        $obj->setAz4231(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4231());
    }

    /**
     * Tests the setAz4232() method.
     *
     * @return void
     */
    public function testSetAz4232() {

        $obj = new DecTvaGroupe();

        $obj->setAz4232(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4232());
    }

    /**
     * Tests the setAz4233() method.
     *
     * @return void
     */
    public function testSetAz4233() {

        $obj = new DecTvaGroupe();

        $obj->setAz4233(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4233());
    }

    /**
     * Tests the setAz4234() method.
     *
     * @return void
     */
    public function testSetAz4234() {

        $obj = new DecTvaGroupe();

        $obj->setAz4234(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4234());
    }

    /**
     * Tests the setAz4235() method.
     *
     * @return void
     */
    public function testSetAz4235() {

        $obj = new DecTvaGroupe();

        $obj->setAz4235(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4235());
    }

    /**
     * Tests the setAz4236() method.
     *
     * @return void
     */
    public function testSetAz4236() {

        $obj = new DecTvaGroupe();

        $obj->setAz4236(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4236());
    }

    /**
     * Tests the setAz4237() method.
     *
     * @return void
     */
    public function testSetAz4237() {

        $obj = new DecTvaGroupe();

        $obj->setAz4237(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4237());
    }

    /**
     * Tests the setAz4238() method.
     *
     * @return void
     */
    public function testSetAz4238() {

        $obj = new DecTvaGroupe();

        $obj->setAz4238(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4238());
    }

    /**
     * Tests the setAz4239() method.
     *
     * @return void
     */
    public function testSetAz4239() {

        $obj = new DecTvaGroupe();

        $obj->setAz4239(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4239());
    }

    /**
     * Tests the setAz4240() method.
     *
     * @return void
     */
    public function testSetAz4240() {

        $obj = new DecTvaGroupe();

        $obj->setAz4240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240());
    }

    /**
     * Tests the setAz4241() method.
     *
     * @return void
     */
    public function testSetAz4241() {

        $obj = new DecTvaGroupe();

        $obj->setAz4241(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4241());
    }

    /**
     * Tests the setAz4242() method.
     *
     * @return void
     */
    public function testSetAz4242() {

        $obj = new DecTvaGroupe();

        $obj->setAz4242(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4242());
    }

    /**
     * Tests the setAz4243() method.
     *
     * @return void
     */
    public function testSetAz4243() {

        $obj = new DecTvaGroupe();

        $obj->setAz4243(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4243());
    }

    /**
     * Tests the setAz4244() method.
     *
     * @return void
     */
    public function testSetAz4244() {

        $obj = new DecTvaGroupe();

        $obj->setAz4244(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4244());
    }

    /**
     * Tests the setAz4245() method.
     *
     * @return void
     */
    public function testSetAz4245() {

        $obj = new DecTvaGroupe();

        $obj->setAz4245(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4245());
    }

    /**
     * Tests the setAz4246() method.
     *
     * @return void
     */
    public function testSetAz4246() {

        $obj = new DecTvaGroupe();

        $obj->setAz4246(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4246());
    }

    /**
     * Tests the setAz4247() method.
     *
     * @return void
     */
    public function testSetAz4247() {

        $obj = new DecTvaGroupe();

        $obj->setAz4247(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4247());
    }

    /**
     * Tests the setAz4248() method.
     *
     * @return void
     */
    public function testSetAz4248() {

        $obj = new DecTvaGroupe();

        $obj->setAz4248(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4248());
    }

    /**
     * Tests the setAz4249() method.
     *
     * @return void
     */
    public function testSetAz4249() {

        $obj = new DecTvaGroupe();

        $obj->setAz4249(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4249());
    }

    /**
     * Tests the setAz4250() method.
     *
     * @return void
     */
    public function testSetAz4250() {

        $obj = new DecTvaGroupe();

        $obj->setAz4250(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4250());
    }

    /**
     * Tests the setAz4251() method.
     *
     * @return void
     */
    public function testSetAz4251() {

        $obj = new DecTvaGroupe();

        $obj->setAz4251(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4251());
    }

    /**
     * Tests the setAz4252() method.
     *
     * @return void
     */
    public function testSetAz4252() {

        $obj = new DecTvaGroupe();

        $obj->setAz4252(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252());
    }

    /**
     * Tests the setAz4254() method.
     *
     * @return void
     */
    public function testSetAz4254() {

        $obj = new DecTvaGroupe();

        $obj->setAz4254(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4254());
    }

    /**
     * Tests the setAz4255() method.
     *
     * @return void
     */
    public function testSetAz4255() {

        $obj = new DecTvaGroupe();

        $obj->setAz4255(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4255());
    }

    /**
     * Tests the setAz4256() method.
     *
     * @return void
     */
    public function testSetAz4256() {

        $obj = new DecTvaGroupe();

        $obj->setAz4256(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4256());
    }

    /**
     * Tests the setAz4257() method.
     *
     * @return void
     */
    public function testSetAz4257() {

        $obj = new DecTvaGroupe();

        $obj->setAz4257(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4257());
    }

    /**
     * Tests the setAz4258() method.
     *
     * @return void
     */
    public function testSetAz4258() {

        $obj = new DecTvaGroupe();

        $obj->setAz4258(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4258());
    }

    /**
     * Tests the setAz4259() method.
     *
     * @return void
     */
    public function testSetAz4259() {

        $obj = new DecTvaGroupe();

        $obj->setAz4259(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4259());
    }

    /**
     * Tests the setAz4260() method.
     *
     * @return void
     */
    public function testSetAz4260() {

        $obj = new DecTvaGroupe();

        $obj->setAz4260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4260());
    }

    /**
     * Tests the setAz4261() method.
     *
     * @return void
     */
    public function testSetAz4261() {

        $obj = new DecTvaGroupe();

        $obj->setAz4261(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4261());
    }

    /**
     * Tests the setAz4262() method.
     *
     * @return void
     */
    public function testSetAz4262() {

        $obj = new DecTvaGroupe();

        $obj->setAz4262(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4262());
    }

    /**
     * Tests the setAz4263() method.
     *
     * @return void
     */
    public function testSetAz4263() {

        $obj = new DecTvaGroupe();

        $obj->setAz4263(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4263());
    }

    /**
     * Tests the setAz4264() method.
     *
     * @return void
     */
    public function testSetAz4264() {

        $obj = new DecTvaGroupe();

        $obj->setAz4264(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4264());
    }

    /**
     * Tests the setAz4265() method.
     *
     * @return void
     */
    public function testSetAz4265() {

        $obj = new DecTvaGroupe();

        $obj->setAz4265(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4265());
    }

    /**
     * Tests the setAz4266() method.
     *
     * @return void
     */
    public function testSetAz4266() {

        $obj = new DecTvaGroupe();

        $obj->setAz4266(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4266());
    }

    /**
     * Tests the setAz4267() method.
     *
     * @return void
     */
    public function testSetAz4267() {

        $obj = new DecTvaGroupe();

        $obj->setAz4267(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4267());
    }

    /**
     * Tests the setAz4268() method.
     *
     * @return void
     */
    public function testSetAz4268() {

        $obj = new DecTvaGroupe();

        $obj->setAz4268(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268());
    }

    /**
     * Tests the setAz4268Base() method.
     *
     * @return void
     */
    public function testSetAz4268Base() {

        $obj = new DecTvaGroupe();

        $obj->setAz4268Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268Base());
    }

    /**
     * Tests the setAz4269() method.
     *
     * @return void
     */
    public function testSetAz4269() {

        $obj = new DecTvaGroupe();

        $obj->setAz4269(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269());
    }

    /**
     * Tests the setAz4269Base() method.
     *
     * @return void
     */
    public function testSetAz4269Base() {

        $obj = new DecTvaGroupe();

        $obj->setAz4269Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269Base());
    }

    /**
     * Tests the setAz4270() method.
     *
     * @return void
     */
    public function testSetAz4270() {

        $obj = new DecTvaGroupe();

        $obj->setAz4270(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270());
    }

    /**
     * Tests the setAz4270Base() method.
     *
     * @return void
     */
    public function testSetAz4270Base() {

        $obj = new DecTvaGroupe();

        $obj->setAz4270Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base());
    }

    /**
     * Tests the setAz4271() method.
     *
     * @return void
     */
    public function testSetAz4271() {

        $obj = new DecTvaGroupe();

        $obj->setAz4271(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271());
    }

    /**
     * Tests the setAz4271Base() method.
     *
     * @return void
     */
    public function testSetAz4271Base() {

        $obj = new DecTvaGroupe();

        $obj->setAz4271Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271Base());
    }

    /**
     * Tests the setAz4272() method.
     *
     * @return void
     */
    public function testSetAz4272() {

        $obj = new DecTvaGroupe();

        $obj->setAz4272(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4272());
    }

    /**
     * Tests the setAz4274() method.
     *
     * @return void
     */
    public function testSetAz4274() {

        $obj = new DecTvaGroupe();

        $obj->setAz4274(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4274());
    }

    /**
     * Tests the setAz4276() method.
     *
     * @return void
     */
    public function testSetAz4276() {

        $obj = new DecTvaGroupe();

        $obj->setAz4276(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276());
    }

    /**
     * Tests the setAz4276Base() method.
     *
     * @return void
     */
    public function testSetAz4276Base() {

        $obj = new DecTvaGroupe();

        $obj->setAz4276Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276Base());
    }

    /**
     * Tests the setAz4277() method.
     *
     * @return void
     */
    public function testSetAz4277() {

        $obj = new DecTvaGroupe();

        $obj->setAz4277(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277());
    }

    /**
     * Tests the setAz4277Base() method.
     *
     * @return void
     */
    public function testSetAz4277Base() {

        $obj = new DecTvaGroupe();

        $obj->setAz4277Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277Base());
    }

    /**
     * Tests the setAz4278() method.
     *
     * @return void
     */
    public function testSetAz4278() {

        $obj = new DecTvaGroupe();

        $obj->setAz4278(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4278());
    }

    /**
     * Tests the setAz4279() method.
     *
     * @return void
     */
    public function testSetAz4279() {

        $obj = new DecTvaGroupe();

        $obj->setAz4279(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4279());
    }

    /**
     * Tests the setAz4280() method.
     *
     * @return void
     */
    public function testSetAz4280() {

        $obj = new DecTvaGroupe();

        $obj->setAz4280(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4280());
    }

    /**
     * Tests the setAz4281() method.
     *
     * @return void
     */
    public function testSetAz4281() {

        $obj = new DecTvaGroupe();

        $obj->setAz4281(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4281());
    }

    /**
     * Tests the setAz4282() method.
     *
     * @return void
     */
    public function testSetAz4282() {

        $obj = new DecTvaGroupe();

        $obj->setAz4282(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282());
    }

    /**
     * Tests the setAz4283() method.
     *
     * @return void
     */
    public function testSetAz4283() {

        $obj = new DecTvaGroupe();

        $obj->setAz4283(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4283());
    }

    /**
     * Tests the setAz4284() method.
     *
     * @return void
     */
    public function testSetAz4284() {

        $obj = new DecTvaGroupe();

        $obj->setAz4284(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4284());
    }

    /**
     * Tests the setAz4285() method.
     *
     * @return void
     */
    public function testSetAz4285() {

        $obj = new DecTvaGroupe();

        $obj->setAz4285(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4285());
    }

    /**
     * Tests the setAz4288() method.
     *
     * @return void
     */
    public function testSetAz4288() {

        $obj = new DecTvaGroupe();

        $obj->setAz4288(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4288());
    }

    /**
     * Tests the setAz4289() method.
     *
     * @return void
     */
    public function testSetAz4289() {

        $obj = new DecTvaGroupe();

        $obj->setAz4289(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289());
    }

    /**
     * Tests the setAz4290() method.
     *
     * @return void
     */
    public function testSetAz4290() {

        $obj = new DecTvaGroupe();

        $obj->setAz4290(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4290());
    }

    /**
     * Tests the setAz59Mtt() method.
     *
     * @return void
     */
    public function testSetAz59Mtt() {

        $obj = new DecTvaGroupe();

        $obj->setAz59Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz59Mtt());
    }

    /**
     * Tests the setAzEsMtt() method.
     *
     * @return void
     */
    public function testSetAzEsMtt() {

        $obj = new DecTvaGroupe();

        $obj->setAzEsMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEsMtt());
    }

    /**
     * Tests the setAzEuMtt() method.
     *
     * @return void
     */
    public function testSetAzEuMtt() {

        $obj = new DecTvaGroupe();

        $obj->setAzEuMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEuMtt());
    }

    /**
     * Tests the setAzEzCode() method.
     *
     * @return void
     */
    public function testSetAzEzCode() {

        $obj = new DecTvaGroupe();

        $obj->setAzEzCode("azEzCode");
        $this->assertEquals("azEzCode", $obj->getAzEzCode());
    }

    /**
     * Tests the setAzEzLib() method.
     *
     * @return void
     */
    public function testSetAzEzLib() {

        $obj = new DecTvaGroupe();

        $obj->setAzEzLib("azEzLib");
        $this->assertEquals("azEzLib", $obj->getAzEzLib());
    }

    /**
     * Tests the setAzEzMtt() method.
     *
     * @return void
     */
    public function testSetAzEzMtt() {

        $obj = new DecTvaGroupe();

        $obj->setAzEzMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEzMtt());
    }

    /**
     * Tests the setAzGaCode() method.
     *
     * @return void
     */
    public function testSetAzGaCode() {

        $obj = new DecTvaGroupe();

        $obj->setAzGaCode("azGaCode");
        $this->assertEquals("azGaCode", $obj->getAzGaCode());
    }

    /**
     * Tests the setAzGaLib() method.
     *
     * @return void
     */
    public function testSetAzGaLib() {

        $obj = new DecTvaGroupe();

        $obj->setAzGaLib("azGaLib");
        $this->assertEquals("azGaLib", $obj->getAzGaLib());
    }

    /**
     * Tests the setAzGaMtt() method.
     *
     * @return void
     */
    public function testSetAzGaMtt() {

        $obj = new DecTvaGroupe();

        $obj->setAzGaMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGaMtt());
    }

    /**
     * Tests the setAzGcMtt() method.
     *
     * @return void
     */
    public function testSetAzGcMtt() {

        $obj = new DecTvaGroupe();

        $obj->setAzGcMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGcMtt());
    }

    /**
     * Tests the setAzHi() method.
     *
     * @return void
     */
    public function testSetAzHi() {

        $obj = new DecTvaGroupe();

        $obj->setAzHi(10.092018);
        $this->assertEquals(10.092018, $obj->getAzHi());
    }

    /**
     * Tests the setAzJb() method.
     *
     * @return void
     */
    public function testSetAzJb() {

        $obj = new DecTvaGroupe();

        $obj->setAzJb(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJb());
    }

    /**
     * Tests the setAzJc() method.
     *
     * @return void
     */
    public function testSetAzJc() {

        $obj = new DecTvaGroupe();

        $obj->setAzJc(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJc());
    }

    /**
     * Tests the setAzTotalB() method.
     *
     * @return void
     */
    public function testSetAzTotalB() {

        $obj = new DecTvaGroupe();

        $obj->setAzTotalB(10.092018);
        $this->assertEquals(10.092018, $obj->getAzTotalB());
    }

    /**
     * Tests the setCorres1() method.
     *
     * @return void
     */
    public function testSetCorres1() {

        $obj = new DecTvaGroupe();

        $obj->setCorres1("corres1");
        $this->assertEquals("corres1", $obj->getCorres1());
    }

    /**
     * Tests the setCorres2() method.
     *
     * @return void
     */
    public function testSetCorres2() {

        $obj = new DecTvaGroupe();

        $obj->setCorres2("corres2");
        $this->assertEquals("corres2", $obj->getCorres2());
    }

    /**
     * Tests the setCorres3() method.
     *
     * @return void
     */
    public function testSetCorres3() {

        $obj = new DecTvaGroupe();

        $obj->setCorres3("corres3");
        $this->assertEquals("corres3", $obj->getCorres3());
    }

    /**
     * Tests the setCorres4() method.
     *
     * @return void
     */
    public function testSetCorres4() {

        $obj = new DecTvaGroupe();

        $obj->setCorres4("corres4");
        $this->assertEquals("corres4", $obj->getCorres4());
    }

    /**
     * Tests the setCorres5() method.
     *
     * @return void
     */
    public function testSetCorres5() {

        $obj = new DecTvaGroupe();

        $obj->setCorres5("corres5");
        $this->assertEquals("corres5", $obj->getCorres5());
    }

    /**
     * Tests the setDateDec() method.
     *
     * @return void
     */
    public function testSetDateDec() {

        $obj = new DecTvaGroupe();

        $obj->setDateDec("dateDec");
        $this->assertEquals("dateDec", $obj->getDateDec());
    }

    /**
     * Tests the setDebutExo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutExo() {

        // Set a Date/time mock.
        $debutExo = new DateTime("2018-09-10");

        $obj = new DecTvaGroupe();

        $obj->setDebutExo($debutExo);
        $this->assertSame($debutExo, $obj->getDebutExo());
    }

    /**
     * Tests the setFinExo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinExo() {

        // Set a Date/time mock.
        $finExo = new DateTime("2018-09-10");

        $obj = new DecTvaGroupe();

        $obj->setFinExo($finExo);
        $this->assertSame($finExo, $obj->getFinExo());
    }

    /**
     * Tests the setLibDoss() method.
     *
     * @return void
     */
    public function testSetLibDoss() {

        $obj = new DecTvaGroupe();

        $obj->setLibDoss("libDoss");
        $this->assertEquals("libDoss", $obj->getLibDoss());
    }

    /**
     * Tests the setMentionExpresse() method.
     *
     * @return void
     */
    public function testSetMentionExpresse() {

        $obj = new DecTvaGroupe();

        $obj->setMentionExpresse(true);
        $this->assertEquals(true, $obj->getMentionExpresse());
    }

    /**
     * Tests the setNoDoss() method.
     *
     * @return void
     */
    public function testSetNoDoss() {

        $obj = new DecTvaGroupe();

        $obj->setNoDoss("noDoss");
        $this->assertEquals("noDoss", $obj->getNoDoss());
    }

    /**
     * Tests the setNoLotEcritures() method.
     *
     * @return void
     */
    public function testSetNoLotEcritures() {

        $obj = new DecTvaGroupe();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new DecTvaGroupe();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setPaiementImputation() method.
     *
     * @return void
     */
    public function testSetPaiementImputation() {

        $obj = new DecTvaGroupe();

        $obj->setPaiementImputation(true);
        $this->assertEquals(true, $obj->getPaiementImputation());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTvaGroupe();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setSelAdresseDest() method.
     *
     * @return void
     */
    public function testSetSelAdresseDest() {

        $obj = new DecTvaGroupe();

        $obj->setSelAdresseDest("selAdresseDest");
        $this->assertEquals("selAdresseDest", $obj->getSelAdresseDest());
    }

    /**
     * Tests the setTotal() method.
     *
     * @return void
     */
    public function testSetTotal() {

        $obj = new DecTvaGroupe();

        $obj->setTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotal());
    }

    /**
     * Tests the setTypeDec() method.
     *
     * @return void
     */
    public function testSetTypeDec() {

        $obj = new DecTvaGroupe();

        $obj->setTypeDec("typeDec");
        $this->assertEquals("typeDec", $obj->getTypeDec());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille() {

        $obj = new DecTvaGroupe();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Tests the setZ0100b() method.
     *
     * @return void
     */
    public function testSetZ0100b() {

        $obj = new DecTvaGroupe();

        $obj->setZ0100b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0100b());
    }

    /**
     * Tests the setZ0121b() method.
     *
     * @return void
     */
    public function testSetZ0121b() {

        $obj = new DecTvaGroupe();

        $obj->setZ0121b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0121b());
    }

    /**
     * Tests the setZ0600() method.
     *
     * @return void
     */
    public function testSetZ0600() {

        $obj = new DecTvaGroupe();

        $obj->setZ0600(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0600());
    }

    /**
     * Tests the setZ0705() method.
     *
     * @return void
     */
    public function testSetZ0705() {

        $obj = new DecTvaGroupe();

        $obj->setZ0705(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0705());
    }

    /**
     * Tests the setZ0900b() method.
     *
     * @return void
     */
    public function testSetZ0900b() {

        $obj = new DecTvaGroupe();

        $obj->setZ0900b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0900b());
    }

    /**
     * Tests the setZ0920b() method.
     *
     * @return void
     */
    public function testSetZ0920b() {

        $obj = new DecTvaGroupe();

        $obj->setZ0920b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0920b());
    }

    /**
     * Tests the setZ12Code() method.
     *
     * @return void
     */
    public function testSetZ12Code() {

        $obj = new DecTvaGroupe();

        $obj->setZ12Code("z12Code");
        $this->assertEquals("z12Code", $obj->getZ12Code());
    }

    /**
     * Tests the setZ12Lib() method.
     *
     * @return void
     */
    public function testSetZ12Lib() {

        $obj = new DecTvaGroupe();

        $obj->setZ12Lib("z12Lib");
        $this->assertEquals("z12Lib", $obj->getZ12Lib());
    }

    /**
     * Tests the setZ12Taxe() method.
     *
     * @return void
     */
    public function testSetZ12Taxe() {

        $obj = new DecTvaGroupe();

        $obj->setZ12Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ12Taxe());
    }

    /**
     * Tests the setZ14() method.
     *
     * @return void
     */
    public function testSetZ14() {

        $obj = new DecTvaGroupe();

        $obj->setZ14(10.092018);
        $this->assertEquals(10.092018, $obj->getZ14());
    }

    /**
     * Tests the setZ196b() method.
     *
     * @return void
     */
    public function testSetZ196b() {

        $obj = new DecTvaGroupe();

        $obj->setZ196b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ196b());
    }

    /**
     * Tests the setZ21() method.
     *
     * @return void
     */
    public function testSetZ21() {

        $obj = new DecTvaGroupe();

        $obj->setZ21(10.092018);
        $this->assertEquals(10.092018, $obj->getZ21());
    }

    /**
     * Tests the setZ25() method.
     *
     * @return void
     */
    public function testSetZ25() {

        $obj = new DecTvaGroupe();

        $obj->setZ25(10.092018);
        $this->assertEquals(10.092018, $obj->getZ25());
    }

    /**
     * Tests the setZ4227() method.
     *
     * @return void
     */
    public function testSetZ4227() {

        $obj = new DecTvaGroupe();

        $obj->setZ4227(10.092018);
        $this->assertEquals(10.092018, $obj->getZ4227());
    }

    /**
     * Tests the setZ8001() method.
     *
     * @return void
     */
    public function testSetZ8001() {

        $obj = new DecTvaGroupe();

        $obj->setZ8001(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8001());
    }

    /**
     * Tests the setZ8002() method.
     *
     * @return void
     */
    public function testSetZ8002() {

        $obj = new DecTvaGroupe();

        $obj->setZ8002(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8002());
    }

    /**
     * Tests the setZ8003() method.
     *
     * @return void
     */
    public function testSetZ8003() {

        $obj = new DecTvaGroupe();

        $obj->setZ8003(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003());
    }

    /**
     * Tests the setZ8005() method.
     *
     * @return void
     */
    public function testSetZ8005() {

        $obj = new DecTvaGroupe();

        $obj->setZ8005(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8005());
    }

    /**
     * Tests the setZ8006() method.
     *
     * @return void
     */
    public function testSetZ8006() {

        $obj = new DecTvaGroupe();

        $obj->setZ8006(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8006());
    }

    /**
     * Tests the setZ9979() method.
     *
     * @return void
     */
    public function testSetZ9979() {

        $obj = new DecTvaGroupe();

        $obj->setZ9979(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9979());
    }

    /**
     * Tests the setZ9989() method.
     *
     * @return void
     */
    public function testSetZ9989() {

        $obj = new DecTvaGroupe();

        $obj->setZ9989(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9989());
    }

    /**
     * Tests the setZ9991() method.
     *
     * @return void
     */
    public function testSetZ9991() {

        $obj = new DecTvaGroupe();

        $obj->setZ9991(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9991());
    }

    /**
     * Tests the setZ9999() method.
     *
     * @return void
     */
    public function testSetZ9999() {

        $obj = new DecTvaGroupe();

        $obj->setZ9999(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9999());
    }

    /**
     * Tests the setZ9BTaxe() method.
     *
     * @return void
     */
    public function testSetZ9BTaxe() {

        $obj = new DecTvaGroupe();

        $obj->setZ9BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9BTaxe());
    }

    /**
     * Tests the setiLock() method.
     *
     * @return void
     */
    public function testSetiLock() {

        $obj = new DecTvaGroupe();

        $obj->setiLock(10);
        $this->assertEquals(10, $obj->getiLock());
    }

    /**
     * Tests the setz0151b() method.
     *
     * @return void
     */
    public function testSetz0151b() {

        $obj = new DecTvaGroupe();

        $obj->setz0151b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151b());
    }

    /**
     * Tests the setz0207b() method.
     *
     * @return void
     */
    public function testSetz0207b() {

        $obj = new DecTvaGroupe();

        $obj->setz0207b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207b());
    }
}
