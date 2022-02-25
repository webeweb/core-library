<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\TranchesSiBul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tranches si bul test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TranchesSiBulTest extends AbstractTestCase {

    /**
     * Tests setBrutAlSansSi()
     *
     * @return void
     */
    public function testSetBrutAlSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlSansSi());
    }

    /**
     * Tests setCumBrutAlSansSi()
     *
     * @return void
     */
    public function testSetCumBrutAlSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAlSansSi());
    }

    /**
     * Tests setCumTotSi()
     *
     * @return void
     */
    public function testSetCumTotSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSi());
    }

    /**
     * Tests setCumTranche2SansSi()
     *
     * @return void
     */
    public function testSetCumTranche2SansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSi());
    }

    /**
     * Tests setCumTranche2Si()
     *
     * @return void
     */
    public function testSetCumTranche2Si(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }

    /**
     * Tests setCumTrancheASansSi()
     *
     * @return void
     */
    public function testSetCumTrancheASansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSi());
    }

    /**
     * Tests setCumTrancheAsi()
     *
     * @return void
     */
    public function testSetCumTrancheAsi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheAsi());
    }

    /**
     * Tests setCumTrancheBSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheBSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSi());
    }

    /**
     * Tests setCumTrancheBsi()
     *
     * @return void
     */
    public function testSetCumTrancheBsi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBsi());
    }

    /**
     * Tests setCumTrancheCSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheCSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSi());
    }

    /**
     * Tests setCumTrancheCsi()
     *
     * @return void
     */
    public function testSetCumTrancheCsi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCsi());
    }

    /**
     * Tests setCumTrancheD1SansSi()
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSi());
    }

    /**
     * Tests setCumTrancheDSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheDSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSi());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new TranchesSiBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new TranchesSiBul();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new TranchesSiBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setTotSi()
     *
     * @return void
     */
    public function testSetTotSi(): void {

        $obj = new TranchesSiBul();

        $obj->setTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTotSi());
    }

    /**
     * Tests setTranche2SansSi()
     *
     * @return void
     */
    public function testSetTranche2SansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2SansSi());
    }

    /**
     * Tests setTranche2Si()
     *
     * @return void
     */
    public function testSetTranche2Si(): void {

        $obj = new TranchesSiBul();

        $obj->setTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2Si());
    }

    /**
     * Tests setTrancheASansSi()
     *
     * @return void
     */
    public function testSetTrancheASansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheASansSi());
    }

    /**
     * Tests setTrancheAsi()
     *
     * @return void
     */
    public function testSetTrancheAsi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAsi());
    }

    /**
     * Tests setTrancheBSansSi()
     *
     * @return void
     */
    public function testSetTrancheBSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBSansSi());
    }

    /**
     * Tests setTrancheBsi()
     *
     * @return void
     */
    public function testSetTrancheBsi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBsi());
    }

    /**
     * Tests setTrancheCSansSi()
     *
     * @return void
     */
    public function testSetTrancheCSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCSansSi());
    }

    /**
     * Tests setTrancheCsi()
     *
     * @return void
     */
    public function testSetTrancheCsi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCsi());
    }

    /**
     * Tests setTrancheD1SansSi()
     *
     * @return void
     */
    public function testSetTrancheD1SansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD1SansSi());
    }

    /**
     * Tests setTrancheDSansSi()
     *
     * @return void
     */
    public function testSetTrancheDSansSi(): void {

        $obj = new TranchesSiBul();

        $obj->setTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheDSansSi());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TranchesSiBul();

        $this->assertNull($obj->getBrutAlSansSi());
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTotSi());
        $this->assertNull($obj->getTranche2Si());
        $this->assertNull($obj->getTranche2SansSi());
        $this->assertNull($obj->getTrancheAsi());
        $this->assertNull($obj->getTrancheASansSi());
        $this->assertNull($obj->getTrancheBsi());
        $this->assertNull($obj->getTrancheBSansSi());
        $this->assertNull($obj->getTrancheCsi());
        $this->assertNull($obj->getTrancheCSansSi());
        $this->assertNull($obj->getTrancheD1SansSi());
        $this->assertNull($obj->getTrancheDSansSi());
    }
}
