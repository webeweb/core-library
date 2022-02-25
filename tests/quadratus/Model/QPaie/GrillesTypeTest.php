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
use WBW\Library\Quadratus\Model\QPaie\GrillesType;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Grilles type test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class GrillesTypeTest extends AbstractTestCase {

    /**
     * Tests setCodeLibHNuit()
     *
     * @return void
     */
    public function testSetCodeLibHNuit(): void {

        $obj = new GrillesType();

        $obj->setCodeLibHNuit("codeLibHNuit");
        $this->assertEquals("codeLibHNuit", $obj->getCodeLibHNuit());
    }

    /**
     * Tests setContingentHSupRc()
     *
     * @return void
     */
    public function testSetContingentHSupRc(): void {

        $obj = new GrillesType();

        $obj->setContingentHSupRc(10.092018);
        $this->assertEquals(10.092018, $obj->getContingentHSupRc());
    }

    /**
     * Tests setContingentHSupRcit()
     *
     * @return void
     */
    public function testSetContingentHSupRcit(): void {

        $obj = new GrillesType();

        $obj->setContingentHSupRcit(10.092018);
        $this->assertEquals(10.092018, $obj->getContingentHSupRcit());
    }

    /**
     * Tests setDateApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new GrillesType();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests setDateFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new GrillesType();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests setDureeHebdo()
     *
     * @return void
     */
    public function testSetDureeHebdo(): void {

        $obj = new GrillesType();

        $obj->setDureeHebdo(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeHebdo());
    }

    /**
     * Tests setDureeMaxHebdo()
     *
     * @return void
     */
    public function testSetDureeMaxHebdo(): void {

        $obj = new GrillesType();

        $obj->setDureeMaxHebdo(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMaxHebdo());
    }

    /**
     * Tests setDureeMaxHebdoModul()
     *
     * @return void
     */
    public function testSetDureeMaxHebdoModul(): void {

        $obj = new GrillesType();

        $obj->setDureeMaxHebdoModul(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMaxHebdoModul());
    }

    /**
     * Tests setDureeMaxMens()
     *
     * @return void
     */
    public function testSetDureeMaxMens(): void {

        $obj = new GrillesType();

        $obj->setDureeMaxMens(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMaxMens());
    }

    /**
     * Tests setDureeMoyHebdo1()
     *
     * @return void
     */
    public function testSetDureeMoyHebdo1(): void {

        $obj = new GrillesType();

        $obj->setDureeMoyHebdo1(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMoyHebdo1());
    }

    /**
     * Tests setDureeMoyHebdo2()
     *
     * @return void
     */
    public function testSetDureeMoyHebdo2(): void {

        $obj = new GrillesType();

        $obj->setDureeMoyHebdo2(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMoyHebdo2());
    }

    /**
     * Tests setDureeMoyPeriode1()
     *
     * @return void
     */
    public function testSetDureeMoyPeriode1(): void {

        $obj = new GrillesType();

        $obj->setDureeMoyPeriode1(10);
        $this->assertEquals(10, $obj->getDureeMoyPeriode1());
    }

    /**
     * Tests setDureeMoyPeriode2()
     *
     * @return void
     */
    public function testSetDureeMoyPeriode2(): void {

        $obj = new GrillesType();

        $obj->setDureeMoyPeriode2(10);
        $this->assertEquals(10, $obj->getDureeMoyPeriode2());
    }

    /**
     * Tests setGestionHNuit()
     *
     * @return void
     */
    public function testSetGestionHNuit(): void {

        $obj = new GrillesType();

        $obj->setGestionHNuit(true);
        $this->assertEquals(true, $obj->getGestionHNuit());
    }

    /**
     * Tests setGestionJfnt()
     *
     * @return void
     */
    public function testSetGestionJfnt(): void {

        $obj = new GrillesType();

        $obj->setGestionJfnt(true);
        $this->assertEquals(true, $obj->getGestionJfnt());
    }

    /**
     * Tests setGestionPlagesHoraires()
     *
     * @return void
     */
    public function testSetGestionPlagesHoraires(): void {

        $obj = new GrillesType();

        $obj->setGestionPlagesHoraires(true);
        $this->assertEquals(true, $obj->getGestionPlagesHoraires());
    }

    /**
     * Tests setHNuitDeb()
     *
     * @return void
     */
    public function testSetHNuitDeb(): void {

        $obj = new GrillesType();

        $obj->setHNuitDeb("hNuitDeb");
        $this->assertEquals("hNuitDeb", $obj->getHNuitDeb());
    }

    /**
     * Tests setHNuitFin()
     *
     * @return void
     */
    public function testSetHNuitFin(): void {

        $obj = new GrillesType();

        $obj->setHNuitFin("hNuitFin");
        $this->assertEquals("hNuitFin", $obj->getHNuitFin());
    }

    /**
     * Tests setHNuitTxMajo()
     *
     * @return void
     */
    public function testSetHNuitTxMajo(): void {

        $obj = new GrillesType();

        $obj->setHNuitTxMajo(10.092018);
        $this->assertEquals(10.092018, $obj->getHNuitTxMajo());
    }

    /**
     * Tests setHebdoMens()
     *
     * @return void
     */
    public function testSetHebdoMens(): void {

        $obj = new GrillesType();

        $obj->setHebdoMens("hebdoMens");
        $this->assertEquals("hebdoMens", $obj->getHebdoMens());
    }

    /**
     * Tests setModulation()
     *
     * @return void
     */
    public function testSetModulation(): void {

        $obj = new GrillesType();

        $obj->setModulation(true);
        $this->assertEquals(true, $obj->getModulation());
    }

    /**
     * Tests setNbHeuresDansJour()
     *
     * @return void
     */
    public function testSetNbHeuresDansJour(): void {

        $obj = new GrillesType();

        $obj->setNbHeuresDansJour(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresDansJour());
    }

    /**
     * Tests setNbHjf1()
     *
     * @return void
     */
    public function testSetNbHjf1(): void {

        $obj = new GrillesType();

        $obj->setNbHjf1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf1());
    }

    /**
     * Tests setNbHjf2()
     *
     * @return void
     */
    public function testSetNbHjf2(): void {

        $obj = new GrillesType();

        $obj->setNbHjf2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf2());
    }

    /**
     * Tests setNbHjf3()
     *
     * @return void
     */
    public function testSetNbHjf3(): void {

        $obj = new GrillesType();

        $obj->setNbHjf3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf3());
    }

    /**
     * Tests setNbHjf4()
     *
     * @return void
     */
    public function testSetNbHjf4(): void {

        $obj = new GrillesType();

        $obj->setNbHjf4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf4());
    }

    /**
     * Tests setNbHjf5()
     *
     * @return void
     */
    public function testSetNbHjf5(): void {

        $obj = new GrillesType();

        $obj->setNbHjf5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf5());
    }

    /**
     * Tests setNbHjf6()
     *
     * @return void
     */
    public function testSetNbHjf6(): void {

        $obj = new GrillesType();

        $obj->setNbHjf6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf6());
    }

    /**
     * Tests setNbHjf7()
     *
     * @return void
     */
    public function testSetNbHjf7(): void {

        $obj = new GrillesType();

        $obj->setNbHjf7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf7());
    }

    /**
     * Tests setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new GrillesType();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests setReposRecup()
     *
     * @return void
     */
    public function testSetReposRecup(): void {

        $obj = new GrillesType();

        $obj->setReposRecup(true);
        $this->assertEquals(true, $obj->getReposRecup());
    }

    /**
     * Tests setTauxReposComp()
     *
     * @return void
     */
    public function testSetTauxReposComp(): void {

        $obj = new GrillesType();

        $obj->setTauxReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxReposComp());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new GrillesType();

        $this->assertNull($obj->getCodeLibHNuit());
        $this->assertNull($obj->getContingentHSupRc());
        $this->assertNull($obj->getContingentHSupRcit());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDureeHebdo());
        $this->assertNull($obj->getDureeMaxHebdo());
        $this->assertNull($obj->getDureeMaxHebdoModul());
        $this->assertNull($obj->getDureeMaxMens());
        $this->assertNull($obj->getDureeMoyHebdo1());
        $this->assertNull($obj->getDureeMoyHebdo2());
        $this->assertNull($obj->getDureeMoyPeriode1());
        $this->assertNull($obj->getDureeMoyPeriode2());
        $this->assertNull($obj->getGestionHNuit());
        $this->assertNull($obj->getGestionJfnt());
        $this->assertNull($obj->getGestionPlagesHoraires());
        $this->assertNull($obj->getHNuitDeb());
        $this->assertNull($obj->getHNuitFin());
        $this->assertNull($obj->getHNuitTxMajo());
        $this->assertNull($obj->getHebdoMens());
        $this->assertNull($obj->getModulation());
        $this->assertNull($obj->getNbHjf1());
        $this->assertNull($obj->getNbHjf2());
        $this->assertNull($obj->getNbHjf3());
        $this->assertNull($obj->getNbHjf4());
        $this->assertNull($obj->getNbHjf5());
        $this->assertNull($obj->getNbHjf6());
        $this->assertNull($obj->getNbHjf7());
        $this->assertNull($obj->getNbHeuresDansJour());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getReposRecup());
        $this->assertNull($obj->getTauxReposComp());
    }
}
