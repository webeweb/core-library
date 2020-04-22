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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\GrillesType;

/**
 * Grilles type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class GrillesTypeTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibHNuit() method.
     *
     * @return void
     */
    public function testSetCodeLibHNuit() {

        $obj = new GrillesType();

        $obj->setCodeLibHNuit("codeLibHNuit");
        $this->assertEquals("codeLibHNuit", $obj->getCodeLibHNuit());
    }

    /**
     * Tests the setContingentHSupRc() method.
     *
     * @return void
     */
    public function testSetContingentHSupRc() {

        $obj = new GrillesType();

        $obj->setContingentHSupRc(10.092018);
        $this->assertEquals(10.092018, $obj->getContingentHSupRc());
    }

    /**
     * Tests the setContingentHSupRcit() method.
     *
     * @return void
     */
    public function testSetContingentHSupRcit() {

        $obj = new GrillesType();

        $obj->setContingentHSupRcit(10.092018);
        $this->assertEquals(10.092018, $obj->getContingentHSupRcit());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication() {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new GrillesType();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin() {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new GrillesType();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setDureeHebdo() method.
     *
     * @return void
     */
    public function testSetDureeHebdo() {

        $obj = new GrillesType();

        $obj->setDureeHebdo(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeHebdo());
    }

    /**
     * Tests the setDureeMaxHebdo() method.
     *
     * @return void
     */
    public function testSetDureeMaxHebdo() {

        $obj = new GrillesType();

        $obj->setDureeMaxHebdo(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMaxHebdo());
    }

    /**
     * Tests the setDureeMaxHebdoModul() method.
     *
     * @return void
     */
    public function testSetDureeMaxHebdoModul() {

        $obj = new GrillesType();

        $obj->setDureeMaxHebdoModul(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMaxHebdoModul());
    }

    /**
     * Tests the setDureeMaxMens() method.
     *
     * @return void
     */
    public function testSetDureeMaxMens() {

        $obj = new GrillesType();

        $obj->setDureeMaxMens(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMaxMens());
    }

    /**
     * Tests the setDureeMoyHebdo1() method.
     *
     * @return void
     */
    public function testSetDureeMoyHebdo1() {

        $obj = new GrillesType();

        $obj->setDureeMoyHebdo1(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMoyHebdo1());
    }

    /**
     * Tests the setDureeMoyHebdo2() method.
     *
     * @return void
     */
    public function testSetDureeMoyHebdo2() {

        $obj = new GrillesType();

        $obj->setDureeMoyHebdo2(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMoyHebdo2());
    }

    /**
     * Tests the setDureeMoyPeriode1() method.
     *
     * @return void
     */
    public function testSetDureeMoyPeriode1() {

        $obj = new GrillesType();

        $obj->setDureeMoyPeriode1(10);
        $this->assertEquals(10, $obj->getDureeMoyPeriode1());
    }

    /**
     * Tests the setDureeMoyPeriode2() method.
     *
     * @return void
     */
    public function testSetDureeMoyPeriode2() {

        $obj = new GrillesType();

        $obj->setDureeMoyPeriode2(10);
        $this->assertEquals(10, $obj->getDureeMoyPeriode2());
    }

    /**
     * Tests the setGestionHNuit() method.
     *
     * @return void
     */
    public function testSetGestionHNuit() {

        $obj = new GrillesType();

        $obj->setGestionHNuit(true);
        $this->assertEquals(true, $obj->getGestionHNuit());
    }

    /**
     * Tests the setGestionJfnt() method.
     *
     * @return void
     */
    public function testSetGestionJfnt() {

        $obj = new GrillesType();

        $obj->setGestionJfnt(true);
        $this->assertEquals(true, $obj->getGestionJfnt());
    }

    /**
     * Tests the setGestionPlagesHoraires() method.
     *
     * @return void
     */
    public function testSetGestionPlagesHoraires() {

        $obj = new GrillesType();

        $obj->setGestionPlagesHoraires(true);
        $this->assertEquals(true, $obj->getGestionPlagesHoraires());
    }

    /**
     * Tests the setHNuitDeb() method.
     *
     * @return void
     */
    public function testSetHNuitDeb() {

        $obj = new GrillesType();

        $obj->setHNuitDeb("hNuitDeb");
        $this->assertEquals("hNuitDeb", $obj->getHNuitDeb());
    }

    /**
     * Tests the setHNuitFin() method.
     *
     * @return void
     */
    public function testSetHNuitFin() {

        $obj = new GrillesType();

        $obj->setHNuitFin("hNuitFin");
        $this->assertEquals("hNuitFin", $obj->getHNuitFin());
    }

    /**
     * Tests the setHNuitTxMajo() method.
     *
     * @return void
     */
    public function testSetHNuitTxMajo() {

        $obj = new GrillesType();

        $obj->setHNuitTxMajo(10.092018);
        $this->assertEquals(10.092018, $obj->getHNuitTxMajo());
    }

    /**
     * Tests the setHebdoMens() method.
     *
     * @return void
     */
    public function testSetHebdoMens() {

        $obj = new GrillesType();

        $obj->setHebdoMens("hebdoMens");
        $this->assertEquals("hebdoMens", $obj->getHebdoMens());
    }

    /**
     * Tests the setModulation() method.
     *
     * @return void
     */
    public function testSetModulation() {

        $obj = new GrillesType();

        $obj->setModulation(true);
        $this->assertEquals(true, $obj->getModulation());
    }

    /**
     * Tests the setNbHeuresDansJour() method.
     *
     * @return void
     */
    public function testSetNbHeuresDansJour() {

        $obj = new GrillesType();

        $obj->setNbHeuresDansJour(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresDansJour());
    }

    /**
     * Tests the setNbHjf1() method.
     *
     * @return void
     */
    public function testSetNbHjf1() {

        $obj = new GrillesType();

        $obj->setNbHjf1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf1());
    }

    /**
     * Tests the setNbHjf2() method.
     *
     * @return void
     */
    public function testSetNbHjf2() {

        $obj = new GrillesType();

        $obj->setNbHjf2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf2());
    }

    /**
     * Tests the setNbHjf3() method.
     *
     * @return void
     */
    public function testSetNbHjf3() {

        $obj = new GrillesType();

        $obj->setNbHjf3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf3());
    }

    /**
     * Tests the setNbHjf4() method.
     *
     * @return void
     */
    public function testSetNbHjf4() {

        $obj = new GrillesType();

        $obj->setNbHjf4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf4());
    }

    /**
     * Tests the setNbHjf5() method.
     *
     * @return void
     */
    public function testSetNbHjf5() {

        $obj = new GrillesType();

        $obj->setNbHjf5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf5());
    }

    /**
     * Tests the setNbHjf6() method.
     *
     * @return void
     */
    public function testSetNbHjf6() {

        $obj = new GrillesType();

        $obj->setNbHjf6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf6());
    }

    /**
     * Tests the setNbHjf7() method.
     *
     * @return void
     */
    public function testSetNbHjf7() {

        $obj = new GrillesType();

        $obj->setNbHjf7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf7());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType() {

        $obj = new GrillesType();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the setReposRecup() method.
     *
     * @return void
     */
    public function testSetReposRecup() {

        $obj = new GrillesType();

        $obj->setReposRecup(true);
        $this->assertEquals(true, $obj->getReposRecup());
    }

    /**
     * Tests the setTauxReposComp() method.
     *
     * @return void
     */
    public function testSetTauxReposComp() {

        $obj = new GrillesType();

        $obj->setTauxReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxReposComp());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
