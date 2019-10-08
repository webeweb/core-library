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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesDUCS;

/**
 * Lignes d u c s model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesDUCSTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesDUCS();

        $this->assertNull($obj->getCodeAT());
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
        $this->assertNull($obj->getTauxAT());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
        $this->assertNull($obj->getTypeBaseUnique());
    }

    /**
     * Tests the setCodeAT() method.
     *
     * @return void
     */
    public function testSetCodeAT() {

        $obj = new LignesDUCS();

        $obj->setCodeAT(10);
        $this->assertEquals(10, $obj->getCodeAT());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new LignesDUCS();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeDucs() method.
     *
     * @return void
     */
    public function testSetCodeDucs() {

        $obj = new LignesDUCS();

        $obj->setCodeDucs("codeDucs");
        $this->assertEquals("codeDucs", $obj->getCodeDucs());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new LignesDUCS();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeInsee() method.
     *
     * @return void
     */
    public function testSetCodeInsee() {

        $obj = new LignesDUCS();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new LignesDUCS();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setConditionSpec() method.
     *
     * @return void
     */
    public function testSetConditionSpec() {

        $obj = new LignesDUCS();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication() {

        $obj = new LignesDUCS();

        $obj->setDateApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
    }

    /**
     * Tests the setExclureFusion() method.
     *
     * @return void
     */
    public function testSetExclureFusion() {

        $obj = new LignesDUCS();

        $obj->setExclureFusion(true);
        $this->assertEquals(true, $obj->getExclureFusion());
    }

    /**
     * Tests the setIdInstitution() method.
     *
     * @return void
     */
    public function testSetIdInstitution() {

        $obj = new LignesDUCS();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new LignesDUCS();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIsTaux() method.
     *
     * @return void
     */
    public function testSetIsTaux() {

        $obj = new LignesDUCS();

        $obj->setIsTaux(true);
        $this->assertEquals(true, $obj->getIsTaux());
    }

    /**
     * Tests the setMarque() method.
     *
     * @return void
     */
    public function testSetMarque() {

        $obj = new LignesDUCS();

        $obj->setMarque(true);
        $this->assertEquals(true, $obj->getMarque());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new LignesDUCS();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMtPatronal() method.
     *
     * @return void
     */
    public function testSetMtPatronal() {

        $obj = new LignesDUCS();

        $obj->setMtPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPatronal());
    }

    /**
     * Tests the setMtSalarial() method.
     *
     * @return void
     */
    public function testSetMtSalarial() {

        $obj = new LignesDUCS();

        $obj->setMtSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalarial());
    }

    /**
     * Tests the setNbCot() method.
     *
     * @return void
     */
    public function testSetNbCot() {

        $obj = new LignesDUCS();

        $obj->setNbCot(10.092018);
        $this->assertEquals(10.092018, $obj->getNbCot());
    }

    /**
     * Tests the setNbPatronal() method.
     *
     * @return void
     */
    public function testSetNbPatronal() {

        $obj = new LignesDUCS();

        $obj->setNbPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPatronal());
    }

    /**
     * Tests the setNbSalarial() method.
     *
     * @return void
     */
    public function testSetNbSalarial() {

        $obj = new LignesDUCS();

        $obj->setNbSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getNbSalarial());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new LignesDUCS();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla() {

        $obj = new LignesDUCS();

        $obj->setPeriodeDecla(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
    }

    /**
     * Tests the setQualifiantCotis() method.
     *
     * @return void
     */
    public function testSetQualifiantCotis() {

        $obj = new LignesDUCS();

        $obj->setQualifiantCotis("qualifiantCotis");
        $this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
    }

    /**
     * Tests the setSommeBase() method.
     *
     * @return void
     */
    public function testSetSommeBase() {

        $obj = new LignesDUCS();

        $obj->setSommeBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSommeBase());
    }

    /**
     * Tests the setTauxAT() method.
     *
     * @return void
     */
    public function testSetTauxAT() {

        $obj = new LignesDUCS();

        $obj->setTauxAT(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAT());
    }

    /**
     * Tests the setTauxPatronal() method.
     *
     * @return void
     */
    public function testSetTauxPatronal() {

        $obj = new LignesDUCS();

        $obj->setTauxPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronal());
    }

    /**
     * Tests the setTauxSalarial() method.
     *
     * @return void
     */
    public function testSetTauxSalarial() {

        $obj = new LignesDUCS();

        $obj->setTauxSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarial());
    }

    /**
     * Tests the setTypeBaseUnique() method.
     *
     * @return void
     */
    public function testSetTypeBaseUnique() {

        $obj = new LignesDUCS();

        $obj->setTypeBaseUnique(true);
        $this->assertEquals(true, $obj->getTypeBaseUnique());
    }
}
