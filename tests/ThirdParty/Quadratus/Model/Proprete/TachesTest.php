<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Taches;

/**
 * Taches model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class TachesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Taches();

        $this->assertNull($obj->getAutoIncr());
        $this->assertNull($obj->getCadence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDernSemGen());
        $this->assertNull($obj->getCodePrimeDimanche1Type2());
        $this->assertNull($obj->getCodePrimeJF1Type2());
        $this->assertNull($obj->getCodePrimeNuit1Type2());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDtDernSemGen());
        $this->assertNull($obj->getDureeBudget());
        $this->assertNull($obj->getFichePoste());
        $this->assertNull($obj->getGestionHotellerie());
        $this->assertNull($obj->getMajDimNormalType2());
        $this->assertNull($obj->getMajJFNormalType2());
        $this->assertNull($obj->getMajNuitNormalType2());
        $this->assertNull($obj->getNiveauQualif());
        $this->assertNull($obj->getNonOeuvrant());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getPlanningDernSemPrioritaire());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getSuiviHeures());
    }

    /**
     * Tests the setAutoIncr() method.
     *
     * @return void
     */
    public function testSetAutoIncr() {

        $obj = new Taches();

        $obj->setAutoIncr(10);
        $this->assertEquals(10, $obj->getAutoIncr());
    }

    /**
     * Tests the setCadence() method.
     *
     * @return void
     */
    public function testSetCadence() {

        $obj = new Taches();

        $obj->setCadence(10.092018);
        $this->assertEquals(10.092018, $obj->getCadence());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new Taches();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeAnalytique() {

        $obj = new Taches();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new Taches();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Taches();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDernSemGen() method.
     *
     * @return void
     */
    public function testSetCodeDernSemGen() {

        $obj = new Taches();

        $obj->setCodeDernSemGen("codeDernSemGen");
        $this->assertEquals("codeDernSemGen", $obj->getCodeDernSemGen());
    }

    /**
     * Tests the setCodePrimeDimanche1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1Type2() {

        $obj = new Taches();

        $obj->setCodePrimeDimanche1Type2("codePrimeDimanche1Type2");
        $this->assertEquals("codePrimeDimanche1Type2", $obj->getCodePrimeDimanche1Type2());
    }

    /**
     * Tests the setCodePrimeJF1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeJF1Type2() {

        $obj = new Taches();

        $obj->setCodePrimeJF1Type2("codePrimeJF1Type2");
        $this->assertEquals("codePrimeJF1Type2", $obj->getCodePrimeJF1Type2());
    }

    /**
     * Tests the setCodePrimeNuit1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit1Type2() {

        $obj = new Taches();

        $obj->setCodePrimeNuit1Type2("codePrimeNuit1Type2");
        $this->assertEquals("codePrimeNuit1Type2", $obj->getCodePrimeNuit1Type2());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new Taches();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCodeTacheType() method.
     *
     * @return void
     */
    public function testSetCodeTacheType() {

        $obj = new Taches();

        $obj->setCodeTacheType("codeTacheType");
        $this->assertEquals("codeTacheType", $obj->getCodeTacheType());
    }

    /**
     * Tests the setDescriptif() method.
     *
     * @return void
     */
    public function testSetDescriptif() {

        $obj = new Taches();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests the setDtDernSemGen() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernSemGen() {

        $obj = new Taches();

        $obj->setDtDernSemGen(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDernSemGen());
    }

    /**
     * Tests the setDureeBudget() method.
     *
     * @return void
     */
    public function testSetDureeBudget() {

        $obj = new Taches();

        $obj->setDureeBudget(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudget());
    }

    /**
     * Tests the setFichePoste() method.
     *
     * @return void
     */
    public function testSetFichePoste() {

        $obj = new Taches();

        $obj->setFichePoste("fichePoste");
        $this->assertEquals("fichePoste", $obj->getFichePoste());
    }

    /**
     * Tests the setGestionHotellerie() method.
     *
     * @return void
     */
    public function testSetGestionHotellerie() {

        $obj = new Taches();

        $obj->setGestionHotellerie(true);
        $this->assertEquals(true, $obj->getGestionHotellerie());
    }

    /**
     * Tests the setMajDimNormalType2() method.
     *
     * @return void
     */
    public function testSetMajDimNormalType2() {

        $obj = new Taches();

        $obj->setMajDimNormalType2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajDimNormalType2());
    }

    /**
     * Tests the setMajJFNormalType2() method.
     *
     * @return void
     */
    public function testSetMajJFNormalType2() {

        $obj = new Taches();

        $obj->setMajJFNormalType2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajJFNormalType2());
    }

    /**
     * Tests the setMajNuitNormalType2() method.
     *
     * @return void
     */
    public function testSetMajNuitNormalType2() {

        $obj = new Taches();

        $obj->setMajNuitNormalType2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajNuitNormalType2());
    }

    /**
     * Tests the setNiveauQualif() method.
     *
     * @return void
     */
    public function testSetNiveauQualif() {

        $obj = new Taches();

        $obj->setNiveauQualif(10);
        $this->assertEquals(10, $obj->getNiveauQualif());
    }

    /**
     * Tests the setNonOeuvrant() method.
     *
     * @return void
     */
    public function testSetNonOeuvrant() {

        $obj = new Taches();

        $obj->setNonOeuvrant(true);
        $this->assertEquals(true, $obj->getNonOeuvrant());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new Taches();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setPlanningDernSemPrioritaire() method.
     *
     * @return void
     */
    public function testSetPlanningDernSemPrioritaire() {

        $obj = new Taches();

        $obj->setPlanningDernSemPrioritaire(true);
        $this->assertEquals(true, $obj->getPlanningDernSemPrioritaire());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new Taches();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setSuiviHeures() method.
     *
     * @return void
     */
    public function testSetSuiviHeures() {

        $obj = new Taches();

        $obj->setSuiviHeures(true);
        $this->assertEquals(true, $obj->getSuiviHeures());
    }
}
