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
use WBW\Library\Quadratus\Model\QPaie\LignesDucs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes ducs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesDucsTest extends AbstractTestCase {

    /**
     * Tests the setCodeAt() method.
     *
     * @return void
     */
    public function testSetCodeAt(): void {

        $obj = new LignesDucs();

        $obj->setCodeAt(10);
        $this->assertEquals(10, $obj->getCodeAt());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new LignesDucs();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeDucs() method.
     *
     * @return void
     */
    public function testSetCodeDucs(): void {

        $obj = new LignesDucs();

        $obj->setCodeDucs("codeDucs");
        $this->assertEquals("codeDucs", $obj->getCodeDucs());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new LignesDucs();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeInsee() method.
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new LignesDucs();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new LignesDucs();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setConditionSpec() method.
     *
     * @return void
     */
    public function testSetConditionSpec(): void {

        $obj = new LignesDucs();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new LignesDucs();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests the setExclureFusion() method.
     *
     * @return void
     */
    public function testSetExclureFusion(): void {

        $obj = new LignesDucs();

        $obj->setExclureFusion(true);
        $this->assertEquals(true, $obj->getExclureFusion());
    }

    /**
     * Tests the setIdInstitution() method.
     *
     * @return void
     */
    public function testSetIdInstitution(): void {

        $obj = new LignesDucs();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LignesDucs();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIsTaux() method.
     *
     * @return void
     */
    public function testSetIsTaux(): void {

        $obj = new LignesDucs();

        $obj->setIsTaux(true);
        $this->assertEquals(true, $obj->getIsTaux());
    }

    /**
     * Tests the setMarque() method.
     *
     * @return void
     */
    public function testSetMarque(): void {

        $obj = new LignesDucs();

        $obj->setMarque(true);
        $this->assertEquals(true, $obj->getMarque());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesDucs();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMtPatronal() method.
     *
     * @return void
     */
    public function testSetMtPatronal(): void {

        $obj = new LignesDucs();

        $obj->setMtPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPatronal());
    }

    /**
     * Tests the setMtSalarial() method.
     *
     * @return void
     */
    public function testSetMtSalarial(): void {

        $obj = new LignesDucs();

        $obj->setMtSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalarial());
    }

    /**
     * Tests the setNbCot() method.
     *
     * @return void
     */
    public function testSetNbCot(): void {

        $obj = new LignesDucs();

        $obj->setNbCot(10.092018);
        $this->assertEquals(10.092018, $obj->getNbCot());
    }

    /**
     * Tests the setNbPatronal() method.
     *
     * @return void
     */
    public function testSetNbPatronal(): void {

        $obj = new LignesDucs();

        $obj->setNbPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPatronal());
    }

    /**
     * Tests the setNbSalarial() method.
     *
     * @return void
     */
    public function testSetNbSalarial(): void {

        $obj = new LignesDucs();

        $obj->setNbSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getNbSalarial());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new LignesDucs();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new LignesDucs();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests the setQualifiantCotis() method.
     *
     * @return void
     */
    public function testSetQualifiantCotis(): void {

        $obj = new LignesDucs();

        $obj->setQualifiantCotis("qualifiantCotis");
        $this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
    }

    /**
     * Tests the setSommeBase() method.
     *
     * @return void
     */
    public function testSetSommeBase(): void {

        $obj = new LignesDucs();

        $obj->setSommeBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSommeBase());
    }

    /**
     * Tests the setTauxAt() method.
     *
     * @return void
     */
    public function testSetTauxAt(): void {

        $obj = new LignesDucs();

        $obj->setTauxAt(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAt());
    }

    /**
     * Tests the setTauxPatronal() method.
     *
     * @return void
     */
    public function testSetTauxPatronal(): void {

        $obj = new LignesDucs();

        $obj->setTauxPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronal());
    }

    /**
     * Tests the setTauxSalarial() method.
     *
     * @return void
     */
    public function testSetTauxSalarial(): void {

        $obj = new LignesDucs();

        $obj->setTauxSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarial());
    }

    /**
     * Tests the setTypeBaseUnique() method.
     *
     * @return void
     */
    public function testSetTypeBaseUnique(): void {

        $obj = new LignesDucs();

        $obj->setTypeBaseUnique(true);
        $this->assertEquals(true, $obj->getTypeBaseUnique());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesDucs();

        $this->assertNull($obj->getCodeAt());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getExclureFusion());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIsTaux());
        $this->assertNull($obj->getMarque());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMtPatronal());
        $this->assertNull($obj->getMtSalarial());
        $this->assertNull($obj->getNbCot());
        $this->assertNull($obj->getNbPatronal());
        $this->assertNull($obj->getNbSalarial());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getSommeBase());
        $this->assertNull($obj->getTauxAt());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
        $this->assertNull($obj->getTypeBaseUnique());
    }
}
