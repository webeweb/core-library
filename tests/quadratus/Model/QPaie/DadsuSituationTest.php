<?php

declare(strict_types = 1);

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
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\DadsuSituation;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu situation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuSituationTest extends AbstractTestCase {

    /**
     * Test setCodeDebutPeriode()
     *
     * @return void
     */
    public function testSetCodeDebutPeriode(): void {

        $obj = new DadsuSituation();

        $obj->setCodeDebutPeriode("codeDebutPeriode");
        $this->assertEquals("codeDebutPeriode", $obj->getCodeDebutPeriode());
    }

    /**
     * Test setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuSituation();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Test setCodeTempsArret()
     *
     * @return void
     */
    public function testSetCodeTempsArret(): void {

        $obj = new DadsuSituation();

        $obj->setCodeTempsArret("codeTempsArret");
        $this->assertEquals("codeTempsArret", $obj->getCodeTempsArret());
    }

    /**
     * Test setDateCtrlNorme()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCtrlNorme(): void {

        // Set a Date/time mock.
        $dateCtrlNorme = new DateTime("2018-09-10");

        $obj = new DadsuSituation();

        $obj->setDateCtrlNorme($dateCtrlNorme);
        $this->assertSame($dateCtrlNorme, $obj->getDateCtrlNorme());
    }

    /**
     * Test setDebutPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutPeriode(): void {

        // Set a Date/time mock.
        $debutPeriode = new DateTime("2018-09-10");

        $obj = new DadsuSituation();

        $obj->setDebutPeriode($debutPeriode);
        $this->assertSame($debutPeriode, $obj->getDebutPeriode());
    }

    /**
     * Test setDepuisCalcul()
     *
     * @return void
     */
    public function testSetDepuisCalcul(): void {

        $obj = new DadsuSituation();

        $obj->setDepuisCalcul(true);
        $this->assertTrue($obj->getDepuisCalcul());
    }

    /**
     * Test setEtatCtrlNorme()
     *
     * @return void
     */
    public function testSetEtatCtrlNorme(): void {

        $obj = new DadsuSituation();

        $obj->setEtatCtrlNorme("etatCtrlNorme");
        $this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
    }

    /**
     * Test setFinPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPeriode(): void {

        // Set a Date/time mock.
        $finPeriode = new DateTime("2018-09-10");

        $obj = new DadsuSituation();

        $obj->setFinPeriode($finPeriode);
        $this->assertSame($finPeriode, $obj->getFinPeriode());
    }

    /**
     * Test setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new DadsuSituation();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Test setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new DadsuSituation();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Test setMontantEmployeur()
     *
     * @return void
     */
    public function testSetMontantEmployeur(): void {

        $obj = new DadsuSituation();

        $obj->setMontantEmployeur(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantEmployeur());
    }

    /**
     * Test setMotifSituation()
     *
     * @return void
     */
    public function testSetMotifSituation(): void {

        $obj = new DadsuSituation();

        $obj->setMotifSituation("motifSituation");
        $this->assertEquals("motifSituation", $obj->getMotifSituation());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new DadsuSituation();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new DadsuSituation();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Test setQualifUniteTemps()
     *
     * @return void
     */
    public function testSetQualifUniteTemps(): void {

        $obj = new DadsuSituation();

        $obj->setQualifUniteTemps("qualifUniteTemps");
        $this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
    }

    /**
     * Test setTempsArret()
     *
     * @return void
     */
    public function testSetTempsArret(): void {

        $obj = new DadsuSituation();

        $obj->setTempsArret(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsArret());
    }

    /**
     * Test setTypeBase()
     *
     * @return void
     */
    public function testSetTypeBase(): void {

        $obj = new DadsuSituation();

        $obj->setTypeBase("typeBase");
        $this->assertEquals("typeBase", $obj->getTypeBase());
    }

    /**
     * Test __construct()
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
