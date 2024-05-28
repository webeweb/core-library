<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\DecTva2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTva2Test extends AbstractTestCase {

    /**
     * Test setAs4284Base()
     *
     * @return void
     */
    public function testSetAs4284Base(): void {

        $obj = new DecTva2();

        $obj->setAs4284Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAs4284Base());
    }

    /**
     * Test setAz3510Base()
     *
     * @return void
     */
    public function testSetAz3510Base(): void {

        $obj = new DecTva2();

        $obj->setAz3510Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3510Base());
    }

    /**
     * Test setAz3520Base()
     *
     * @return void
     */
    public function testSetAz3520Base(): void {

        $obj = new DecTva2();

        $obj->setAz3520Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3520Base());
    }

    /**
     * Test setAz4204Nb()
     *
     * @return void
     */
    public function testSetAz4204Nb(): void {

        $obj = new DecTva2();

        $obj->setAz4204Nb(10);
        $this->assertEquals(10, $obj->getAz4204Nb());
    }

    /**
     * Test setAz4206Nb()
     *
     * @return void
     */
    public function testSetAz4206Nb(): void {

        $obj = new DecTva2();

        $obj->setAz4206Nb(10);
        $this->assertEquals(10, $obj->getAz4206Nb());
    }

    /**
     * Test setAz4207NbK()
     *
     * @return void
     */
    public function testSetAz4207NbK(): void {

        $obj = new DecTva2();

        $obj->setAz4207NbK(10);
        $this->assertEquals(10, $obj->getAz4207NbK());
    }

    /**
     * Test setAz4213Base()
     *
     * @return void
     */
    public function testSetAz4213Base(): void {

        $obj = new DecTva2();

        $obj->setAz4213Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4213Base());
    }

    /**
     * Test setAz4215Base()
     *
     * @return void
     */
    public function testSetAz4215Base(): void {

        $obj = new DecTva2();

        $obj->setAz4215Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4215Base());
    }

    /**
     * Test setAz4217Base()
     *
     * @return void
     */
    public function testSetAz4217Base(): void {

        $obj = new DecTva2();

        $obj->setAz4217Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4217Base());
    }

    /**
     * Test setAz4223Base()
     *
     * @return void
     */
    public function testSetAz4223Base(): void {

        $obj = new DecTva2();

        $obj->setAz4223Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4223Base());
    }

    /**
     * Test setAz4226Base()
     *
     * @return void
     */
    public function testSetAz4226Base(): void {

        $obj = new DecTva2();

        $obj->setAz4226Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4226Base());
    }

    /**
     * Test setAz4228Base()
     *
     * @return void
     */
    public function testSetAz4228Base(): void {

        $obj = new DecTva2();

        $obj->setAz4228Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4228Base());
    }

    /**
     * Test setAz4229Base()
     *
     * @return void
     */
    public function testSetAz4229Base(): void {

        $obj = new DecTva2();

        $obj->setAz4229Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4229Base());
    }

    /**
     * Test setAz4237Base()
     *
     * @return void
     */
    public function testSetAz4237Base(): void {

        $obj = new DecTva2();

        $obj->setAz4237Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4237Base());
    }

    /**
     * Test setAz4240Base()
     *
     * @return void
     */
    public function testSetAz4240Base(): void {

        $obj = new DecTva2();

        $obj->setAz4240Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240Base());
    }

    /**
     * Test setAz4245Base()
     *
     * @return void
     */
    public function testSetAz4245Base(): void {

        $obj = new DecTva2();

        $obj->setAz4245Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4245Base());
    }

    /**
     * Test setAz4249NbT()
     *
     * @return void
     */
    public function testSetAz4249NbT(): void {

        $obj = new DecTva2();

        $obj->setAz4249NbT(10);
        $this->assertEquals(10, $obj->getAz4249NbT());
    }

    /**
     * Test setAz4250NbE()
     *
     * @return void
     */
    public function testSetAz4250NbE(): void {

        $obj = new DecTva2();

        $obj->setAz4250NbE(10);
        $this->assertEquals(10, $obj->getAz4250NbE());
    }

    /**
     * Test setAz4252Base()
     *
     * @return void
     */
    public function testSetAz4252Base(): void {

        $obj = new DecTva2();

        $obj->setAz4252Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252Base());
    }

    /**
     * Test setAz4255Base()
     *
     * @return void
     */
    public function testSetAz4255Base(): void {

        $obj = new DecTva2();

        $obj->setAz4255Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4255Base());
    }

    /**
     * Test setAz4257Base()
     *
     * @return void
     */
    public function testSetAz4257Base(): void {

        $obj = new DecTva2();

        $obj->setAz4257Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4257Base());
    }

    /**
     * Test setAz4258Base()
     *
     * @return void
     */
    public function testSetAz4258Base(): void {

        $obj = new DecTva2();

        $obj->setAz4258Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4258Base());
    }

    /**
     * Test setAz4268Base2()
     *
     * @return void
     */
    public function testSetAz4268Base2(): void {

        $obj = new DecTva2();

        $obj->setAz4268Base2(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268Base2());
    }

    /**
     * Test setAz4270Base2()
     *
     * @return void
     */
    public function testSetAz4270Base2(): void {

        $obj = new DecTva2();

        $obj->setAz4270Base2(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base2());
    }

    /**
     * Test setAz4278()
     *
     * @return void
     */
    public function testSetAz4278(): void {

        $obj = new DecTva2();

        $obj->setAz4278(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4278());
    }

    /**
     * Test setAz4278Base()
     *
     * @return void
     */
    public function testSetAz4278Base(): void {

        $obj = new DecTva2();

        $obj->setAz4278Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4278Base());
    }

    /**
     * Test setAz4279()
     *
     * @return void
     */
    public function testSetAz4279(): void {

        $obj = new DecTva2();

        $obj->setAz4279(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4279());
    }

    /**
     * Test setAz4279NbK()
     *
     * @return void
     */
    public function testSetAz4279NbK(): void {

        $obj = new DecTva2();

        $obj->setAz4279NbK(10);
        $this->assertEquals(10, $obj->getAz4279NbK());
    }

    /**
     * Test setAz4279NbV()
     *
     * @return void
     */
    public function testSetAz4279NbV(): void {

        $obj = new DecTva2();

        $obj->setAz4279NbV(10);
        $this->assertEquals(10, $obj->getAz4279NbV());
    }

    /**
     * Test setAz4280()
     *
     * @return void
     */
    public function testSetAz4280(): void {

        $obj = new DecTva2();

        $obj->setAz4280(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4280());
    }

    /**
     * Test setAz4280NbK()
     *
     * @return void
     */
    public function testSetAz4280NbK(): void {

        $obj = new DecTva2();

        $obj->setAz4280NbK(10);
        $this->assertEquals(10, $obj->getAz4280NbK());
    }

    /**
     * Test setAz4280NbV()
     *
     * @return void
     */
    public function testSetAz4280NbV(): void {

        $obj = new DecTva2();

        $obj->setAz4280NbV(10);
        $this->assertEquals(10, $obj->getAz4280NbV());
    }

    /**
     * Test setAz4281()
     *
     * @return void
     */
    public function testSetAz4281(): void {

        $obj = new DecTva2();

        $obj->setAz4281(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4281());
    }

    /**
     * Test setAz4281Base()
     *
     * @return void
     */
    public function testSetAz4281Base(): void {

        $obj = new DecTva2();

        $obj->setAz4281Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4281Base());
    }

    /**
     * Test setAz4282()
     *
     * @return void
     */
    public function testSetAz4282(): void {

        $obj = new DecTva2();

        $obj->setAz4282(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282());
    }

    /**
     * Test setAz4282Base()
     *
     * @return void
     */
    public function testSetAz4282Base(): void {

        $obj = new DecTva2();

        $obj->setAz4282Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282Base());
    }

    /**
     * Test setAz4283()
     *
     * @return void
     */
    public function testSetAz4283(): void {

        $obj = new DecTva2();

        $obj->setAz4283(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4283());
    }

    /**
     * Test setAz4283Base()
     *
     * @return void
     */
    public function testSetAz4283Base(): void {

        $obj = new DecTva2();

        $obj->setAz4283Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4283Base());
    }

    /**
     * Test setAz4284()
     *
     * @return void
     */
    public function testSetAz4284(): void {

        $obj = new DecTva2();

        $obj->setAz4284(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4284());
    }

    /**
     * Test setAz4285()
     *
     * @return void
     */
    public function testSetAz4285(): void {

        $obj = new DecTva2();

        $obj->setAz4285(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4285());
    }

    /**
     * Test setAz4285Base()
     *
     * @return void
     */
    public function testSetAz4285Base(): void {

        $obj = new DecTva2();

        $obj->setAz4285Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4285Base());
    }

    /**
     * Test setAz4288()
     *
     * @return void
     */
    public function testSetAz4288(): void {

        $obj = new DecTva2();

        $obj->setAz4288(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4288());
    }

    /**
     * Test setAz4288Base()
     *
     * @return void
     */
    public function testSetAz4288Base(): void {

        $obj = new DecTva2();

        $obj->setAz4288Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4288Base());
    }

    /**
     * Test setAz4289()
     *
     * @return void
     */
    public function testSetAz4289(): void {

        $obj = new DecTva2();

        $obj->setAz4289(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289());
    }

    /**
     * Test setAz4289Base()
     *
     * @return void
     */
    public function testSetAz4289Base(): void {

        $obj = new DecTva2();

        $obj->setAz4289Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289Base());
    }

    /**
     * Test setAz4290()
     *
     * @return void
     */
    public function testSetAz4290(): void {

        $obj = new DecTva2();

        $obj->setAz4290(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4290());
    }

    /**
     * Test setAz4290Base()
     *
     * @return void
     */
    public function testSetAz4290Base(): void {

        $obj = new DecTva2();

        $obj->setAz4290Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4290Base());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTva2();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
