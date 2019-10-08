<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTVAGroupe;

/**
 * Dec t v a groupe model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTVAGroupeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTVAGroupe();

        $this->assertNull($obj->getAZ0990b());
        $this->assertNull($obj->getAZ1010b());
        $this->assertNull($obj->getAZ1020b());
        $this->assertNull($obj->getAZ1030b());
        $this->assertNull($obj->getAZ1040b());
        $this->assertNull($obj->getAZ1050b());
        $this->assertNull($obj->getAZ1080b());
        $this->assertNull($obj->getAZ1090b());
        $this->assertNull($obj->getAZ1100b());
        $this->assertNull($obj->getAZ1110b());
        $this->assertNull($obj->getAZ1120b());
        $this->assertNull($obj->getAZ3240());
        $this->assertNull($obj->getAZ3510());
        $this->assertNull($obj->getAZ3520());
        $this->assertNull($obj->getAZ38Code());
        $this->assertNull($obj->getAZ38Lib());
        $this->assertNull($obj->getAZ38b());
        $this->assertNull($obj->getAZ4200());
        $this->assertNull($obj->getAZ4201());
        $this->assertNull($obj->getAZ4204());
        $this->assertNull($obj->getAZ4206());
        $this->assertNull($obj->getAZ4207());
        $this->assertNull($obj->getAZ4213());
        $this->assertNull($obj->getAZ4215());
        $this->assertNull($obj->getAZ4220());
        $this->assertNull($obj->getAZ4222());
        $this->assertNull($obj->getAZ4223());
        $this->assertNull($obj->getAZ4228Mtt());
        $this->assertNull($obj->getAZ4230());
        $this->assertNull($obj->getAZ4231());
        $this->assertNull($obj->getAZ4232());
        $this->assertNull($obj->getAZ4233());
        $this->assertNull($obj->getAZ4234());
        $this->assertNull($obj->getAZ4235());
        $this->assertNull($obj->getAZ59Mtt());
        $this->assertNull($obj->getAZESMtt());
        $this->assertNull($obj->getAZEUMtt());
        $this->assertNull($obj->getAZEZCode());
        $this->assertNull($obj->getAZEZLib());
        $this->assertNull($obj->getAZEZMTT());
        $this->assertNull($obj->getAZGACode());
        $this->assertNull($obj->getAZGALib());
        $this->assertNull($obj->getAZGAMTT());
        $this->assertNull($obj->getAZGCMtt());
        $this->assertNull($obj->getAZHI());
        $this->assertNull($obj->getAZJB());
        $this->assertNull($obj->getAZJC());
        $this->assertNull($obj->getAZTotalB());
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
        $this->assertNull($obj->getz0600());
        $this->assertNull($obj->getz0900b());
    }

    /**
     * Tests the setAZ0990b() method.
     *
     * @return void
     */
    public function testSetAZ0990b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ0990b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ0990b());
    }

    /**
     * Tests the setAZ1010b() method.
     *
     * @return void
     */
    public function testSetAZ1010b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1010b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1010b());
    }

    /**
     * Tests the setAZ1020b() method.
     *
     * @return void
     */
    public function testSetAZ1020b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1020b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1020b());
    }

    /**
     * Tests the setAZ1030b() method.
     *
     * @return void
     */
    public function testSetAZ1030b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1030b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1030b());
    }

    /**
     * Tests the setAZ1040b() method.
     *
     * @return void
     */
    public function testSetAZ1040b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1040b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1040b());
    }

    /**
     * Tests the setAZ1050b() method.
     *
     * @return void
     */
    public function testSetAZ1050b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1050b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1050b());
    }

    /**
     * Tests the setAZ1080b() method.
     *
     * @return void
     */
    public function testSetAZ1080b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1080b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1080b());
    }

    /**
     * Tests the setAZ1090b() method.
     *
     * @return void
     */
    public function testSetAZ1090b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1090b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1090b());
    }

    /**
     * Tests the setAZ1100b() method.
     *
     * @return void
     */
    public function testSetAZ1100b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1100b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1100b());
    }

    /**
     * Tests the setAZ1110b() method.
     *
     * @return void
     */
    public function testSetAZ1110b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1110b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1110b());
    }

    /**
     * Tests the setAZ1120b() method.
     *
     * @return void
     */
    public function testSetAZ1120b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ1120b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ1120b());
    }

    /**
     * Tests the setAZ3240() method.
     *
     * @return void
     */
    public function testSetAZ3240() {

        $obj = new DecTVAGroupe();

        $obj->setAZ3240(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ3240());
    }

    /**
     * Tests the setAZ3510() method.
     *
     * @return void
     */
    public function testSetAZ3510() {

        $obj = new DecTVAGroupe();

        $obj->setAZ3510(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ3510());
    }

    /**
     * Tests the setAZ3520() method.
     *
     * @return void
     */
    public function testSetAZ3520() {

        $obj = new DecTVAGroupe();

        $obj->setAZ3520(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ3520());
    }

    /**
     * Tests the setAZ38Code() method.
     *
     * @return void
     */
    public function testSetAZ38Code() {

        $obj = new DecTVAGroupe();

        $obj->setAZ38Code("aZ38Code");
        $this->assertEquals("aZ38Code", $obj->getAZ38Code());
    }

    /**
     * Tests the setAZ38Lib() method.
     *
     * @return void
     */
    public function testSetAZ38Lib() {

        $obj = new DecTVAGroupe();

        $obj->setAZ38Lib("aZ38Lib");
        $this->assertEquals("aZ38Lib", $obj->getAZ38Lib());
    }

    /**
     * Tests the setAZ38b() method.
     *
     * @return void
     */
    public function testSetAZ38b() {

        $obj = new DecTVAGroupe();

        $obj->setAZ38b(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ38b());
    }

    /**
     * Tests the setAZ4200() method.
     *
     * @return void
     */
    public function testSetAZ4200() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4200(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4200());
    }

    /**
     * Tests the setAZ4201() method.
     *
     * @return void
     */
    public function testSetAZ4201() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4201(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4201());
    }

    /**
     * Tests the setAZ4204() method.
     *
     * @return void
     */
    public function testSetAZ4204() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4204(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4204());
    }

    /**
     * Tests the setAZ4206() method.
     *
     * @return void
     */
    public function testSetAZ4206() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4206(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4206());
    }

    /**
     * Tests the setAZ4207() method.
     *
     * @return void
     */
    public function testSetAZ4207() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4207(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4207());
    }

    /**
     * Tests the setAZ4213() method.
     *
     * @return void
     */
    public function testSetAZ4213() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4213(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4213());
    }

    /**
     * Tests the setAZ4215() method.
     *
     * @return void
     */
    public function testSetAZ4215() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4215(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4215());
    }

    /**
     * Tests the setAZ4220() method.
     *
     * @return void
     */
    public function testSetAZ4220() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4220(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4220());
    }

    /**
     * Tests the setAZ4222() method.
     *
     * @return void
     */
    public function testSetAZ4222() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4222(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4222());
    }

    /**
     * Tests the setAZ4223() method.
     *
     * @return void
     */
    public function testSetAZ4223() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4223(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4223());
    }

    /**
     * Tests the setAZ4228Mtt() method.
     *
     * @return void
     */
    public function testSetAZ4228Mtt() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4228Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4228Mtt());
    }

    /**
     * Tests the setAZ4230() method.
     *
     * @return void
     */
    public function testSetAZ4230() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4230(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4230());
    }

    /**
     * Tests the setAZ4231() method.
     *
     * @return void
     */
    public function testSetAZ4231() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4231(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4231());
    }

    /**
     * Tests the setAZ4232() method.
     *
     * @return void
     */
    public function testSetAZ4232() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4232(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4232());
    }

    /**
     * Tests the setAZ4233() method.
     *
     * @return void
     */
    public function testSetAZ4233() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4233(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4233());
    }

    /**
     * Tests the setAZ4234() method.
     *
     * @return void
     */
    public function testSetAZ4234() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4234(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4234());
    }

    /**
     * Tests the setAZ4235() method.
     *
     * @return void
     */
    public function testSetAZ4235() {

        $obj = new DecTVAGroupe();

        $obj->setAZ4235(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ4235());
    }

    /**
     * Tests the setAZ59Mtt() method.
     *
     * @return void
     */
    public function testSetAZ59Mtt() {

        $obj = new DecTVAGroupe();

        $obj->setAZ59Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAZ59Mtt());
    }

    /**
     * Tests the setAZESMtt() method.
     *
     * @return void
     */
    public function testSetAZESMtt() {

        $obj = new DecTVAGroupe();

        $obj->setAZESMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAZESMtt());
    }

    /**
     * Tests the setAZEUMtt() method.
     *
     * @return void
     */
    public function testSetAZEUMtt() {

        $obj = new DecTVAGroupe();

        $obj->setAZEUMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAZEUMtt());
    }

    /**
     * Tests the setAZEZCode() method.
     *
     * @return void
     */
    public function testSetAZEZCode() {

        $obj = new DecTVAGroupe();

        $obj->setAZEZCode("aZEZCode");
        $this->assertEquals("aZEZCode", $obj->getAZEZCode());
    }

    /**
     * Tests the setAZEZLib() method.
     *
     * @return void
     */
    public function testSetAZEZLib() {

        $obj = new DecTVAGroupe();

        $obj->setAZEZLib("aZEZLib");
        $this->assertEquals("aZEZLib", $obj->getAZEZLib());
    }

    /**
     * Tests the setAZEZMTT() method.
     *
     * @return void
     */
    public function testSetAZEZMTT() {

        $obj = new DecTVAGroupe();

        $obj->setAZEZMTT(10.092018);
        $this->assertEquals(10.092018, $obj->getAZEZMTT());
    }

    /**
     * Tests the setAZGACode() method.
     *
     * @return void
     */
    public function testSetAZGACode() {

        $obj = new DecTVAGroupe();

        $obj->setAZGACode("aZGACode");
        $this->assertEquals("aZGACode", $obj->getAZGACode());
    }

    /**
     * Tests the setAZGALib() method.
     *
     * @return void
     */
    public function testSetAZGALib() {

        $obj = new DecTVAGroupe();

        $obj->setAZGALib("aZGALib");
        $this->assertEquals("aZGALib", $obj->getAZGALib());
    }

    /**
     * Tests the setAZGAMTT() method.
     *
     * @return void
     */
    public function testSetAZGAMTT() {

        $obj = new DecTVAGroupe();

        $obj->setAZGAMTT(10.092018);
        $this->assertEquals(10.092018, $obj->getAZGAMTT());
    }

    /**
     * Tests the setAZGCMtt() method.
     *
     * @return void
     */
    public function testSetAZGCMtt() {

        $obj = new DecTVAGroupe();

        $obj->setAZGCMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAZGCMtt());
    }

    /**
     * Tests the setAZHI() method.
     *
     * @return void
     */
    public function testSetAZHI() {

        $obj = new DecTVAGroupe();

        $obj->setAZHI(10.092018);
        $this->assertEquals(10.092018, $obj->getAZHI());
    }

    /**
     * Tests the setAZJB() method.
     *
     * @return void
     */
    public function testSetAZJB() {

        $obj = new DecTVAGroupe();

        $obj->setAZJB(10.092018);
        $this->assertEquals(10.092018, $obj->getAZJB());
    }

    /**
     * Tests the setAZJC() method.
     *
     * @return void
     */
    public function testSetAZJC() {

        $obj = new DecTVAGroupe();

        $obj->setAZJC(10.092018);
        $this->assertEquals(10.092018, $obj->getAZJC());
    }

    /**
     * Tests the setAZTotalB() method.
     *
     * @return void
     */
    public function testSetAZTotalB() {

        $obj = new DecTVAGroupe();

        $obj->setAZTotalB(10.092018);
        $this->assertEquals(10.092018, $obj->getAZTotalB());
    }

    /**
     * Tests the setAz1081b() method.
     *
     * @return void
     */
    public function testSetAz1081b() {

        $obj = new DecTVAGroupe();

        $obj->setAz1081b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1081b());
    }

    /**
     * Tests the setAz4236() method.
     *
     * @return void
     */
    public function testSetAz4236() {

        $obj = new DecTVAGroupe();

        $obj->setAz4236(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4236());
    }

    /**
     * Tests the setAz4237() method.
     *
     * @return void
     */
    public function testSetAz4237() {

        $obj = new DecTVAGroupe();

        $obj->setAz4237(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4237());
    }

    /**
     * Tests the setAz4238() method.
     *
     * @return void
     */
    public function testSetAz4238() {

        $obj = new DecTVAGroupe();

        $obj->setAz4238(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4238());
    }

    /**
     * Tests the setAz4239() method.
     *
     * @return void
     */
    public function testSetAz4239() {

        $obj = new DecTVAGroupe();

        $obj->setAz4239(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4239());
    }

    /**
     * Tests the setAz4240() method.
     *
     * @return void
     */
    public function testSetAz4240() {

        $obj = new DecTVAGroupe();

        $obj->setAz4240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240());
    }

    /**
     * Tests the setAz4241() method.
     *
     * @return void
     */
    public function testSetAz4241() {

        $obj = new DecTVAGroupe();

        $obj->setAz4241(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4241());
    }

    /**
     * Tests the setAz4242() method.
     *
     * @return void
     */
    public function testSetAz4242() {

        $obj = new DecTVAGroupe();

        $obj->setAz4242(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4242());
    }

    /**
     * Tests the setAz4243() method.
     *
     * @return void
     */
    public function testSetAz4243() {

        $obj = new DecTVAGroupe();

        $obj->setAz4243(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4243());
    }

    /**
     * Tests the setAz4244() method.
     *
     * @return void
     */
    public function testSetAz4244() {

        $obj = new DecTVAGroupe();

        $obj->setAz4244(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4244());
    }

    /**
     * Tests the setAz4245() method.
     *
     * @return void
     */
    public function testSetAz4245() {

        $obj = new DecTVAGroupe();

        $obj->setAz4245(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4245());
    }

    /**
     * Tests the setAz4246() method.
     *
     * @return void
     */
    public function testSetAz4246() {

        $obj = new DecTVAGroupe();

        $obj->setAz4246(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4246());
    }

    /**
     * Tests the setAz4247() method.
     *
     * @return void
     */
    public function testSetAz4247() {

        $obj = new DecTVAGroupe();

        $obj->setAz4247(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4247());
    }

    /**
     * Tests the setAz4248() method.
     *
     * @return void
     */
    public function testSetAz4248() {

        $obj = new DecTVAGroupe();

        $obj->setAz4248(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4248());
    }

    /**
     * Tests the setAz4249() method.
     *
     * @return void
     */
    public function testSetAz4249() {

        $obj = new DecTVAGroupe();

        $obj->setAz4249(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4249());
    }

    /**
     * Tests the setAz4250() method.
     *
     * @return void
     */
    public function testSetAz4250() {

        $obj = new DecTVAGroupe();

        $obj->setAz4250(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4250());
    }

    /**
     * Tests the setAz4251() method.
     *
     * @return void
     */
    public function testSetAz4251() {

        $obj = new DecTVAGroupe();

        $obj->setAz4251(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4251());
    }

    /**
     * Tests the setAz4252() method.
     *
     * @return void
     */
    public function testSetAz4252() {

        $obj = new DecTVAGroupe();

        $obj->setAz4252(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252());
    }

    /**
     * Tests the setAz4254() method.
     *
     * @return void
     */
    public function testSetAz4254() {

        $obj = new DecTVAGroupe();

        $obj->setAz4254(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4254());
    }

    /**
     * Tests the setAz4255() method.
     *
     * @return void
     */
    public function testSetAz4255() {

        $obj = new DecTVAGroupe();

        $obj->setAz4255(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4255());
    }

    /**
     * Tests the setAz4256() method.
     *
     * @return void
     */
    public function testSetAz4256() {

        $obj = new DecTVAGroupe();

        $obj->setAz4256(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4256());
    }

    /**
     * Tests the setAz4257() method.
     *
     * @return void
     */
    public function testSetAz4257() {

        $obj = new DecTVAGroupe();

        $obj->setAz4257(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4257());
    }

    /**
     * Tests the setAz4258() method.
     *
     * @return void
     */
    public function testSetAz4258() {

        $obj = new DecTVAGroupe();

        $obj->setAz4258(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4258());
    }

    /**
     * Tests the setAz4259() method.
     *
     * @return void
     */
    public function testSetAz4259() {

        $obj = new DecTVAGroupe();

        $obj->setAz4259(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4259());
    }

    /**
     * Tests the setAz4260() method.
     *
     * @return void
     */
    public function testSetAz4260() {

        $obj = new DecTVAGroupe();

        $obj->setAz4260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4260());
    }

    /**
     * Tests the setAz4261() method.
     *
     * @return void
     */
    public function testSetAz4261() {

        $obj = new DecTVAGroupe();

        $obj->setAz4261(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4261());
    }

    /**
     * Tests the setAz4262() method.
     *
     * @return void
     */
    public function testSetAz4262() {

        $obj = new DecTVAGroupe();

        $obj->setAz4262(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4262());
    }

    /**
     * Tests the setAz4263() method.
     *
     * @return void
     */
    public function testSetAz4263() {

        $obj = new DecTVAGroupe();

        $obj->setAz4263(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4263());
    }

    /**
     * Tests the setAz4264() method.
     *
     * @return void
     */
    public function testSetAz4264() {

        $obj = new DecTVAGroupe();

        $obj->setAz4264(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4264());
    }

    /**
     * Tests the setAz4265() method.
     *
     * @return void
     */
    public function testSetAz4265() {

        $obj = new DecTVAGroupe();

        $obj->setAz4265(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4265());
    }

    /**
     * Tests the setAz4266() method.
     *
     * @return void
     */
    public function testSetAz4266() {

        $obj = new DecTVAGroupe();

        $obj->setAz4266(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4266());
    }

    /**
     * Tests the setAz4267() method.
     *
     * @return void
     */
    public function testSetAz4267() {

        $obj = new DecTVAGroupe();

        $obj->setAz4267(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4267());
    }

    /**
     * Tests the setAz4268() method.
     *
     * @return void
     */
    public function testSetAz4268() {

        $obj = new DecTVAGroupe();

        $obj->setAz4268(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268());
    }

    /**
     * Tests the setAz4268Base() method.
     *
     * @return void
     */
    public function testSetAz4268Base() {

        $obj = new DecTVAGroupe();

        $obj->setAz4268Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268Base());
    }

    /**
     * Tests the setAz4269() method.
     *
     * @return void
     */
    public function testSetAz4269() {

        $obj = new DecTVAGroupe();

        $obj->setAz4269(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269());
    }

    /**
     * Tests the setAz4269Base() method.
     *
     * @return void
     */
    public function testSetAz4269Base() {

        $obj = new DecTVAGroupe();

        $obj->setAz4269Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269Base());
    }

    /**
     * Tests the setAz4270() method.
     *
     * @return void
     */
    public function testSetAz4270() {

        $obj = new DecTVAGroupe();

        $obj->setAz4270(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270());
    }

    /**
     * Tests the setAz4270Base() method.
     *
     * @return void
     */
    public function testSetAz4270Base() {

        $obj = new DecTVAGroupe();

        $obj->setAz4270Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base());
    }

    /**
     * Tests the setAz4271() method.
     *
     * @return void
     */
    public function testSetAz4271() {

        $obj = new DecTVAGroupe();

        $obj->setAz4271(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271());
    }

    /**
     * Tests the setAz4271Base() method.
     *
     * @return void
     */
    public function testSetAz4271Base() {

        $obj = new DecTVAGroupe();

        $obj->setAz4271Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271Base());
    }

    /**
     * Tests the setAz4272() method.
     *
     * @return void
     */
    public function testSetAz4272() {

        $obj = new DecTVAGroupe();

        $obj->setAz4272(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4272());
    }

    /**
     * Tests the setAz4274() method.
     *
     * @return void
     */
    public function testSetAz4274() {

        $obj = new DecTVAGroupe();

        $obj->setAz4274(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4274());
    }

    /**
     * Tests the setAz4276() method.
     *
     * @return void
     */
    public function testSetAz4276() {

        $obj = new DecTVAGroupe();

        $obj->setAz4276(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276());
    }

    /**
     * Tests the setAz4276Base() method.
     *
     * @return void
     */
    public function testSetAz4276Base() {

        $obj = new DecTVAGroupe();

        $obj->setAz4276Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276Base());
    }

    /**
     * Tests the setAz4277() method.
     *
     * @return void
     */
    public function testSetAz4277() {

        $obj = new DecTVAGroupe();

        $obj->setAz4277(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277());
    }

    /**
     * Tests the setAz4277Base() method.
     *
     * @return void
     */
    public function testSetAz4277Base() {

        $obj = new DecTVAGroupe();

        $obj->setAz4277Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277Base());
    }

    /**
     * Tests the setAz4278() method.
     *
     * @return void
     */
    public function testSetAz4278() {

        $obj = new DecTVAGroupe();

        $obj->setAz4278(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4278());
    }

    /**
     * Tests the setAz4279() method.
     *
     * @return void
     */
    public function testSetAz4279() {

        $obj = new DecTVAGroupe();

        $obj->setAz4279(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4279());
    }

    /**
     * Tests the setAz4280() method.
     *
     * @return void
     */
    public function testSetAz4280() {

        $obj = new DecTVAGroupe();

        $obj->setAz4280(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4280());
    }

    /**
     * Tests the setAz4281() method.
     *
     * @return void
     */
    public function testSetAz4281() {

        $obj = new DecTVAGroupe();

        $obj->setAz4281(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4281());
    }

    /**
     * Tests the setAz4282() method.
     *
     * @return void
     */
    public function testSetAz4282() {

        $obj = new DecTVAGroupe();

        $obj->setAz4282(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282());
    }

    /**
     * Tests the setAz4283() method.
     *
     * @return void
     */
    public function testSetAz4283() {

        $obj = new DecTVAGroupe();

        $obj->setAz4283(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4283());
    }

    /**
     * Tests the setAz4284() method.
     *
     * @return void
     */
    public function testSetAz4284() {

        $obj = new DecTVAGroupe();

        $obj->setAz4284(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4284());
    }

    /**
     * Tests the setAz4285() method.
     *
     * @return void
     */
    public function testSetAz4285() {

        $obj = new DecTVAGroupe();

        $obj->setAz4285(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4285());
    }

    /**
     * Tests the setAz4288() method.
     *
     * @return void
     */
    public function testSetAz4288() {

        $obj = new DecTVAGroupe();

        $obj->setAz4288(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4288());
    }

    /**
     * Tests the setAz4289() method.
     *
     * @return void
     */
    public function testSetAz4289() {

        $obj = new DecTVAGroupe();

        $obj->setAz4289(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289());
    }

    /**
     * Tests the setAz4290() method.
     *
     * @return void
     */
    public function testSetAz4290() {

        $obj = new DecTVAGroupe();

        $obj->setAz4290(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4290());
    }

    /**
     * Tests the setCorres1() method.
     *
     * @return void
     */
    public function testSetCorres1() {

        $obj = new DecTVAGroupe();

        $obj->setCorres1("corres1");
        $this->assertEquals("corres1", $obj->getCorres1());
    }

    /**
     * Tests the setCorres2() method.
     *
     * @return void
     */
    public function testSetCorres2() {

        $obj = new DecTVAGroupe();

        $obj->setCorres2("corres2");
        $this->assertEquals("corres2", $obj->getCorres2());
    }

    /**
     * Tests the setCorres3() method.
     *
     * @return void
     */
    public function testSetCorres3() {

        $obj = new DecTVAGroupe();

        $obj->setCorres3("corres3");
        $this->assertEquals("corres3", $obj->getCorres3());
    }

    /**
     * Tests the setCorres4() method.
     *
     * @return void
     */
    public function testSetCorres4() {

        $obj = new DecTVAGroupe();

        $obj->setCorres4("corres4");
        $this->assertEquals("corres4", $obj->getCorres4());
    }

    /**
     * Tests the setCorres5() method.
     *
     * @return void
     */
    public function testSetCorres5() {

        $obj = new DecTVAGroupe();

        $obj->setCorres5("corres5");
        $this->assertEquals("corres5", $obj->getCorres5());
    }

    /**
     * Tests the setDateDec() method.
     *
     * @return void
     */
    public function testSetDateDec() {

        $obj = new DecTVAGroupe();

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

        $obj = new DecTVAGroupe();

        $obj->setDebutExo(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutExo());
    }

    /**
     * Tests the setFinExo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinExo() {

        $obj = new DecTVAGroupe();

        $obj->setFinExo(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinExo());
    }

    /**
     * Tests the setLibDoss() method.
     *
     * @return void
     */
    public function testSetLibDoss() {

        $obj = new DecTVAGroupe();

        $obj->setLibDoss("libDoss");
        $this->assertEquals("libDoss", $obj->getLibDoss());
    }

    /**
     * Tests the setMentionExpresse() method.
     *
     * @return void
     */
    public function testSetMentionExpresse() {

        $obj = new DecTVAGroupe();

        $obj->setMentionExpresse(true);
        $this->assertEquals(true, $obj->getMentionExpresse());
    }

    /**
     * Tests the setNoDoss() method.
     *
     * @return void
     */
    public function testSetNoDoss() {

        $obj = new DecTVAGroupe();

        $obj->setNoDoss("noDoss");
        $this->assertEquals("noDoss", $obj->getNoDoss());
    }

    /**
     * Tests the setNoLotEcritures() method.
     *
     * @return void
     */
    public function testSetNoLotEcritures() {

        $obj = new DecTVAGroupe();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new DecTVAGroupe();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setPaiementImputation() method.
     *
     * @return void
     */
    public function testSetPaiementImputation() {

        $obj = new DecTVAGroupe();

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

        $obj = new DecTVAGroupe();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setSelAdresseDest() method.
     *
     * @return void
     */
    public function testSetSelAdresseDest() {

        $obj = new DecTVAGroupe();

        $obj->setSelAdresseDest("selAdresseDest");
        $this->assertEquals("selAdresseDest", $obj->getSelAdresseDest());
    }

    /**
     * Tests the setTotal() method.
     *
     * @return void
     */
    public function testSetTotal() {

        $obj = new DecTVAGroupe();

        $obj->setTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotal());
    }

    /**
     * Tests the setTypeDec() method.
     *
     * @return void
     */
    public function testSetTypeDec() {

        $obj = new DecTVAGroupe();

        $obj->setTypeDec("typeDec");
        $this->assertEquals("typeDec", $obj->getTypeDec());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille() {

        $obj = new DecTVAGroupe();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Tests the setZ0100b() method.
     *
     * @return void
     */
    public function testSetZ0100b() {

        $obj = new DecTVAGroupe();

        $obj->setZ0100b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0100b());
    }

    /**
     * Tests the setZ0121b() method.
     *
     * @return void
     */
    public function testSetZ0121b() {

        $obj = new DecTVAGroupe();

        $obj->setZ0121b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0121b());
    }

    /**
     * Tests the setZ0705() method.
     *
     * @return void
     */
    public function testSetZ0705() {

        $obj = new DecTVAGroupe();

        $obj->setZ0705(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0705());
    }

    /**
     * Tests the setZ0920b() method.
     *
     * @return void
     */
    public function testSetZ0920b() {

        $obj = new DecTVAGroupe();

        $obj->setZ0920b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0920b());
    }

    /**
     * Tests the setZ12Code() method.
     *
     * @return void
     */
    public function testSetZ12Code() {

        $obj = new DecTVAGroupe();

        $obj->setZ12Code("z12Code");
        $this->assertEquals("z12Code", $obj->getZ12Code());
    }

    /**
     * Tests the setZ12Lib() method.
     *
     * @return void
     */
    public function testSetZ12Lib() {

        $obj = new DecTVAGroupe();

        $obj->setZ12Lib("z12Lib");
        $this->assertEquals("z12Lib", $obj->getZ12Lib());
    }

    /**
     * Tests the setZ12Taxe() method.
     *
     * @return void
     */
    public function testSetZ12Taxe() {

        $obj = new DecTVAGroupe();

        $obj->setZ12Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ12Taxe());
    }

    /**
     * Tests the setZ14() method.
     *
     * @return void
     */
    public function testSetZ14() {

        $obj = new DecTVAGroupe();

        $obj->setZ14(10.092018);
        $this->assertEquals(10.092018, $obj->getZ14());
    }

    /**
     * Tests the setZ196b() method.
     *
     * @return void
     */
    public function testSetZ196b() {

        $obj = new DecTVAGroupe();

        $obj->setZ196b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ196b());
    }

    /**
     * Tests the setZ21() method.
     *
     * @return void
     */
    public function testSetZ21() {

        $obj = new DecTVAGroupe();

        $obj->setZ21(10.092018);
        $this->assertEquals(10.092018, $obj->getZ21());
    }

    /**
     * Tests the setZ25() method.
     *
     * @return void
     */
    public function testSetZ25() {

        $obj = new DecTVAGroupe();

        $obj->setZ25(10.092018);
        $this->assertEquals(10.092018, $obj->getZ25());
    }

    /**
     * Tests the setZ4227() method.
     *
     * @return void
     */
    public function testSetZ4227() {

        $obj = new DecTVAGroupe();

        $obj->setZ4227(10.092018);
        $this->assertEquals(10.092018, $obj->getZ4227());
    }

    /**
     * Tests the setZ8001() method.
     *
     * @return void
     */
    public function testSetZ8001() {

        $obj = new DecTVAGroupe();

        $obj->setZ8001(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8001());
    }

    /**
     * Tests the setZ8002() method.
     *
     * @return void
     */
    public function testSetZ8002() {

        $obj = new DecTVAGroupe();

        $obj->setZ8002(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8002());
    }

    /**
     * Tests the setZ8003() method.
     *
     * @return void
     */
    public function testSetZ8003() {

        $obj = new DecTVAGroupe();

        $obj->setZ8003(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003());
    }

    /**
     * Tests the setZ8005() method.
     *
     * @return void
     */
    public function testSetZ8005() {

        $obj = new DecTVAGroupe();

        $obj->setZ8005(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8005());
    }

    /**
     * Tests the setZ8006() method.
     *
     * @return void
     */
    public function testSetZ8006() {

        $obj = new DecTVAGroupe();

        $obj->setZ8006(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8006());
    }

    /**
     * Tests the setZ9979() method.
     *
     * @return void
     */
    public function testSetZ9979() {

        $obj = new DecTVAGroupe();

        $obj->setZ9979(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9979());
    }

    /**
     * Tests the setZ9989() method.
     *
     * @return void
     */
    public function testSetZ9989() {

        $obj = new DecTVAGroupe();

        $obj->setZ9989(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9989());
    }

    /**
     * Tests the setZ9991() method.
     *
     * @return void
     */
    public function testSetZ9991() {

        $obj = new DecTVAGroupe();

        $obj->setZ9991(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9991());
    }

    /**
     * Tests the setZ9999() method.
     *
     * @return void
     */
    public function testSetZ9999() {

        $obj = new DecTVAGroupe();

        $obj->setZ9999(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9999());
    }

    /**
     * Tests the setZ9BTaxe() method.
     *
     * @return void
     */
    public function testSetZ9BTaxe() {

        $obj = new DecTVAGroupe();

        $obj->setZ9BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9BTaxe());
    }

    /**
     * Tests the setiLock() method.
     *
     * @return void
     */
    public function testSetiLock() {

        $obj = new DecTVAGroupe();

        $obj->setiLock(10);
        $this->assertEquals(10, $obj->getiLock());
    }

    /**
     * Tests the setz0151b() method.
     *
     * @return void
     */
    public function testSetz0151b() {

        $obj = new DecTVAGroupe();

        $obj->setz0151b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151b());
    }

    /**
     * Tests the setz0207b() method.
     *
     * @return void
     */
    public function testSetz0207b() {

        $obj = new DecTVAGroupe();

        $obj->setz0207b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207b());
    }

    /**
     * Tests the setz0600() method.
     *
     * @return void
     */
    public function testSetz0600() {

        $obj = new DecTVAGroupe();

        $obj->setz0600(10.092018);
        $this->assertEquals(10.092018, $obj->getz0600());
    }

    /**
     * Tests the setz0900b() method.
     *
     * @return void
     */
    public function testSetz0900b() {

        $obj = new DecTVAGroupe();

        $obj->setz0900b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0900b());
    }
}
