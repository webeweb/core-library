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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\HistoriqueAppels;

/**
 * Historique appels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class HistoriqueAppelsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new HistoriqueAppels();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateurClot() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurClot() {

        $obj = new HistoriqueAppels();

        $obj->setCodeCollaborateurClot("codeCollaborateurClot");
        $this->assertEquals("codeCollaborateurClot", $obj->getCodeCollaborateurClot());
    }

    /**
     * Tests the setCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest() {

        $obj = new HistoriqueAppels();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests the setCodeCollaborateurEntrant() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant() {

        $obj = new HistoriqueAppels();

        $obj->setCodeCollaborateurEntrant("codeCollaborateurEntrant");
        $this->assertEquals("codeCollaborateurEntrant", $obj->getCodeCollaborateurEntrant());
    }

    /**
     * Tests the setCodeProduit() method.
     *
     * @return void
     */
    public function testSetCodeProduit() {

        $obj = new HistoriqueAppels();

        $obj->setCodeProduit("codeProduit");
        $this->assertEquals("codeProduit", $obj->getCodeProduit());
    }

    /**
     * Tests the setConfidentiel() method.
     *
     * @return void
     */
    public function testSetConfidentiel() {

        $obj = new HistoriqueAppels();

        $obj->setConfidentiel(true);
        $this->assertEquals(true, $obj->getConfidentiel());
    }

    /**
     * Tests the setConsequence() method.
     *
     * @return void
     */
    public function testSetConsequence() {

        $obj = new HistoriqueAppels();

        $obj->setConsequence("consequence");
        $this->assertEquals("consequence", $obj->getConsequence());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new HistoriqueAppels();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new HistoriqueAppels();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests the setEmailAuteur() method.
     *
     * @return void
     */
    public function testSetEmailAuteur() {

        $obj = new HistoriqueAppels();

        $obj->setEmailAuteur("emailAuteur");
        $this->assertEquals("emailAuteur", $obj->getEmailAuteur());
    }

    /**
     * Tests the setGroupeQualifiant() method.
     *
     * @return void
     */
    public function testSetGroupeQualifiant() {

        $obj = new HistoriqueAppels();

        $obj->setGroupeQualifiant("groupeQualifiant");
        $this->assertEquals("groupeQualifiant", $obj->getGroupeQualifiant());
    }

    /**
     * Tests the setIdHistorique() method.
     *
     * @return void
     */
    public function testSetIdHistorique() {

        $obj = new HistoriqueAppels();

        $obj->setIdHistorique(10);
        $this->assertEquals(10, $obj->getIdHistorique());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new HistoriqueAppels();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new HistoriqueAppels();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient() {

        $obj = new HistoriqueAppels();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setOrigine() method.
     *
     * @return void
     */
    public function testSetOrigine() {

        $obj = new HistoriqueAppels();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Tests the setPieceJointe() method.
     *
     * @return void
     */
    public function testSetPieceJointe() {

        $obj = new HistoriqueAppels();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests the setReponse() method.
     *
     * @return void
     */
    public function testSetReponse() {

        $obj = new HistoriqueAppels();

        $obj->setReponse("reponse");
        $this->assertEquals("reponse", $obj->getReponse());
    }

    /**
     * Tests the setSpecial() method.
     *
     * @return void
     */
    public function testSetSpecial() {

        $obj = new HistoriqueAppels();

        $obj->setSpecial("special");
        $this->assertEquals("special", $obj->getSpecial());
    }

    /**
     * Tests the setTel() method.
     *
     * @return void
     */
    public function testSetTel() {

        $obj = new HistoriqueAppels();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Tests the setTypeMessage() method.
     *
     * @return void
     */
    public function testSetTypeMessage() {

        $obj = new HistoriqueAppels();

        $obj->setTypeMessage("typeMessage");
        $this->assertEquals("typeMessage", $obj->getTypeMessage());
    }
}
