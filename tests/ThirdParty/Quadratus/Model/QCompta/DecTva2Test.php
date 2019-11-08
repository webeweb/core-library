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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTva2;

/**
 * Dec tva2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTva2();

        $this->assertNull($obj->getAs4284Base());
        $this->assertNull($obj->getAz3510Base());
        $this->assertNull($obj->getAz3520Base());
        $this->assertNull($obj->getAz4204Nb());
        $this->assertNull($obj->getAz4206Nb());
        $this->assertNull($obj->getAz4207NbK());
        $this->assertNull($obj->getAz4213Base());
        $this->assertNull($obj->getAz4215Base());
        $this->assertNull($obj->getAz4217Base());
        $this->assertNull($obj->getAz4223Base());
        $this->assertNull($obj->getAz4226Base());
        $this->assertNull($obj->getAz4228Base());
        $this->assertNull($obj->getAz4229Base());
        $this->assertNull($obj->getAz4237Base());
        $this->assertNull($obj->getAz4240Base());
        $this->assertNull($obj->getAz4245Base());
        $this->assertNull($obj->getAz4249NbT());
        $this->assertNull($obj->getAz4250NbE());
        $this->assertNull($obj->getAz4252Base());
        $this->assertNull($obj->getAz4255Base());
        $this->assertNull($obj->getAz4257Base());
        $this->assertNull($obj->getAz4258Base());
        $this->assertNull($obj->getAz4268Base2());
        $this->assertNull($obj->getAz4270Base2());
        $this->assertNull($obj->getAz4278());
        $this->assertNull($obj->getAz4278Base());
        $this->assertNull($obj->getAz4279());
        $this->assertNull($obj->getAz4279NbK());
        $this->assertNull($obj->getAz4279NbV());
        $this->assertNull($obj->getAz4280());
        $this->assertNull($obj->getAz4280NbK());
        $this->assertNull($obj->getAz4280NbV());
        $this->assertNull($obj->getAz4281());
        $this->assertNull($obj->getAz4281Base());
        $this->assertNull($obj->getAz4282());
        $this->assertNull($obj->getAz4282Base());
        $this->assertNull($obj->getAz4283());
        $this->assertNull($obj->getAz4283Base());
        $this->assertNull($obj->getAz4284());
        $this->assertNull($obj->getAz4285());
        $this->assertNull($obj->getAz4285Base());
        $this->assertNull($obj->getAz4288());
        $this->assertNull($obj->getAz4288Base());
        $this->assertNull($obj->getAz4289());
        $this->assertNull($obj->getAz4289Base());
        $this->assertNull($obj->getAz4290());
        $this->assertNull($obj->getAz4290Base());
        $this->assertNull($obj->getPeriode());
    }

    /**
     * Tests the setAs4284Base() method.
     *
     * @return void
     */
    public function testSetAs4284Base() {

        $obj = new DecTva2();

        $obj->setAs4284Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAs4284Base());
    }

    /**
     * Tests the setAz3510Base() method.
     *
     * @return void
     */
    public function testSetAz3510Base() {

        $obj = new DecTva2();

        $obj->setAz3510Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3510Base());
    }

    /**
     * Tests the setAz3520Base() method.
     *
     * @return void
     */
    public function testSetAz3520Base() {

        $obj = new DecTva2();

        $obj->setAz3520Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3520Base());
    }

    /**
     * Tests the setAz4204Nb() method.
     *
     * @return void
     */
    public function testSetAz4204Nb() {

        $obj = new DecTva2();

        $obj->setAz4204Nb(10);
        $this->assertEquals(10, $obj->getAz4204Nb());
    }

    /**
     * Tests the setAz4206Nb() method.
     *
     * @return void
     */
    public function testSetAz4206Nb() {

        $obj = new DecTva2();

        $obj->setAz4206Nb(10);
        $this->assertEquals(10, $obj->getAz4206Nb());
    }

    /**
     * Tests the setAz4207NbK() method.
     *
     * @return void
     */
    public function testSetAz4207NbK() {

        $obj = new DecTva2();

        $obj->setAz4207NbK(10);
        $this->assertEquals(10, $obj->getAz4207NbK());
    }

    /**
     * Tests the setAz4213Base() method.
     *
     * @return void
     */
    public function testSetAz4213Base() {

        $obj = new DecTva2();

        $obj->setAz4213Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4213Base());
    }

    /**
     * Tests the setAz4215Base() method.
     *
     * @return void
     */
    public function testSetAz4215Base() {

        $obj = new DecTva2();

        $obj->setAz4215Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4215Base());
    }

    /**
     * Tests the setAz4217Base() method.
     *
     * @return void
     */
    public function testSetAz4217Base() {

        $obj = new DecTva2();

        $obj->setAz4217Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4217Base());
    }

    /**
     * Tests the setAz4223Base() method.
     *
     * @return void
     */
    public function testSetAz4223Base() {

        $obj = new DecTva2();

        $obj->setAz4223Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4223Base());
    }

    /**
     * Tests the setAz4226Base() method.
     *
     * @return void
     */
    public function testSetAz4226Base() {

        $obj = new DecTva2();

        $obj->setAz4226Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4226Base());
    }

    /**
     * Tests the setAz4228Base() method.
     *
     * @return void
     */
    public function testSetAz4228Base() {

        $obj = new DecTva2();

        $obj->setAz4228Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4228Base());
    }

    /**
     * Tests the setAz4229Base() method.
     *
     * @return void
     */
    public function testSetAz4229Base() {

        $obj = new DecTva2();

        $obj->setAz4229Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4229Base());
    }

    /**
     * Tests the setAz4237Base() method.
     *
     * @return void
     */
    public function testSetAz4237Base() {

        $obj = new DecTva2();

        $obj->setAz4237Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4237Base());
    }

    /**
     * Tests the setAz4240Base() method.
     *
     * @return void
     */
    public function testSetAz4240Base() {

        $obj = new DecTva2();

        $obj->setAz4240Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240Base());
    }

    /**
     * Tests the setAz4245Base() method.
     *
     * @return void
     */
    public function testSetAz4245Base() {

        $obj = new DecTva2();

        $obj->setAz4245Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4245Base());
    }

    /**
     * Tests the setAz4249NbT() method.
     *
     * @return void
     */
    public function testSetAz4249NbT() {

        $obj = new DecTva2();

        $obj->setAz4249NbT(10);
        $this->assertEquals(10, $obj->getAz4249NbT());
    }

    /**
     * Tests the setAz4250NbE() method.
     *
     * @return void
     */
    public function testSetAz4250NbE() {

        $obj = new DecTva2();

        $obj->setAz4250NbE(10);
        $this->assertEquals(10, $obj->getAz4250NbE());
    }

    /**
     * Tests the setAz4252Base() method.
     *
     * @return void
     */
    public function testSetAz4252Base() {

        $obj = new DecTva2();

        $obj->setAz4252Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252Base());
    }

    /**
     * Tests the setAz4255Base() method.
     *
     * @return void
     */
    public function testSetAz4255Base() {

        $obj = new DecTva2();

        $obj->setAz4255Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4255Base());
    }

    /**
     * Tests the setAz4257Base() method.
     *
     * @return void
     */
    public function testSetAz4257Base() {

        $obj = new DecTva2();

        $obj->setAz4257Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4257Base());
    }

    /**
     * Tests the setAz4258Base() method.
     *
     * @return void
     */
    public function testSetAz4258Base() {

        $obj = new DecTva2();

        $obj->setAz4258Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4258Base());
    }

    /**
     * Tests the setAz4268Base2() method.
     *
     * @return void
     */
    public function testSetAz4268Base2() {

        $obj = new DecTva2();

        $obj->setAz4268Base2(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268Base2());
    }

    /**
     * Tests the setAz4270Base2() method.
     *
     * @return void
     */
    public function testSetAz4270Base2() {

        $obj = new DecTva2();

        $obj->setAz4270Base2(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base2());
    }

    /**
     * Tests the setAz4278() method.
     *
     * @return void
     */
    public function testSetAz4278() {

        $obj = new DecTva2();

        $obj->setAz4278(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4278());
    }

    /**
     * Tests the setAz4278Base() method.
     *
     * @return void
     */
    public function testSetAz4278Base() {

        $obj = new DecTva2();

        $obj->setAz4278Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4278Base());
    }

    /**
     * Tests the setAz4279() method.
     *
     * @return void
     */
    public function testSetAz4279() {

        $obj = new DecTva2();

        $obj->setAz4279(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4279());
    }

    /**
     * Tests the setAz4279NbK() method.
     *
     * @return void
     */
    public function testSetAz4279NbK() {

        $obj = new DecTva2();

        $obj->setAz4279NbK(10);
        $this->assertEquals(10, $obj->getAz4279NbK());
    }

    /**
     * Tests the setAz4279NbV() method.
     *
     * @return void
     */
    public function testSetAz4279NbV() {

        $obj = new DecTva2();

        $obj->setAz4279NbV(10);
        $this->assertEquals(10, $obj->getAz4279NbV());
    }

    /**
     * Tests the setAz4280() method.
     *
     * @return void
     */
    public function testSetAz4280() {

        $obj = new DecTva2();

        $obj->setAz4280(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4280());
    }

    /**
     * Tests the setAz4280NbK() method.
     *
     * @return void
     */
    public function testSetAz4280NbK() {

        $obj = new DecTva2();

        $obj->setAz4280NbK(10);
        $this->assertEquals(10, $obj->getAz4280NbK());
    }

    /**
     * Tests the setAz4280NbV() method.
     *
     * @return void
     */
    public function testSetAz4280NbV() {

        $obj = new DecTva2();

        $obj->setAz4280NbV(10);
        $this->assertEquals(10, $obj->getAz4280NbV());
    }

    /**
     * Tests the setAz4281() method.
     *
     * @return void
     */
    public function testSetAz4281() {

        $obj = new DecTva2();

        $obj->setAz4281(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4281());
    }

    /**
     * Tests the setAz4281Base() method.
     *
     * @return void
     */
    public function testSetAz4281Base() {

        $obj = new DecTva2();

        $obj->setAz4281Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4281Base());
    }

    /**
     * Tests the setAz4282() method.
     *
     * @return void
     */
    public function testSetAz4282() {

        $obj = new DecTva2();

        $obj->setAz4282(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282());
    }

    /**
     * Tests the setAz4282Base() method.
     *
     * @return void
     */
    public function testSetAz4282Base() {

        $obj = new DecTva2();

        $obj->setAz4282Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282Base());
    }

    /**
     * Tests the setAz4283() method.
     *
     * @return void
     */
    public function testSetAz4283() {

        $obj = new DecTva2();

        $obj->setAz4283(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4283());
    }

    /**
     * Tests the setAz4283Base() method.
     *
     * @return void
     */
    public function testSetAz4283Base() {

        $obj = new DecTva2();

        $obj->setAz4283Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4283Base());
    }

    /**
     * Tests the setAz4284() method.
     *
     * @return void
     */
    public function testSetAz4284() {

        $obj = new DecTva2();

        $obj->setAz4284(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4284());
    }

    /**
     * Tests the setAz4285() method.
     *
     * @return void
     */
    public function testSetAz4285() {

        $obj = new DecTva2();

        $obj->setAz4285(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4285());
    }

    /**
     * Tests the setAz4285Base() method.
     *
     * @return void
     */
    public function testSetAz4285Base() {

        $obj = new DecTva2();

        $obj->setAz4285Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4285Base());
    }

    /**
     * Tests the setAz4288() method.
     *
     * @return void
     */
    public function testSetAz4288() {

        $obj = new DecTva2();

        $obj->setAz4288(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4288());
    }

    /**
     * Tests the setAz4288Base() method.
     *
     * @return void
     */
    public function testSetAz4288Base() {

        $obj = new DecTva2();

        $obj->setAz4288Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4288Base());
    }

    /**
     * Tests the setAz4289() method.
     *
     * @return void
     */
    public function testSetAz4289() {

        $obj = new DecTva2();

        $obj->setAz4289(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289());
    }

    /**
     * Tests the setAz4289Base() method.
     *
     * @return void
     */
    public function testSetAz4289Base() {

        $obj = new DecTva2();

        $obj->setAz4289Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289Base());
    }

    /**
     * Tests the setAz4290() method.
     *
     * @return void
     */
    public function testSetAz4290() {

        $obj = new DecTva2();

        $obj->setAz4290(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4290());
    }

    /**
     * Tests the setAz4290Base() method.
     *
     * @return void
     */
    public function testSetAz4290Base() {

        $obj = new DecTva2();

        $obj->setAz4290Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4290Base());
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

        $obj = new DecTva2();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }
}
