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

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\Missions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Missions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class MissionsTest extends AbstractTestCase {

    /**
     * Test setArticle()
     *
     * @return void
     */
    public function testSetArticle(): void {

        $obj = new Missions();

        $obj->setArticle("article");
        $this->assertEquals("article", $obj->getArticle());
    }

    /**
     * Test setBmCalcule()
     *
     * @return void
     */
    public function testSetBmCalcule(): void {

        $obj = new Missions();

        $obj->setBmCalcule(true);
        $this->assertTrue($obj->getBmCalcule());
    }

    /**
     * Test setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Missions();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Test setCloture()
     *
     * @return void
     */
    public function testSetCloture(): void {

        $obj = new Missions();

        $obj->setCloture(true);
        $this->assertTrue($obj->getCloture());
    }

    /**
     * Test setClotureContexte()
     *
     * @return void
     */
    public function testSetClotureContexte(): void {

        $obj = new Missions();

        $obj->setClotureContexte("clotureContexte");
        $this->assertEquals("clotureContexte", $obj->getClotureContexte());
    }

    /**
     * Test setClotureDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetClotureDate(): void {

        // Set a Date/time mock.
        $clotureDate = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setClotureDate($clotureDate);
        $this->assertSame($clotureDate, $obj->getClotureDate());
    }

    /**
     * Test setCloturePar()
     *
     * @return void
     */
    public function testSetCloturePar(): void {

        $obj = new Missions();

        $obj->setCloturePar("cloturePar");
        $this->assertEquals("cloturePar", $obj->getCloturePar());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Missions();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new Missions();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Test setCodeMissionType()
     *
     * @return void
     */
    public function testSetCodeMissionType(): void {

        $obj = new Missions();

        $obj->setCodeMissionType("codeMissionType");
        $this->assertEquals("codeMissionType", $obj->getCodeMissionType());
    }

    /**
     * Test setCodeResponsable()
     *
     * @return void
     */
    public function testSetCodeResponsable(): void {

        $obj = new Missions();

        $obj->setCodeResponsable("codeResponsable");
        $this->assertEquals("codeResponsable", $obj->getCodeResponsable());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateDebutTp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutTp(): void {

        // Set a Date/time mock.
        $dateDebutTp = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateDebutTp($dateDebutTp);
        $this->assertSame($dateDebutTp, $obj->getDateDebutTp());
    }

    /**
     * Test setDateFinTp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinTp(): void {

        // Set a Date/time mock.
        $dateFinTp = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateFinTp($dateFinTp);
        $this->assertSame($dateFinTp, $obj->getDateFinTp());
    }

    /**
     * Test setDateModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setDecalageFermetureAuto()
     *
     * @return void
     */
    public function testSetDecalageFermetureAuto(): void {

        $obj = new Missions();

        $obj->setDecalageFermetureAuto(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAuto());
    }

    /**
     * Test setDecalageFermetureAutoJours()
     *
     * @return void
     */
    public function testSetDecalageFermetureAutoJours(): void {

        $obj = new Missions();

        $obj->setDecalageFermetureAutoJours(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAutoJours());
    }

    /**
     * Test setDecalageOuvertureAuto()
     *
     * @return void
     */
    public function testSetDecalageOuvertureAuto(): void {

        $obj = new Missions();

        $obj->setDecalageOuvertureAuto(10);
        $this->assertEquals(10, $obj->getDecalageOuvertureAuto());
    }

    /**
     * Test setDescriptif()
     *
     * @return void
     */
    public function testSetDescriptif(): void {

        $obj = new Missions();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Test setDescriptifRtf()
     *
     * @return void
     */
    public function testSetDescriptifRtf(): void {

        $obj = new Missions();

        $obj->setDescriptifRtf("descriptifRtf");
        $this->assertEquals("descriptifRtf", $obj->getDescriptifRtf());
    }

    /**
     * Test setDtFermetureAuto()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtFermetureAuto(): void {

        // Set a Date/time mock.
        $dtFermetureAuto = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setDtFermetureAuto($dtFermetureAuto);
        $this->assertSame($dtFermetureAuto, $obj->getDtFermetureAuto());
    }

    /**
     * Test setFermetureAuto()
     *
     * @return void
     */
    public function testSetFermetureAuto(): void {

        $obj = new Missions();

        $obj->setFermetureAuto(true);
        $this->assertTrue($obj->getFermetureAuto());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Missions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMissionMillesime()
     *
     * @return void
     */
    public function testSetMissionMillesime(): void {

        $obj = new Missions();

        $obj->setMissionMillesime(true);
        $this->assertTrue($obj->getMissionMillesime());
    }

    /**
     * Test setMoisOuvertureAuto()
     *
     * @return void
     */
    public function testSetMoisOuvertureAuto(): void {

        $obj = new Missions();

        $obj->setMoisOuvertureAuto(10);
        $this->assertEquals(10, $obj->getMoisOuvertureAuto());
    }

    /**
     * Test setOuvertureContexte()
     *
     * @return void
     */
    public function testSetOuvertureContexte(): void {

        $obj = new Missions();

        $obj->setOuvertureContexte("ouvertureContexte");
        $this->assertEquals("ouvertureContexte", $obj->getOuvertureContexte());
    }

    /**
     * Test setOuvertureDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetOuvertureDate(): void {

        // Set a Date/time mock.
        $ouvertureDate = new DateTime("2018-09-10");

        $obj = new Missions();

        $obj->setOuvertureDate($ouvertureDate);
        $this->assertSame($ouvertureDate, $obj->getOuvertureDate());
    }

    /**
     * Test setOuverturePar()
     *
     * @return void
     */
    public function testSetOuverturePar(): void {

        $obj = new Missions();

        $obj->setOuverturePar("ouverturePar");
        $this->assertEquals("ouverturePar", $obj->getOuverturePar());
    }

    /**
     * Test setSociete()
     *
     * @return void
     */
    public function testSetSociete(): void {

        $obj = new Missions();

        $obj->setSociete("societe");
        $this->assertEquals("societe", $obj->getSociete());
    }

    /**
     * Test setTpArchive()
     *
     * @return void
     */
    public function testSetTpArchive(): void {

        $obj = new Missions();

        $obj->setTpArchive(true);
        $this->assertTrue($obj->getTpArchive());
    }

    /**
     * Test setTpCloture()
     *
     * @return void
     */
    public function testSetTpCloture(): void {

        $obj = new Missions();

        $obj->setTpCloture(true);
        $this->assertTrue($obj->getTpCloture());
    }

    /**
     * Test setTransfertCentre()
     *
     * @return void
     */
    public function testSetTransfertCentre(): void {

        $obj = new Missions();

        $obj->setTransfertCentre(true);
        $this->assertTrue($obj->getTransfertCentre());
    }

    /**
     * Test setTypeCentre()
     *
     * @return void
     */
    public function testSetTypeCentre(): void {

        $obj = new Missions();

        $obj->setTypeCentre("typeCentre");
        $this->assertEquals("typeCentre", $obj->getTypeCentre());
    }

    /**
     * Test setTypeResponsable()
     *
     * @return void
     */
    public function testSetTypeResponsable(): void {

        $obj = new Missions();

        $obj->setTypeResponsable("typeResponsable");
        $this->assertEquals("typeResponsable", $obj->getTypeResponsable());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
