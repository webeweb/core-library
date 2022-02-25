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

use WBW\Library\Quadratus\Model\QPaie\DadsuPrevoyanceLignesContrat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu prevoyance lignes contrat test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuPrevoyanceLignesContratTest extends AbstractTestCase {

    /**
     * Tests setCodeDelegGestion()
     *
     * @return void
     */
    public function testSetCodeDelegGestion(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setCodeDelegGestion("codeDelegGestion");
        $this->assertEquals("codeDelegGestion", $obj->getCodeDelegGestion());
    }

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setCodeOption()
     *
     * @return void
     */
    public function testSetCodeOption(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setCodeOption("codeOption");
        $this->assertEquals("codeOption", $obj->getCodeOption());
    }

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setCodePopulation()
     *
     * @return void
     */
    public function testSetCodePopulation(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setCodePopulation("codePopulation");
        $this->assertEquals("codePopulation", $obj->getCodePopulation());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setPeriodeAffectation()
     *
     * @return void
     */
    public function testSetPeriodeAffectation(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setPeriodeAffectation("periodeAffectation");
        $this->assertEquals("periodeAffectation", $obj->getPeriodeAffectation());
    }

    /**
     * Tests setQualificationFraisSante()
     *
     * @return void
     */
    public function testSetQualificationFraisSante(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setQualificationFraisSante("qualificationFraisSante");
        $this->assertEquals("qualificationFraisSante", $obj->getQualificationFraisSante());
    }

    /**
     * Tests setRefContrat()
     *
     * @return void
     */
    public function testSetRefContrat(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests setTypeCotis()
     *
     * @return void
     */
    public function testSetTypeCotis(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setTypeCotis("typeCotis");
        $this->assertEquals("typeCotis", $obj->getTypeCotis());
    }

    /**
     * Tests setTypePopulation()
     *
     * @return void
     */
    public function testSetTypePopulation(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setTypePopulation("typePopulation");
        $this->assertEquals("typePopulation", $obj->getTypePopulation());
    }

    /**
     * Tests setUniteDateAncienBranche()
     *
     * @return void
     */
    public function testSetUniteDateAncienBranche(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setUniteDateAncienBranche("uniteDateAncienBranche");
        $this->assertEquals("uniteDateAncienBranche", $obj->getUniteDateAncienBranche());
    }

    /**
     * Tests setUniteDateAncienCollege()
     *
     * @return void
     */
    public function testSetUniteDateAncienCollege(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setUniteDateAncienCollege("uniteDateAncienCollege");
        $this->assertEquals("uniteDateAncienCollege", $obj->getUniteDateAncienCollege());
    }

    /**
     * Tests setUniteDateAncienPoste()
     *
     * @return void
     */
    public function testSetUniteDateAncienPoste(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setUniteDateAncienPoste("uniteDateAncienPoste");
        $this->assertEquals("uniteDateAncienPoste", $obj->getUniteDateAncienPoste());
    }

    /**
     * Tests setUnitePremDateEntree()
     *
     * @return void
     */
    public function testSetUnitePremDateEntree(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setUnitePremDateEntree("unitePremDateEntree");
        $this->assertEquals("unitePremDateEntree", $obj->getUnitePremDateEntree());
    }

    /**
     * Tests setValeurCotis()
     *
     * @return void
     */
    public function testSetValeurCotis(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setValeurCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurCotis());
    }

    /**
     * Tests setValeurCotisInitiale()
     *
     * @return void
     */
    public function testSetValeurCotisInitiale(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $obj->setValeurCotisInitiale(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurCotisInitiale());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuPrevoyanceLignesContrat();

        $this->assertNull($obj->getCodeDelegGestion());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getPeriodeAffectation());
        $this->assertNull($obj->getQualificationFraisSante());
        $this->assertNull($obj->getRefContrat());
        $this->assertNull($obj->getTypeCotis());
        $this->assertNull($obj->getTypePopulation());
        $this->assertNull($obj->getUniteDateAncienBranche());
        $this->assertNull($obj->getUniteDateAncienCollege());
        $this->assertNull($obj->getUniteDateAncienPoste());
        $this->assertNull($obj->getUnitePremDateEntree());
        $this->assertNull($obj->getValeurCotis());
        $this->assertNull($obj->getValeurCotisInitiale());
    }
}
