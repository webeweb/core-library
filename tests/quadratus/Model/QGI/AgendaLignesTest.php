<?php

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
use Exception;
use WBW\Library\Quadratus\Model\QGI\AgendaLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaLignesTest extends AbstractTestCase {

    /**
     * Tests setBudgetNumUniq()
     *
     * @return void
     */
    public function testSetBudgetNumUniq(): void {

        $obj = new AgendaLignes();

        $obj->setBudgetNumUniq("budgetNumUniq");
        $this->assertEquals("budgetNumUniq", $obj->getBudgetNumUniq());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AgendaLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AgendaLignes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new AgendaLignes();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new AgendaLignes();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setCollCreation()
     *
     * @return void
     */
    public function testSetCollCreation(): void {

        $obj = new AgendaLignes();

        $obj->setCollCreation("collCreation");
        $this->assertEquals("collCreation", $obj->getCollCreation());
    }

    /**
     * Tests setCollModif()
     *
     * @return void
     */
    public function testSetCollModif(): void {

        $obj = new AgendaLignes();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Tests setConfirme()
     *
     * @return void
     */
    public function testSetConfirme(): void {

        $obj = new AgendaLignes();

        $obj->setConfirme(true);
        $this->assertEquals(true, $obj->getConfirme());
    }

    /**
     * Tests setCritereLibre()
     *
     * @return void
     */
    public function testSetCritereLibre(): void {

        $obj = new AgendaLignes();

        $obj->setCritereLibre("critereLibre");
        $this->assertEquals("critereLibre", $obj->getCritereLibre());
    }

    /**
     * Tests setDateCreation()
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
     * Tests setDateModif()
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
     * Tests setHeureDebut()
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
     * Tests setHeureFin()
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
     * Tests setInterlocuteur()
     *
     * @return void
     */
    public function testSetInterlocuteur(): void {

        $obj = new AgendaLignes();

        $obj->setInterlocuteur("interlocuteur");
        $this->assertEquals("interlocuteur", $obj->getInterlocuteur());
    }

    /**
     * Tests setIsTacheTp()
     *
     * @return void
     */
    public function testSetIsTacheTp(): void {

        $obj = new AgendaLignes();

        $obj->setIsTacheTp(10);
        $this->assertEquals(10, $obj->getIsTacheTp());
    }

    /**
     * Tests setIsTransf()
     *
     * @return void
     */
    public function testSetIsTransf(): void {

        $obj = new AgendaLignes();

        $obj->setIsTransf(true);
        $this->assertEquals(true, $obj->getIsTransf());
    }

    /**
     * Tests setJour()
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
     * Tests setMemoPlus()
     *
     * @return void
     */
    public function testSetMemoPlus(): void {

        $obj = new AgendaLignes();

        $obj->setMemoPlus("memoPlus");
        $this->assertEquals("memoPlus", $obj->getMemoPlus());
    }

    /**
     * Tests setMessage()
     *
     * @return void
     */
    public function testSetMessage(): void {

        $obj = new AgendaLignes();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests setNumOrdreMission()
     *
     * @return void
     */
    public function testSetNumOrdreMission(): void {

        $obj = new AgendaLignes();

        $obj->setNumOrdreMission("numOrdreMission");
        $this->assertEquals("numOrdreMission", $obj->getNumOrdreMission());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new AgendaLignes();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Tests setNumUniq2()
     *
     * @return void
     */
    public function testSetNumUniq2(): void {

        $obj = new AgendaLignes();

        $obj->setNumUniq2("numUniq2");
        $this->assertEquals("numUniq2", $obj->getNumUniq2());
    }

    /**
     * Tests setPieceJointe()
     *
     * @return void
     */
    public function testSetPieceJointe(): void {

        $obj = new AgendaLignes();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests setPrive()
     *
     * @return void
     */
    public function testSetPrive(): void {

        $obj = new AgendaLignes();

        $obj->setPrive(true);
        $this->assertEquals(true, $obj->getPrive());
    }

    /**
     * Tests setRecurrence()
     *
     * @return void
     */
    public function testSetRecurrence(): void {

        $obj = new AgendaLignes();

        $obj->setRecurrence("recurrence");
        $this->assertEquals("recurrence", $obj->getRecurrence());
    }

    /**
     * Tests setTypeActivite()
     *
     * @return void
     */
    public function testSetTypeActivite(): void {

        $obj = new AgendaLignes();

        $obj->setTypeActivite("typeActivite");
        $this->assertEquals("typeActivite", $obj->getTypeActivite());
    }

    /**
     * Tests __construct()
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
