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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesDucsTest extends AbstractTestCase {

    /**
     * Tests setCodeAt()
     *
     * @return void
     */
    public function testSetCodeAt(): void {

        $obj = new LignesDucs();

        $obj->setCodeAt(10);
        $this->assertEquals(10, $obj->getCodeAt());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new LignesDucs();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeDucs()
     *
     * @return void
     */
    public function testSetCodeDucs(): void {

        $obj = new LignesDucs();

        $obj->setCodeDucs("codeDucs");
        $this->assertEquals("codeDucs", $obj->getCodeDucs());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new LignesDucs();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeInsee()
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new LignesDucs();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new LignesDucs();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setConditionSpec()
     *
     * @return void
     */
    public function testSetConditionSpec(): void {

        $obj = new LignesDucs();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
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

        $obj = new LignesDucs();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests setExclureFusion()
     *
     * @return void
     */
    public function testSetExclureFusion(): void {

        $obj = new LignesDucs();

        $obj->setExclureFusion(true);
        $this->assertEquals(true, $obj->getExclureFusion());
    }

    /**
     * Tests setIdInstitution()
     *
     * @return void
     */
    public function testSetIdInstitution(): void {

        $obj = new LignesDucs();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LignesDucs();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setIsTaux()
     *
     * @return void
     */
    public function testSetIsTaux(): void {

        $obj = new LignesDucs();

        $obj->setIsTaux(true);
        $this->assertEquals(true, $obj->getIsTaux());
    }

    /**
     * Tests setMarque()
     *
     * @return void
     */
    public function testSetMarque(): void {

        $obj = new LignesDucs();

        $obj->setMarque(true);
        $this->assertEquals(true, $obj->getMarque());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesDucs();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setMtPatronal()
     *
     * @return void
     */
    public function testSetMtPatronal(): void {

        $obj = new LignesDucs();

        $obj->setMtPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPatronal());
    }

    /**
     * Tests setMtSalarial()
     *
     * @return void
     */
    public function testSetMtSalarial(): void {

        $obj = new LignesDucs();

        $obj->setMtSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalarial());
    }

    /**
     * Tests setNbCot()
     *
     * @return void
     */
    public function testSetNbCot(): void {

        $obj = new LignesDucs();

        $obj->setNbCot(10.092018);
        $this->assertEquals(10.092018, $obj->getNbCot());
    }

    /**
     * Tests setNbPatronal()
     *
     * @return void
     */
    public function testSetNbPatronal(): void {

        $obj = new LignesDucs();

        $obj->setNbPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPatronal());
    }

    /**
     * Tests setNbSalarial()
     *
     * @return void
     */
    public function testSetNbSalarial(): void {

        $obj = new LignesDucs();

        $obj->setNbSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getNbSalarial());
    }

    /**
     * Tests setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new LignesDucs();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests setPeriodeDecla()
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
     * Tests setQualifiantCotis()
     *
     * @return void
     */
    public function testSetQualifiantCotis(): void {

        $obj = new LignesDucs();

        $obj->setQualifiantCotis("qualifiantCotis");
        $this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
    }

    /**
     * Tests setSommeBase()
     *
     * @return void
     */
    public function testSetSommeBase(): void {

        $obj = new LignesDucs();

        $obj->setSommeBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSommeBase());
    }

    /**
     * Tests setTauxAt()
     *
     * @return void
     */
    public function testSetTauxAt(): void {

        $obj = new LignesDucs();

        $obj->setTauxAt(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAt());
    }

    /**
     * Tests setTauxPatronal()
     *
     * @return void
     */
    public function testSetTauxPatronal(): void {

        $obj = new LignesDucs();

        $obj->setTauxPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronal());
    }

    /**
     * Tests setTauxSalarial()
     *
     * @return void
     */
    public function testSetTauxSalarial(): void {

        $obj = new LignesDucs();

        $obj->setTauxSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarial());
    }

    /**
     * Tests setTypeBaseUnique()
     *
     * @return void
     */
    public function testSetTypeBaseUnique(): void {

        $obj = new LignesDucs();

        $obj->setTypeBaseUnique(true);
        $this->assertEquals(true, $obj->getTypeBaseUnique());
    }

    /**
     * Tests __construct()
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
