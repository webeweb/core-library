<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Missions;

/**
 * Missions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class MissionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Missions();

        $this->assertNull($obj->getArticle());
        $this->assertNull($obj->getBmCalcule());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCloture());
        $this->assertNull($obj->getClotureContexte());
        $this->assertNull($obj->getClotureDate());
        $this->assertNull($obj->getCloturePar());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeMissionType());
        $this->assertNull($obj->getCodeResponsable());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebutTp());
        $this->assertNull($obj->getDateFinTp());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDecalageFermetureAuto());
        $this->assertNull($obj->getDecalageFermetureAutoJours());
        $this->assertNull($obj->getDecalageOuvertureAuto());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDescriptifRtf());
        $this->assertNull($obj->getDtFermetureAuto());
        $this->assertNull($obj->getFermetureAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMissionMillesime());
        $this->assertNull($obj->getMoisOuvertureAuto());
        $this->assertNull($obj->getOuvertureContexte());
        $this->assertNull($obj->getOuvertureDate());
        $this->assertNull($obj->getOuverturePar());
        $this->assertNull($obj->getSociete());
        $this->assertNull($obj->getTpArchive());
        $this->assertNull($obj->getTpCloture());
        $this->assertNull($obj->getTransfertCentre());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeResponsable());
    }

    /**
     * Tests the setArticle() method.
     *
     * @return void
     */
    public function testSetArticle() {

        $obj = new Missions();

        $obj->setArticle("article");
        $this->assertEquals("article", $obj->getArticle());
    }

    /**
     * Tests the setBmCalcule() method.
     *
     * @return void
     */
    public function testSetBmCalcule() {

        $obj = new Missions();

        $obj->setBmCalcule(true);
        $this->assertEquals(true, $obj->getBmCalcule());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new Missions();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setCloture() method.
     *
     * @return void
     */
    public function testSetCloture() {

        $obj = new Missions();

        $obj->setCloture(true);
        $this->assertEquals(true, $obj->getCloture());
    }

    /**
     * Tests the setClotureContexte() method.
     *
     * @return void
     */
    public function testSetClotureContexte() {

        $obj = new Missions();

        $obj->setClotureContexte("clotureContexte");
        $this->assertEquals("clotureContexte", $obj->getClotureContexte());
    }

    /**
     * Tests the setClotureDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetClotureDate() {

        // Set a Date/time mock.
        $clotureDate = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setClotureDate($clotureDate);
        $this->assertSame($clotureDate, $obj->getClotureDate());
    }

    /**
     * Tests the setCloturePar() method.
     *
     * @return void
     */
    public function testSetCloturePar() {

        $obj = new Missions();

        $obj->setCloturePar("cloturePar");
        $this->assertEquals("cloturePar", $obj->getCloturePar());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Missions();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new Missions();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodeMissionType() method.
     *
     * @return void
     */
    public function testSetCodeMissionType() {

        $obj = new Missions();

        $obj->setCodeMissionType("codeMissionType");
        $this->assertEquals("codeMissionType", $obj->getCodeMissionType());
    }

    /**
     * Tests the setCodeResponsable() method.
     *
     * @return void
     */
    public function testSetCodeResponsable() {

        $obj = new Missions();

        $obj->setCodeResponsable("codeResponsable");
        $this->assertEquals("codeResponsable", $obj->getCodeResponsable());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateDebutTp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutTp() {

        // Set a Date/time mock.
        $dateDebutTp = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateDebutTp($dateDebutTp);
        $this->assertSame($dateDebutTp, $obj->getDateDebutTp());
    }

    /**
     * Tests the setDateFinTp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinTp() {

        // Set a Date/time mock.
        $dateFinTp = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateFinTp($dateFinTp);
        $this->assertSame($dateFinTp, $obj->getDateFinTp());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDecalageFermetureAuto() method.
     *
     * @return void
     */
    public function testSetDecalageFermetureAuto() {

        $obj = new Missions();

        $obj->setDecalageFermetureAuto(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAuto());
    }

    /**
     * Tests the setDecalageFermetureAutoJours() method.
     *
     * @return void
     */
    public function testSetDecalageFermetureAutoJours() {

        $obj = new Missions();

        $obj->setDecalageFermetureAutoJours(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAutoJours());
    }

    /**
     * Tests the setDecalageOuvertureAuto() method.
     *
     * @return void
     */
    public function testSetDecalageOuvertureAuto() {

        $obj = new Missions();

        $obj->setDecalageOuvertureAuto(10);
        $this->assertEquals(10, $obj->getDecalageOuvertureAuto());
    }

    /**
     * Tests the setDescriptif() method.
     *
     * @return void
     */
    public function testSetDescriptif() {

        $obj = new Missions();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests the setDescriptifRtf() method.
     *
     * @return void
     */
    public function testSetDescriptifRtf() {

        $obj = new Missions();

        $obj->setDescriptifRtf("descriptifRtf");
        $this->assertEquals("descriptifRtf", $obj->getDescriptifRtf());
    }

    /**
     * Tests the setDtFermetureAuto() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFermetureAuto() {

        // Set a Date/time mock.
        $dtFermetureAuto = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDtFermetureAuto($dtFermetureAuto);
        $this->assertSame($dtFermetureAuto, $obj->getDtFermetureAuto());
    }

    /**
     * Tests the setFermetureAuto() method.
     *
     * @return void
     */
    public function testSetFermetureAuto() {

        $obj = new Missions();

        $obj->setFermetureAuto(true);
        $this->assertEquals(true, $obj->getFermetureAuto());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Missions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMissionMillesime() method.
     *
     * @return void
     */
    public function testSetMissionMillesime() {

        $obj = new Missions();

        $obj->setMissionMillesime(true);
        $this->assertEquals(true, $obj->getMissionMillesime());
    }

    /**
     * Tests the setMoisOuvertureAuto() method.
     *
     * @return void
     */
    public function testSetMoisOuvertureAuto() {

        $obj = new Missions();

        $obj->setMoisOuvertureAuto(10);
        $this->assertEquals(10, $obj->getMoisOuvertureAuto());
    }

    /**
     * Tests the setOuvertureContexte() method.
     *
     * @return void
     */
    public function testSetOuvertureContexte() {

        $obj = new Missions();

        $obj->setOuvertureContexte("ouvertureContexte");
        $this->assertEquals("ouvertureContexte", $obj->getOuvertureContexte());
    }

    /**
     * Tests the setOuvertureDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetOuvertureDate() {

        // Set a Date/time mock.
        $ouvertureDate = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setOuvertureDate($ouvertureDate);
        $this->assertSame($ouvertureDate, $obj->getOuvertureDate());
    }

    /**
     * Tests the setOuverturePar() method.
     *
     * @return void
     */
    public function testSetOuverturePar() {

        $obj = new Missions();

        $obj->setOuverturePar("ouverturePar");
        $this->assertEquals("ouverturePar", $obj->getOuverturePar());
    }

    /**
     * Tests the setSociete() method.
     *
     * @return void
     */
    public function testSetSociete() {

        $obj = new Missions();

        $obj->setSociete("societe");
        $this->assertEquals("societe", $obj->getSociete());
    }

    /**
     * Tests the setTpArchive() method.
     *
     * @return void
     */
    public function testSetTpArchive() {

        $obj = new Missions();

        $obj->setTpArchive(true);
        $this->assertEquals(true, $obj->getTpArchive());
    }

    /**
     * Tests the setTpCloture() method.
     *
     * @return void
     */
    public function testSetTpCloture() {

        $obj = new Missions();

        $obj->setTpCloture(true);
        $this->assertEquals(true, $obj->getTpCloture());
    }

    /**
     * Tests the setTransfertCentre() method.
     *
     * @return void
     */
    public function testSetTransfertCentre() {

        $obj = new Missions();

        $obj->setTransfertCentre(true);
        $this->assertEquals(true, $obj->getTransfertCentre());
    }

    /**
     * Tests the setTypeCentre() method.
     *
     * @return void
     */
    public function testSetTypeCentre() {

        $obj = new Missions();

        $obj->setTypeCentre("typeCentre");
        $this->assertEquals("typeCentre", $obj->getTypeCentre());
    }

    /**
     * Tests the setTypeResponsable() method.
     *
     * @return void
     */
    public function testSetTypeResponsable() {

        $obj = new Missions();

        $obj->setTypeResponsable("typeResponsable");
        $this->assertEquals("typeResponsable", $obj->getTypeResponsable());
    }
}
