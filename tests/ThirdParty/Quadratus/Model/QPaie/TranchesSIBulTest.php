<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TranchesSIBul;

/**
 * Tranches s i bul model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesSIBulTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TranchesSIBul();

        $this->assertNull($obj->getBrutalSansSI());
        $this->assertNull($obj->getCumBrutalSansSI());
        $this->assertNull($obj->getCumTotSI());
        $this->assertNull($obj->getCumTranche2SI());
        $this->assertNull($obj->getCumTranche2SansSI());
        $this->assertNull($obj->getCumTrancheASI());
        $this->assertNull($obj->getCumTrancheASansSI());
        $this->assertNull($obj->getCumTrancheBSI());
        $this->assertNull($obj->getCumTrancheBSansSI());
        $this->assertNull($obj->getCumTrancheCSI());
        $this->assertNull($obj->getCumTrancheCSansSI());
        $this->assertNull($obj->getCumTrancheD1SansSI());
        $this->assertNull($obj->getCumTrancheDSansSI());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTotSI());
        $this->assertNull($obj->getTranche2SI());
        $this->assertNull($obj->getTranche2SansSI());
        $this->assertNull($obj->getTrancheASI());
        $this->assertNull($obj->getTrancheASansSI());
        $this->assertNull($obj->getTrancheBSI());
        $this->assertNull($obj->getTrancheBSansSI());
        $this->assertNull($obj->getTrancheCSI());
        $this->assertNull($obj->getTrancheCSansSI());
        $this->assertNull($obj->getTrancheD1SansSI());
        $this->assertNull($obj->getTrancheDSansSI());
    }

    /**
     * Tests the setBrutalSansSI() method.
     *
     * @return void
     */
    public function testSetBrutalSansSI() {

        $obj = new TranchesSIBul();

        $obj->setBrutalSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutalSansSI());
    }

    /**
     * Tests the setCumBrutalSansSI() method.
     *
     * @return void
     */
    public function testSetCumBrutalSansSI() {

        $obj = new TranchesSIBul();

        $obj->setCumBrutalSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutalSansSI());
    }

    /**
     * Tests the setCumTotSI() method.
     *
     * @return void
     */
    public function testSetCumTotSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTotSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSI());
    }

    /**
     * Tests the setCumTranche2SI() method.
     *
     * @return void
     */
    public function testSetCumTranche2SI() {

        $obj = new TranchesSIBul();

        $obj->setCumTranche2SI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SI());
    }

    /**
     * Tests the setCumTranche2SansSI() method.
     *
     * @return void
     */
    public function testSetCumTranche2SansSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTranche2SansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSI());
    }

    /**
     * Tests the setCumTrancheASI() method.
     *
     * @return void
     */
    public function testSetCumTrancheASI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheASI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASI());
    }

    /**
     * Tests the setCumTrancheASansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheASansSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheASansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSI());
    }

    /**
     * Tests the setCumTrancheBSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheBSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheBSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSI());
    }

    /**
     * Tests the setCumTrancheBSansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheBSansSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheBSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSI());
    }

    /**
     * Tests the setCumTrancheCSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheCSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheCSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSI());
    }

    /**
     * Tests the setCumTrancheCSansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheCSansSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheCSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSI());
    }

    /**
     * Tests the setCumTrancheD1SansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheD1SansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSI());
    }

    /**
     * Tests the setCumTrancheDSansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheDSansSI() {

        $obj = new TranchesSIBul();

        $obj->setCumTrancheDSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSI());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new TranchesSIBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new TranchesSIBul();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new TranchesSIBul();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setTotSI() method.
     *
     * @return void
     */
    public function testSetTotSI() {

        $obj = new TranchesSIBul();

        $obj->setTotSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTotSI());
    }

    /**
     * Tests the setTranche2SI() method.
     *
     * @return void
     */
    public function testSetTranche2SI() {

        $obj = new TranchesSIBul();

        $obj->setTranche2SI(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2SI());
    }

    /**
     * Tests the setTranche2SansSI() method.
     *
     * @return void
     */
    public function testSetTranche2SansSI() {

        $obj = new TranchesSIBul();

        $obj->setTranche2SansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2SansSI());
    }

    /**
     * Tests the setTrancheASI() method.
     *
     * @return void
     */
    public function testSetTrancheASI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheASI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheASI());
    }

    /**
     * Tests the setTrancheASansSI() method.
     *
     * @return void
     */
    public function testSetTrancheASansSI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheASansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheASansSI());
    }

    /**
     * Tests the setTrancheBSI() method.
     *
     * @return void
     */
    public function testSetTrancheBSI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheBSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBSI());
    }

    /**
     * Tests the setTrancheBSansSI() method.
     *
     * @return void
     */
    public function testSetTrancheBSansSI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheBSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBSansSI());
    }

    /**
     * Tests the setTrancheCSI() method.
     *
     * @return void
     */
    public function testSetTrancheCSI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheCSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCSI());
    }

    /**
     * Tests the setTrancheCSansSI() method.
     *
     * @return void
     */
    public function testSetTrancheCSansSI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheCSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCSansSI());
    }

    /**
     * Tests the setTrancheD1SansSI() method.
     *
     * @return void
     */
    public function testSetTrancheD1SansSI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheD1SansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD1SansSI());
    }

    /**
     * Tests the setTrancheDSansSI() method.
     *
     * @return void
     */
    public function testSetTrancheDSansSI() {

        $obj = new TranchesSIBul();

        $obj->setTrancheDSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheDSansSI());
    }
}
