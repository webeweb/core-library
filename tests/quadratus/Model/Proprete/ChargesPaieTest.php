<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\ChargesPaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Charges paie test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChargesPaieTest extends AbstractTestCase {

    /**
     * Tests setArbitrage()
     *
     * @return void
     */
    public function testSetArbitrage(): void {

        $obj = new ChargesPaie();

        $obj->setArbitrage(10.092018);
        $this->assertEquals(10.092018, $obj->getArbitrage());
    }

    /**
     * Tests setBrut()
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new ChargesPaie();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests setBrutAl()
     *
     * @return void
     */
    public function testSetBrutAl(): void {

        $obj = new ChargesPaie();

        $obj->setBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAl());
    }

    /**
     * Tests setBrutAnl()
     *
     * @return void
     */
    public function testSetBrutAnl(): void {

        $obj = new ChargesPaie();

        $obj->setBrutAnl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAnl());
    }

    /**
     * Tests setChargesPatronales()
     *
     * @return void
     */
    public function testSetChargesPatronales(): void {

        $obj = new ChargesPaie();

        $obj->setChargesPatronales(10.092018);
        $this->assertEquals(10.092018, $obj->getChargesPatronales());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new ChargesPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setEuro()
     *
     * @return void
     */
    public function testSetEuro(): void {

        $obj = new ChargesPaie();

        $obj->setEuro(true);
        $this->assertEquals(true, $obj->getEuro());
    }

    /**
     * Tests setHeuresSup()
     *
     * @return void
     */
    public function testSetHeuresSup(): void {

        $obj = new ChargesPaie();

        $obj->setHeuresSup(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresSup());
    }

    /**
     * Tests setImpos()
     *
     * @return void
     */
    public function testSetImpos(): void {

        $obj = new ChargesPaie();

        $obj->setImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getImpos());
    }

    /**
     * Tests setIndemniteCp()
     *
     * @return void
     */
    public function testSetIndemniteCp(): void {

        $obj = new ChargesPaie();

        $obj->setIndemniteCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemniteCp());
    }

    /**
     * Tests setIndemnitePrecarite()
     *
     * @return void
     */
    public function testSetIndemnitePrecarite(): void {

        $obj = new ChargesPaie();

        $obj->setIndemnitePrecarite(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnitePrecarite());
    }

    /**
     * Tests setInteressement()
     *
     * @return void
     */
    public function testSetInteressement(): void {

        $obj = new ChargesPaie();

        $obj->setInteressement(10.092018);
        $this->assertEquals(10.092018, $obj->getInteressement());
    }

    /**
     * Tests setMtNetPayeTheo()
     *
     * @return void
     */
    public function testSetMtNetPayeTheo(): void {

        $obj = new ChargesPaie();

        $obj->setMtNetPayeTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtNetPayeTheo());
    }

    /**
     * Tests setNbHAbs()
     *
     * @return void
     */
    public function testSetNbHAbs(): void {

        $obj = new ChargesPaie();

        $obj->setNbHAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbs());
    }

    /**
     * Tests setNbHBase()
     *
     * @return void
     */
    public function testSetNbHBase(): void {

        $obj = new ChargesPaie();

        $obj->setNbHBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBase());
    }

    /**
     * Tests setNbHRc()
     *
     * @return void
     */
    public function testSetNbHRc(): void {

        $obj = new ChargesPaie();

        $obj->setNbHRc(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRc());
    }

    /**
     * Tests setNbHSup1()
     *
     * @return void
     */
    public function testSetNbHSup1(): void {

        $obj = new ChargesPaie();

        $obj->setNbHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup1());
    }

    /**
     * Tests setNbHSup2()
     *
     * @return void
     */
    public function testSetNbHSup2(): void {

        $obj = new ChargesPaie();

        $obj->setNbHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup2());
    }

    /**
     * Tests setNbHSup3()
     *
     * @return void
     */
    public function testSetNbHSup3(): void {

        $obj = new ChargesPaie();

        $obj->setNbHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup3());
    }

    /**
     * Tests setNbHn()
     *
     * @return void
     */
    public function testSetNbHn(): void {

        $obj = new ChargesPaie();

        $obj->setNbHn(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHn());
    }

    /**
     * Tests setNbHt()
     *
     * @return void
     */
    public function testSetNbHt(): void {

        $obj = new ChargesPaie();

        $obj->setNbHt(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHt());
    }

    /**
     * Tests setParticipation()
     *
     * @return void
     */
    public function testSetParticipation(): void {

        $obj = new ChargesPaie();

        $obj->setParticipation(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipation());
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

        $obj = new ChargesPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setProvisionCp()
     *
     * @return void
     */
    public function testSetProvisionCp(): void {

        $obj = new ChargesPaie();

        $obj->setProvisionCp(10.092018);
        $this->assertEquals(10.092018, $obj->getProvisionCp());
    }

    /**
     * Tests setSBase()
     *
     * @return void
     */
    public function testSetSBase(): void {

        $obj = new ChargesPaie();

        $obj->setSBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSBase());
    }

    /**
     * Tests setSalaire()
     *
     * @return void
     */
    public function testSetSalaire(): void {

        $obj = new ChargesPaie();

        $obj->setSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaire());
    }

    /**
     * Tests setTotRet()
     *
     * @return void
     */
    public function testSetTotRet(): void {

        $obj = new ChargesPaie();

        $obj->setTotRet(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRet());
    }

    /**
     * Tests setTrA()
     *
     * @return void
     */
    public function testSetTrA(): void {

        $obj = new ChargesPaie();

        $obj->setTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrA());
    }

    /**
     * Tests setTrB()
     *
     * @return void
     */
    public function testSetTrB(): void {

        $obj = new ChargesPaie();

        $obj->setTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getTrB());
    }

    /**
     * Tests setTrC()
     *
     * @return void
     */
    public function testSetTrC(): void {

        $obj = new ChargesPaie();

        $obj->setTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getTrC());
    }

    /**
     * Tests setTxHn()
     *
     * @return void
     */
    public function testSetTxHn(): void {

        $obj = new ChargesPaie();

        $obj->setTxHn(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHn());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChargesPaie();

        $this->assertNull($obj->getArbitrage());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAl());
        $this->assertNull($obj->getBrutAnl());
        $this->assertNull($obj->getChargesPatronales());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getHeuresSup());
        $this->assertNull($obj->getImpos());
        $this->assertNull($obj->getIndemniteCp());
        $this->assertNull($obj->getIndemnitePrecarite());
        $this->assertNull($obj->getInteressement());
        $this->assertNull($obj->getMtNetPayeTheo());
        $this->assertNull($obj->getNbHAbs());
        $this->assertNull($obj->getNbHBase());
        $this->assertNull($obj->getNbHn());
        $this->assertNull($obj->getNbHRc());
        $this->assertNull($obj->getNbHSup1());
        $this->assertNull($obj->getNbHSup2());
        $this->assertNull($obj->getNbHSup3());
        $this->assertNull($obj->getNbHt());
        $this->assertNull($obj->getParticipation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getProvisionCp());
        $this->assertNull($obj->getSBase());
        $this->assertNull($obj->getSalaire());
        $this->assertNull($obj->getTotRet());
        $this->assertNull($obj->getTrA());
        $this->assertNull($obj->getTrB());
        $this->assertNull($obj->getTrC());
        $this->assertNull($obj->getTxHn());
    }
}
