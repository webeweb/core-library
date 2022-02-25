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
use WBW\Library\Quadratus\Model\Proprete\Taches;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taches test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class TachesTest extends AbstractTestCase {

    /**
     * Tests setAutoIncr()
     *
     * @return void
     */
    public function testSetAutoIncr(): void {

        $obj = new Taches();

        $obj->setAutoIncr(10);
        $this->assertEquals(10, $obj->getAutoIncr());
    }

    /**
     * Tests setCadence()
     *
     * @return void
     */
    public function testSetCadence(): void {

        $obj = new Taches();

        $obj->setCadence(10.092018);
        $this->assertEquals(10.092018, $obj->getCadence());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Taches();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAnalytique()
     *
     * @return void
     */
    public function testSetCodeAnalytique(): void {

        $obj = new Taches();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new Taches();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Taches();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeDernSemGen()
     *
     * @return void
     */
    public function testSetCodeDernSemGen(): void {

        $obj = new Taches();

        $obj->setCodeDernSemGen("codeDernSemGen");
        $this->assertEquals("codeDernSemGen", $obj->getCodeDernSemGen());
    }

    /**
     * Tests setCodePrimeDimanche1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1Type2(): void {

        $obj = new Taches();

        $obj->setCodePrimeDimanche1Type2("codePrimeDimanche1Type2");
        $this->assertEquals("codePrimeDimanche1Type2", $obj->getCodePrimeDimanche1Type2());
    }

    /**
     * Tests setCodePrimeJf1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeJf1Type2(): void {

        $obj = new Taches();

        $obj->setCodePrimeJf1Type2("codePrimeJf1Type2");
        $this->assertEquals("codePrimeJf1Type2", $obj->getCodePrimeJf1Type2());
    }

    /**
     * Tests setCodePrimeNuit1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeNuit1Type2(): void {

        $obj = new Taches();

        $obj->setCodePrimeNuit1Type2("codePrimeNuit1Type2");
        $this->assertEquals("codePrimeNuit1Type2", $obj->getCodePrimeNuit1Type2());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new Taches();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setCodeTacheType()
     *
     * @return void
     */
    public function testSetCodeTacheType(): void {

        $obj = new Taches();

        $obj->setCodeTacheType("codeTacheType");
        $this->assertEquals("codeTacheType", $obj->getCodeTacheType());
    }

    /**
     * Tests setDescriptif()
     *
     * @return void
     */
    public function testSetDescriptif(): void {

        $obj = new Taches();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests setDtDernSemGen()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernSemGen(): void {

        // Set a Date/time mock.
        $dtDernSemGen = new DateTime("2018-09-10");

        $obj = new Taches();

        $obj->setDtDernSemGen($dtDernSemGen);
        $this->assertSame($dtDernSemGen, $obj->getDtDernSemGen());
    }

    /**
     * Tests setDureeBudget()
     *
     * @return void
     */
    public function testSetDureeBudget(): void {

        $obj = new Taches();

        $obj->setDureeBudget(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudget());
    }

    /**
     * Tests setFichePoste()
     *
     * @return void
     */
    public function testSetFichePoste(): void {

        $obj = new Taches();

        $obj->setFichePoste("fichePoste");
        $this->assertEquals("fichePoste", $obj->getFichePoste());
    }

    /**
     * Tests setGestionHotellerie()
     *
     * @return void
     */
    public function testSetGestionHotellerie(): void {

        $obj = new Taches();

        $obj->setGestionHotellerie(true);
        $this->assertEquals(true, $obj->getGestionHotellerie());
    }

    /**
     * Tests setMajDimNormalType2()
     *
     * @return void
     */
    public function testSetMajDimNormalType2(): void {

        $obj = new Taches();

        $obj->setMajDimNormalType2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajDimNormalType2());
    }

    /**
     * Tests setMajJfNormalType2()
     *
     * @return void
     */
    public function testSetMajJfNormalType2(): void {

        $obj = new Taches();

        $obj->setMajJfNormalType2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajJfNormalType2());
    }

    /**
     * Tests setMajNuitNormalType2()
     *
     * @return void
     */
    public function testSetMajNuitNormalType2(): void {

        $obj = new Taches();

        $obj->setMajNuitNormalType2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajNuitNormalType2());
    }

    /**
     * Tests setNiveauQualif()
     *
     * @return void
     */
    public function testSetNiveauQualif(): void {

        $obj = new Taches();

        $obj->setNiveauQualif(10);
        $this->assertEquals(10, $obj->getNiveauQualif());
    }

    /**
     * Tests setNonOeuvrant()
     *
     * @return void
     */
    public function testSetNonOeuvrant(): void {

        $obj = new Taches();

        $obj->setNonOeuvrant(true);
        $this->assertEquals(true, $obj->getNonOeuvrant());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new Taches();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setPlanningDernSemPrioritaire()
     *
     * @return void
     */
    public function testSetPlanningDernSemPrioritaire(): void {

        $obj = new Taches();

        $obj->setPlanningDernSemPrioritaire(true);
        $this->assertEquals(true, $obj->getPlanningDernSemPrioritaire());
    }

    /**
     * Tests setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new Taches();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests setSuiviHeures()
     *
     * @return void
     */
    public function testSetSuiviHeures(): void {

        $obj = new Taches();

        $obj->setSuiviHeures(true);
        $this->assertEquals(true, $obj->getSuiviHeures());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Taches();

        $this->assertNull($obj->getAutoIncr());
        $this->assertNull($obj->getCadence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDernSemGen());
        $this->assertNull($obj->getCodePrimeDimanche1Type2());
        $this->assertNull($obj->getCodePrimeJf1Type2());
        $this->assertNull($obj->getCodePrimeNuit1Type2());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDtDernSemGen());
        $this->assertNull($obj->getDureeBudget());
        $this->assertNull($obj->getFichePoste());
        $this->assertNull($obj->getGestionHotellerie());
        $this->assertNull($obj->getMajDimNormalType2());
        $this->assertNull($obj->getMajJfNormalType2());
        $this->assertNull($obj->getMajNuitNormalType2());
        $this->assertNull($obj->getNiveauQualif());
        $this->assertNull($obj->getNonOeuvrant());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPlanningDernSemPrioritaire());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getSuiviHeures());
    }
}
