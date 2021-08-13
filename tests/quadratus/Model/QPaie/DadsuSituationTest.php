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
use WBW\Library\Quadratus\Model\QPaie\DadsuSituation;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu situation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuSituationTest extends AbstractTestCase {

    /**
     * Tests the setCodeDebutPeriode() method.
     *
     * @return void
     */
    public function testSetCodeDebutPeriode(): void {

        $obj = new DadsuSituation();

        $obj->setCodeDebutPeriode("codeDebutPeriode");
        $this->assertEquals("codeDebutPeriode", $obj->getCodeDebutPeriode());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuSituation();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodeTempsArret() method.
     *
     * @return void
     */
    public function testSetCodeTempsArret(): void {

        $obj = new DadsuSituation();

        $obj->setCodeTempsArret("codeTempsArret");
        $this->assertEquals("codeTempsArret", $obj->getCodeTempsArret());
    }

    /**
     * Tests the setDateCtrlNorme() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlNorme(): void {

        // Set a Date/time mock.
        $dateCtrlNorme = new DateTime("2018-09-10");

        $obj = new DadsuSituation();

        $obj->setDateCtrlNorme($dateCtrlNorme);
        $this->assertSame($dateCtrlNorme, $obj->getDateCtrlNorme());
    }

    /**
     * Tests the setDebutPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriode(): void {

        // Set a Date/time mock.
        $debutPeriode = new DateTime("2018-09-10");

        $obj = new DadsuSituation();

        $obj->setDebutPeriode($debutPeriode);
        $this->assertSame($debutPeriode, $obj->getDebutPeriode());
    }

    /**
     * Tests the setDepuisCalcul() method.
     *
     * @return void
     */
    public function testSetDepuisCalcul(): void {

        $obj = new DadsuSituation();

        $obj->setDepuisCalcul(true);
        $this->assertEquals(true, $obj->getDepuisCalcul());
    }

    /**
     * Tests the setEtatCtrlNorme() method.
     *
     * @return void
     */
    public function testSetEtatCtrlNorme(): void {

        $obj = new DadsuSituation();

        $obj->setEtatCtrlNorme("etatCtrlNorme");
        $this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
    }

    /**
     * Tests the setFinPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriode(): void {

        // Set a Date/time mock.
        $finPeriode = new DateTime("2018-09-10");

        $obj = new DadsuSituation();

        $obj->setFinPeriode($finPeriode);
        $this->assertSame($finPeriode, $obj->getFinPeriode());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new DadsuSituation();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new DadsuSituation();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontantEmployeur() method.
     *
     * @return void
     */
    public function testSetMontantEmployeur(): void {

        $obj = new DadsuSituation();

        $obj->setMontantEmployeur(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantEmployeur());
    }

    /**
     * Tests the setMotifSituation() method.
     *
     * @return void
     */
    public function testSetMotifSituation(): void {

        $obj = new DadsuSituation();

        $obj->setMotifSituation("motifSituation");
        $this->assertEquals("motifSituation", $obj->getMotifSituation());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new DadsuSituation();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new DadsuSituation();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests the setQualifUniteTemps() method.
     *
     * @return void
     */
    public function testSetQualifUniteTemps(): void {

        $obj = new DadsuSituation();

        $obj->setQualifUniteTemps("qualifUniteTemps");
        $this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
    }

    /**
     * Tests the setTempsArret() method.
     *
     * @return void
     */
    public function testSetTempsArret(): void {

        $obj = new DadsuSituation();

        $obj->setTempsArret(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsArret());
    }

    /**
     * Tests the setTypeBase() method.
     *
     * @return void
     */
    public function testSetTypeBase(): void {

        $obj = new DadsuSituation();

        $obj->setTypeBase("typeBase");
        $this->assertEquals("typeBase", $obj->getTypeBase());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuSituation();

        $this->assertNull($obj->getCodeDebutPeriode());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeTempsArret());
        $this->assertNull($obj->getDateCtrlNorme());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getDepuisCalcul());
        $this->assertNull($obj->getEtatCtrlNorme());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontantEmployeur());
        $this->assertNull($obj->getMotifSituation());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getQualifUniteTemps());
        $this->assertNull($obj->getTempsArret());
        $this->assertNull($obj->getTypeBase());
    }
}
