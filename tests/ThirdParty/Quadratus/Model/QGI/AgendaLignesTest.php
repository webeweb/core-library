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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaLignes;

/**
 * Agenda lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaLignesTest extends AbstractTestCase {

    /**
     * Tests the setBudgetNumUniq() method.
     *
     * @return void
     */
    public function testSetBudgetNumUniq(): void {

        $obj = new AgendaLignes();

        $obj->setBudgetNumUniq("budgetNumUniq");
        $this->assertEquals("budgetNumUniq", $obj->getBudgetNumUniq());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AgendaLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AgendaLignes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new AgendaLignes();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new AgendaLignes();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCollCreation() method.
     *
     * @return void
     */
    public function testSetCollCreation(): void {

        $obj = new AgendaLignes();

        $obj->setCollCreation("collCreation");
        $this->assertEquals("collCreation", $obj->getCollCreation());
    }

    /**
     * Tests the setCollModif() method.
     *
     * @return void
     */
    public function testSetCollModif(): void {

        $obj = new AgendaLignes();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Tests the setConfirme() method.
     *
     * @return void
     */
    public function testSetConfirme(): void {

        $obj = new AgendaLignes();

        $obj->setConfirme(true);
        $this->assertEquals(true, $obj->getConfirme());
    }

    /**
     * Tests the setCritereLibre() method.
     *
     * @return void
     */
    public function testSetCritereLibre(): void {

        $obj = new AgendaLignes();

        $obj->setCritereLibre("critereLibre");
        $this->assertEquals("critereLibre", $obj->getCritereLibre());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new AgendaLignes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new AgendaLignes();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setHeureDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDebut(): void {

        // Set a Date/time mock.
        $heureDebut = new DateTime("2018-09-10");

        $obj = new AgendaLignes();

        $obj->setHeureDebut($heureDebut);
        $this->assertSame($heureDebut, $obj->getHeureDebut());
    }

    /**
     * Tests the setHeureFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFin(): void {

        // Set a Date/time mock.
        $heureFin = new DateTime("2018-09-10");

        $obj = new AgendaLignes();

        $obj->setHeureFin($heureFin);
        $this->assertSame($heureFin, $obj->getHeureFin());
    }

    /**
     * Tests the setInterlocuteur() method.
     *
     * @return void
     */
    public function testSetInterlocuteur(): void {

        $obj = new AgendaLignes();

        $obj->setInterlocuteur("interlocuteur");
        $this->assertEquals("interlocuteur", $obj->getInterlocuteur());
    }

    /**
     * Tests the setIsTacheTp() method.
     *
     * @return void
     */
    public function testSetIsTacheTp(): void {

        $obj = new AgendaLignes();

        $obj->setIsTacheTp(10);
        $this->assertEquals(10, $obj->getIsTacheTp());
    }

    /**
     * Tests the setIsTransf() method.
     *
     * @return void
     */
    public function testSetIsTransf(): void {

        $obj = new AgendaLignes();

        $obj->setIsTransf(true);
        $this->assertEquals(true, $obj->getIsTransf());
    }

    /**
     * Tests the setJour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetJour(): void {

        // Set a Date/time mock.
        $jour = new DateTime("2018-09-10");

        $obj = new AgendaLignes();

        $obj->setJour($jour);
        $this->assertSame($jour, $obj->getJour());
    }

    /**
     * Tests the setMemoPlus() method.
     *
     * @return void
     */
    public function testSetMemoPlus(): void {

        $obj = new AgendaLignes();

        $obj->setMemoPlus("memoPlus");
        $this->assertEquals("memoPlus", $obj->getMemoPlus());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage(): void {

        $obj = new AgendaLignes();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setNumOrdreMission() method.
     *
     * @return void
     */
    public function testSetNumOrdreMission(): void {

        $obj = new AgendaLignes();

        $obj->setNumOrdreMission("numOrdreMission");
        $this->assertEquals("numOrdreMission", $obj->getNumOrdreMission());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new AgendaLignes();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Tests the setNumUniq2() method.
     *
     * @return void
     */
    public function testSetNumUniq2(): void {

        $obj = new AgendaLignes();

        $obj->setNumUniq2("numUniq2");
        $this->assertEquals("numUniq2", $obj->getNumUniq2());
    }

    /**
     * Tests the setPieceJointe() method.
     *
     * @return void
     */
    public function testSetPieceJointe(): void {

        $obj = new AgendaLignes();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests the setPrive() method.
     *
     * @return void
     */
    public function testSetPrive(): void {

        $obj = new AgendaLignes();

        $obj->setPrive(true);
        $this->assertEquals(true, $obj->getPrive());
    }

    /**
     * Tests the setRecurrence() method.
     *
     * @return void
     */
    public function testSetRecurrence(): void {

        $obj = new AgendaLignes();

        $obj->setRecurrence("recurrence");
        $this->assertEquals("recurrence", $obj->getRecurrence());
    }

    /**
     * Tests the setTypeActivite() method.
     *
     * @return void
     */
    public function testSetTypeActivite(): void {

        $obj = new AgendaLignes();

        $obj->setTypeActivite("typeActivite");
        $this->assertEquals("typeActivite", $obj->getTypeActivite());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaLignes();

        $this->assertNull($obj->getBudgetNumUniq());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCollCreation());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getConfirme());
        $this->assertNull($obj->getCritereLibre());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getInterlocuteur());
        $this->assertNull($obj->getIsTacheTp());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getMemoPlus());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumOrdreMission());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumUniq2());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getPrive());
        $this->assertNull($obj->getRecurrence());
        $this->assertNull($obj->getTypeActivite());
    }
}
