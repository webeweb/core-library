<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\PrepaPaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prepa paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class PrepaPaieTest extends AbstractTestCase {

    /**
     * Tests the setCpPris() method.
     *
     * @return void
     */
    public function testSetCpPris(): void {

        $obj = new PrepaPaie();

        $obj->setCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCpPris());
    }

    /**
     * Tests the setHMajoAcquis() method.
     *
     * @return void
     */
    public function testSetHMajoAcquis(): void {

        $obj = new PrepaPaie();

        $obj->setHMajoAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getHMajoAcquis());
    }

    /**
     * Tests the setHMajoPris() method.
     *
     * @return void
     */
    public function testSetHMajoPris(): void {

        $obj = new PrepaPaie();

        $obj->setHMajoPris(10.092018);
        $this->assertEquals(10.092018, $obj->getHMajoPris());
    }

    /**
     * Tests the setHSupAComptabiliserRc() method.
     *
     * @return void
     */
    public function testSetHSupAComptabiliserRc(): void {

        $obj = new PrepaPaie();

        $obj->setHSupAComptabiliserRc(10.092018);
        $this->assertEquals(10.092018, $obj->getHSupAComptabiliserRc());
    }

    /**
     * Tests the setHSupAComptabiliserRcit() method.
     *
     * @return void
     */
    public function testSetHSupAComptabiliserRcit(): void {

        $obj = new PrepaPaie();

        $obj->setHSupAComptabiliserRcit(10.092018);
        $this->assertEquals(10.092018, $obj->getHSupAComptabiliserRcit());
    }

    /**
     * Tests the setHSupBonif() method.
     *
     * @return void
     */
    public function testSetHSupBonif(): void {

        $obj = new PrepaPaie();

        $obj->setHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getHSupBonif());
    }

    /**
     * Tests the setHorairePrevu() method.
     *
     * @return void
     */
    public function testSetHorairePrevu(): void {

        $obj = new PrepaPaie();

        $obj->setHorairePrevu(10.092018);
        $this->assertEquals(10.092018, $obj->getHorairePrevu());
    }

    /**
     * Tests the setNbHComp() method.
     *
     * @return void
     */
    public function testSetNbHComp(): void {

        $obj = new PrepaPaie();

        $obj->setNbHComp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHComp());
    }

    /**
     * Tests the setNbHNuit() method.
     *
     * @return void
     */
    public function testSetNbHNuit(): void {

        $obj = new PrepaPaie();

        $obj->setNbHNuit(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNuit());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new PrepaPaie();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new PrepaPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPourcentHBonif() method.
     *
     * @return void
     */
    public function testSetPourcentHBonif(): void {

        $obj = new PrepaPaie();

        $obj->setPourcentHBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHBonif());
    }

    /**
     * Tests the setRRecupAcquis() method.
     *
     * @return void
     */
    public function testSetRRecupAcquis(): void {

        $obj = new PrepaPaie();

        $obj->setRRecupAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getRRecupAcquis());
    }

    /**
     * Tests the setRRecupPris() method.
     *
     * @return void
     */
    public function testSetRRecupPris(): void {

        $obj = new PrepaPaie();

        $obj->setRRecupPris(10.092018);
        $this->assertEquals(10.092018, $obj->getRRecupPris());
    }

    /**
     * Tests the setRcAcquis() method.
     *
     * @return void
     */
    public function testSetRcAcquis(): void {

        $obj = new PrepaPaie();

        $obj->setRcAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getRcAcquis());
    }

    /**
     * Tests the setRcPris() method.
     *
     * @return void
     */
    public function testSetRcPris(): void {

        $obj = new PrepaPaie();

        $obj->setRcPris(10.092018);
        $this->assertEquals(10.092018, $obj->getRcPris());
    }

    /**
     * Tests the setRrAcquis() method.
     *
     * @return void
     */
    public function testSetRrAcquis(): void {

        $obj = new PrepaPaie();

        $obj->setRrAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getRrAcquis());
    }

    /**
     * Tests the setRrPris() method.
     *
     * @return void
     */
    public function testSetRrPris(): void {

        $obj = new PrepaPaie();

        $obj->setRrPris(10.092018);
        $this->assertEquals(10.092018, $obj->getRrPris());
    }

    /**
     * Tests the setSemaine() method.
     *
     * @return void
     */
    public function testSetSemaine(): void {

        $obj = new PrepaPaie();

        $obj->setSemaine("semaine");
        $this->assertEquals("semaine", $obj->getSemaine());
    }

    /**
     * Tests the setTotRealise() method.
     *
     * @return void
     */
    public function testSetTotRealise(): void {

        $obj = new PrepaPaie();

        $obj->setTotRealise(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRealise());
    }

    /**
     * Tests the setTravailEffectif() method.
     *
     * @return void
     */
    public function testSetTravailEffectif(): void {

        $obj = new PrepaPaie();

        $obj->setTravailEffectif(10.092018);
        $this->assertEquals(10.092018, $obj->getTravailEffectif());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PrepaPaie();

        $this->assertNull($obj->getCpPris());
        $this->assertNull($obj->getHMajoAcquis());
        $this->assertNull($obj->getHMajoPris());
        $this->assertNull($obj->getHSupAComptabiliserRc());
        $this->assertNull($obj->getHSupAComptabiliserRcit());
        $this->assertNull($obj->getHSupBonif());
        $this->assertNull($obj->getHorairePrevu());
        $this->assertNull($obj->getNbHComp());
        $this->assertNull($obj->getNbHNuit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHBonif());
        $this->assertNull($obj->getRcAcquis());
        $this->assertNull($obj->getRcPris());
        $this->assertNull($obj->getRrAcquis());
        $this->assertNull($obj->getRrPris());
        $this->assertNull($obj->getRRecupAcquis());
        $this->assertNull($obj->getRRecupPris());
        $this->assertNull($obj->getSemaine());
        $this->assertNull($obj->getTotRealise());
        $this->assertNull($obj->getTravailEffectif());
    }
}
