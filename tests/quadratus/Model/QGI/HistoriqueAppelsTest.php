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
use WBW\Library\Quadratus\Model\QGI\HistoriqueAppels;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historique appels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class HistoriqueAppelsTest extends AbstractTestCase {

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new HistoriqueAppels();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaborateurClot()
     *
     * @return void
     */
    public function testSetCodeCollaborateurClot(): void {

        $obj = new HistoriqueAppels();

        $obj->setCodeCollaborateurClot("codeCollaborateurClot");
        $this->assertEquals("codeCollaborateurClot", $obj->getCodeCollaborateurClot());
    }

    /**
     * Tests setCodeCollaborateurDest()
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest(): void {

        $obj = new HistoriqueAppels();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests setCodeCollaborateurEntrant()
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant(): void {

        $obj = new HistoriqueAppels();

        $obj->setCodeCollaborateurEntrant("codeCollaborateurEntrant");
        $this->assertEquals("codeCollaborateurEntrant", $obj->getCodeCollaborateurEntrant());
    }

    /**
     * Tests setCodeProduit()
     *
     * @return void
     */
    public function testSetCodeProduit(): void {

        $obj = new HistoriqueAppels();

        $obj->setCodeProduit("codeProduit");
        $this->assertEquals("codeProduit", $obj->getCodeProduit());
    }

    /**
     * Tests setConfidentiel()
     *
     * @return void
     */
    public function testSetConfidentiel(): void {

        $obj = new HistoriqueAppels();

        $obj->setConfidentiel(true);
        $this->assertEquals(true, $obj->getConfidentiel());
    }

    /**
     * Tests setConsequence()
     *
     * @return void
     */
    public function testSetConsequence(): void {

        $obj = new HistoriqueAppels();

        $obj->setConsequence("consequence");
        $this->assertEquals("consequence", $obj->getConsequence());
    }

    /**
     * Tests setDateEntree()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new HistoriqueAppels();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests setDateSortie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new HistoriqueAppels();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests setEmailAuteur()
     *
     * @return void
     */
    public function testSetEmailAuteur(): void {

        $obj = new HistoriqueAppels();

        $obj->setEmailAuteur("emailAuteur");
        $this->assertEquals("emailAuteur", $obj->getEmailAuteur());
    }

    /**
     * Tests setGroupeQualifiant()
     *
     * @return void
     */
    public function testSetGroupeQualifiant(): void {

        $obj = new HistoriqueAppels();

        $obj->setGroupeQualifiant("groupeQualifiant");
        $this->assertEquals("groupeQualifiant", $obj->getGroupeQualifiant());
    }

    /**
     * Tests setIdHistorique()
     *
     * @return void
     */
    public function testSetIdHistorique(): void {

        $obj = new HistoriqueAppels();

        $obj->setIdHistorique(10);
        $this->assertEquals(10, $obj->getIdHistorique());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new HistoriqueAppels();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new HistoriqueAppels();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests setNomClient()
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new HistoriqueAppels();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests setOrigine()
     *
     * @return void
     */
    public function testSetOrigine(): void {

        $obj = new HistoriqueAppels();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Tests setPieceJointe()
     *
     * @return void
     */
    public function testSetPieceJointe(): void {

        $obj = new HistoriqueAppels();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests setReponse()
     *
     * @return void
     */
    public function testSetReponse(): void {

        $obj = new HistoriqueAppels();

        $obj->setReponse("reponse");
        $this->assertEquals("reponse", $obj->getReponse());
    }

    /**
     * Tests setSpecial()
     *
     * @return void
     */
    public function testSetSpecial(): void {

        $obj = new HistoriqueAppels();

        $obj->setSpecial("special");
        $this->assertEquals("special", $obj->getSpecial());
    }

    /**
     * Tests setTel()
     *
     * @return void
     */
    public function testSetTel(): void {

        $obj = new HistoriqueAppels();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Tests setTypeMessage()
     *
     * @return void
     */
    public function testSetTypeMessage(): void {

        $obj = new HistoriqueAppels();

        $obj->setTypeMessage("typeMessage");
        $this->assertEquals("typeMessage", $obj->getTypeMessage());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoriqueAppels();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateurClot());
        $this->assertNull($obj->getCodeCollaborateurDest());
        $this->assertNull($obj->getCodeCollaborateurEntrant());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getConfidentiel());
        $this->assertNull($obj->getConsequence());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getEmailAuteur());
        $this->assertNull($obj->getGroupeQualifiant());
        $this->assertNull($obj->getIdHistorique());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getReponse());
        $this->assertNull($obj->getSpecial());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTypeMessage());
    }
}
